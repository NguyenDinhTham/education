<?php
//echo $this->Html->script('//cdn.ckeditor.com/4.7.3/full/ckeditor.js');
echo $this->Html->css('../assets/components/dropify-master/css/dropify.min.css');
echo $this->Html->css('../assets/components/dropify-master/css/dropify_cus.css');
//echo $this->Html->css('../assets/components/bootstrap-select/bootstrap-select');
echo $this->Html->script('../assets/components/dropify-master/js/dropify.min.js');
//echo $this->Html->script('../assets/components/bootstrap-select/bootstrap-select');

echo $this->Form->create('Products',
    array('class' => "form-horizontal",
        'url' => $action,
        'role' => 'form',
        'type' => 'file'
    ));
?>

<?php

$isEdit = isset($id) ? 1 : 0;

?>
<div class="body">

    <div class="row clearfix">
        <div class="col-md-6">
            <div class="row clearfix">
                <div class="col-md-3">
                    <label><?php echo __('Service Name'); ?></label>
                </div>
                <div class="col-md-9">
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
                <div class="col-md-3">
                    <label><?php echo __('Service Group'); ?></label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <div class="form-line">
                            <?php echo $this->Form->input('parent_id',
                                array('class' => 'form-control show-tick',
                                    'label' => false,
                                    'options' => [],
                                    'required' => true,
                                    'error' => false
                                ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-3">
                    <label><?php echo __('Gallery'); ?></label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <div class="form-line">
                            <?php echo $this->Form->input('gallery_id',
                                array('class' => 'form-control',
                                    'label' => false,
                                    'options' => [],
                                    'required' => true,
                                    'error' => false
                                ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-3">
                    <label><?php echo __('Price'); ?></label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <div class="form-line">
                            <?php echo $this->Form->input('price',
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
        </div>

        <div class="col-md-2">
            <label><?php echo __('Logo'); ?></label>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <div class="form-line">
                    <input type="file" id="input-file-now-custom-2" class="dropify" data-height="180" />
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">

        <div class="col-md-6">
            <div class="row clearfix">
                <div class="col-md-3">
                    <label><?php echo __('Ordinal'); ?></label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <div class="form-line">
                            <?php echo $this->Form->input('order',
                                array('class' => 'form-control',
                                    'label' => false,
                                    'type' => 'number',
                                    'required' => true,
                                    'error' => false
                                ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row clearfix">
                <div class="col-md-3">
                    <label><?php echo __('Unit (Time, Weight...)'); ?></label>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="form-line">
                            <?php echo $this->Form->input('time',
                                array('class' => 'form-control',
                                    'label' => false,
                                    'required' => true,
                                    'error' => false
                                ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-line">
                            <?php echo $this->Form->input('unit_text',
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
        </div>

    </div>

    <div class="row clearfix">
        <div class="col-md-6">
            <div class="row clearfix">
                <div class="col-md-3">
                    <label><?php echo __('Status'); ?></label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <div class="form-line">
                            <?php echo $this->Form->input('status',
                                array('class' => 'form-control',
                                    'label' => false,
                                    'options' => [],
                                    'required' => true,
                                    'error' => false
                                ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row clearfix">
                <div class="col-md-3">
                    <label><?php echo __('Global'); ?></label>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="checkbox" id="basic_checkbox_2" name="data[Product][is_global]" class="filled-in" checked="">
                        <label for="basic_checkbox_2"></label>
                    </div>
                </div>

                <div class="col-md-2">
                    <label><?php echo __('Booking'); ?></label>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="checkbox" id="basic_checkbox_3" name="data[Product][is_booking]" class="filled-in" checked="">
                        <label for="basic_checkbox_3"></label>
                    </div>
                </div>
                <?php if($isEdit) { ?>
                <div class="col-md-3">
                    <label><?php echo __('Hits'); ?></label>
                </div>
                <?php } ?>
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

<script>
    $(document).ready(function(){
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove:  'Supprimer',
                error:   'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element){
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element){
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element){
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e){
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>



