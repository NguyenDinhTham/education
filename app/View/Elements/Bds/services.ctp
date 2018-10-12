<?php $listApartment = isset($listApartment) ? $listApartment : []; ?>
<div class="about_top">
    <div class="container">
        <div class="about">
            <?php for($i=0; $i<count($listApartment); $i++) {
                $apartmentInfo = $listApartment[$i];
                $picture = $apartmentInfo['picture'];
                $name = $apartmentInfo['name'];
                $address = $apartmentInfo['address'];
                if($i % 4 == 0) {
            ?>
            <div class="service_grid">

                <?php } ?>
                <div class="col-md-3 service_box">
                    <a class="fancybox" href="<?php echo $picture;?>" data-fancybox-group="gallery" title="<?php echo $name; ?>"><img src="<?php echo $picture;?>" class="img-responsive img-height-service" alt="<?php echo $name; ?>"/><span> </span></a>
                    <h3><?php echo $name; ?></h3>
                    <p><?php echo $address; ?><span>  <a href="#">[...]</a></span></p>
                </div>
                <?php if(($i+1) % 4 == 0) { ?>
                <div class="clearfix"> </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
        <?php
        echo $this->Html->script('layouts/jquery.fancybox');
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.fancybox').fancybox();
            });
        </script>