<?php

App::uses('Component', 'Controller');

class AppServiceComponent extends Component {

    public function initialize(Controller $controller) {

    }

    public function getDataSource(){

        return ConnectionManager::getDataSource('default');

    }

    public function getLastLogQuery(){

        $dbo = $this->getDataSource('default');
        $logs = $dbo->getLog();
        $count_log = count($logs['log']);
        $lastLog = $logs['log'][($count_log-1)];
        return isset($lastLog['query']) ? $lastLog['query'] : "";

    }

    public function uploadAvatar($fileToUpload, $pathToFile = null){

        $message = "";

        $target_dir = WWW_ROOT."uploads/";

        if ($pathToFile) {

            $target_dir = $target_dir.$pathToFile;

        }

        $target_file = $target_dir . basename($fileToUpload["name"]);

        $uploadOk = 1;

        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        if (!file_exists($target_dir)) {

            mkdir($target_dir, 0777, true);

        }

        // Check if file already exists
        if (file_exists($target_file)) {
            // echo "Sorry, file already exists.";
            // $uploadOk = 0;
        }

        // Check file size
        if ($fileToUpload["size"] > 5120000) {
            // echo "Sorry, your file is too large.";
            // $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {

            $message = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file

        } else {

            // some information about image we need later.
            $ImageName = $fileToUpload["name"];
            $ImageSize = $fileToUpload['size'];
            $TempSrc = $fileToUpload['tmp_name'];
            $ImageType = $fileToUpload['type'];

            $processImage = true;

            //Validate file + create image from uploaded file.
            switch(strtolower($ImageType)){

                case 'image/png':
                    $CreatedImage = imagecreatefrompng($TempSrc);
                    break;
                case 'image/gif':
                    $CreatedImage = imagecreatefromgif($TempSrc);
                    break;
                case 'image/jpeg':
                    $CreatedImage = imagecreatefromjpeg($TempSrc);
                    break;
                case 'image/pjpeg':
                    $CreatedImage = imagecreatefromjpeg($TempSrc);
                    break;
                default:
                    $processImage = false; //image format is not supported!
                    $message = array("msg" => "Image format is not supported!", "imageType" => $ImageType);

            }

            if($processImage){

                //get Image Size
                list($CurWidth,$CurHeight) = getimagesize($TempSrc);
                $DestRandImageName = $target_dir . basename($fileToUpload["name"]);
                $Quality = 100;
                $MaxHeightSize = MAX_HEIGHT_SIZE;
                $MaxWidthSize = MAX_WIDTH_SIZE;
                $imageResize = IMAGE_RESIZE;

                if($ImageSize > $imageResize){

                    $message = $this->resizeImage($CurWidth, $CurHeight, $MaxHeightSize, $MaxWidthSize, $DestRandImageName, $CreatedImage, $Quality, $ImageType, $imageResize);

                }else{

                    if (move_uploaded_file($TempSrc, $DestRandImageName)) {

                        $message = "File has been uploaded.";

                    } else {

                        $message = "Sorry, there was an error uploading your file.";

                    }

                }

            }

            return $message;

        }
    }

    public function resizeImage($CurWidth, $CurHeight, $MaxHeightSize, $MaxWidthSize, $DestFolder, $SrcImage, $Quality, $ImageType, $imageResize){

        $message = "";
        //Check Image size is not 0
        if($CurWidth <= 0 || $CurHeight <= 0){

            $message = "Image size is not 0";
            return $message;

        }

        //Construct a proportional size of new image
        $ImageScale = $MaxWidthSize/$CurWidth;
        $NewWidth = ceil($ImageScale*$CurWidth);
        $NewHeight = ceil($ImageScale*$CurHeight);

        if($NewHeight > $MaxHeightSize){

            $ImageScale = $MaxHeightSize/$NewHeight;
            $NewWidth = ceil($ImageScale*$NewWidth);
            $NewHeight = ceil($ImageScale*$NewHeight);

        }

        if($CurWidth < $NewWidth || $CurHeight < $NewHeight){

            $NewWidth = $CurWidth;
            $NewHeight = $CurHeight;

        }

        $NewCanves = imagecreatetruecolor($NewWidth, $NewHeight);

        $Quality = (100-(($NewWidth*$NewHeight)*3)/$imageResize);

        // Resize Image
        if(imagecopyresampled($NewCanves, $SrcImage, 0, 0, 0, 0, $NewWidth, $NewHeight, $CurWidth, $CurHeight)){

            switch(strtolower($ImageType)){

                case 'image/png':
                    imagejpeg($NewCanves, $DestFolder, $Quality);
                    break;
                case 'image/gif':
                    imagegif($NewCanves, $DestFolder);
                    break;
                case 'image/jpeg':
                case 'image/pjpeg':
                    imagejpeg($NewCanves, $DestFolder, $Quality);
                    break;
                default:
                    return false;

            }

            if(is_resource($NewCanves)){

                imagedestroy($NewCanves);

            }

            return true;

        }else{

            $message = array("msg" => "Can not resize image", "imageType" => $ImageType);

        }

        return $message;

    }

    public function removeAllChildInFolder($pathFolder){
        $destination_path = $pathFolder.'/*';
        $files = glob($destination_path); // get all file names
        foreach($files as $file){ // iterate files
            if(is_file($file))
                unlink($file); // delete file
        }
    }

    public function sendEmail($config, $sender, $receipt, $subject, $message, $format, $template, $viewVars = array(), $cc=null, $bcc = null) {
        $Email = new CakeEmail($config);
        $Email->from($sender);
        $Email->to($receipt);
        $Email->emailFormat($format);
        $Email->subject($subject);
        $Email->template($template);
        $Email->viewVars($viewVars);
        $Email->CharSet = "UTF-8";
        if($cc != '' && $cc != null){
            $Email->cc($cc);
        }
        if($bcc != '' && $bcc != null){
            $Email->bcc($bcc);
        }

        return $Email->send($message);
    }

}