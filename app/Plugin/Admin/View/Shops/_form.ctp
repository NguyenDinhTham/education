<?php
echo $this->Html->script('//cdn.ckeditor.com/4.7.3/full/ckeditor.js');
echo $this->Html->css('../assets/components/file-input/fileinput.min');
echo $this->Html->css('../assets/components/bootstrap-select/bootstrap-select');
echo $this->Html->script('../assets/components/file-input/fileinput.min');
echo $this->Html->script('../assets/components/bootstrap-select/bootstrap-select');

echo $this->Form->create('Shops',
    array('class' => "form-horizontal",
        'url' => $action,
        'role' => 'form',
        'type' => 'file'
    ));
?>

<?php

$id = isset($carFuelInfo['id']) ? $carFuelInfo['id'] : '';
$status = isset($carFuelInfo['status']) ? $carFuelInfo['status'] : 1;
$isEdit = $id ? 1 : 0;

?>
<div class="body">


    <div class="row clearfix">
        <div class="col-md-2">
            <label><?php echo __('Tên loại'); ?></label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <div class="form-line">
                    <?php echo $this->Form->input('name',
                        array('class' => 'form-control',
                            'label' => false,
                            'required' => true,
                            'error' => false
                        ));
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-2">
            <label><?php echo __('Tên loại'); ?></label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <div class="form-line">
                    <?php echo $this->Form->input('name',
                        array('class' => 'form-control',
                            'label' => false,
                            'required' => true,
                            'error' => false
                        ));
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-2">
            <label><?php echo __('Tên loại'); ?></label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <div class="form-line">
                    <?php echo $this->Form->input('name',
                        array('class' => 'form-control',
                            'label' => false,
                            'required' => true,
                            'error' => false
                        ));
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-12 margin-footer text-center">
            <input class="btn btn-success" type="submit" id="save" name="_eventId_save" value="<?php echo __('Save'); ?>"/>
            <a class="btn btn-danger" href="<?php echo $this->Html->Url(['plugin' => 'admin', 'controller' => 'shops', 'action' => 'index']); ?>" name="_eventId_cancel"><?php echo __('Cancel'); ?></a>
        </div>
    </div>

</div>

<?php
echo $this->Form->end(null);
?>



