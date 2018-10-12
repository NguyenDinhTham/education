<?php echo $this->Html->css('../assets/components/datatables/dataTables.bootstrap.min'); ?>
<?php echo $this->Html->script('../assets/components/datatables/jquery.dataTables.min'); ?>
<?php echo $this->Html->script('../assets/components/datatables/dataTables.bootstrap.min'); ?>
<?php echo $this->Html->script('jquery.number.min'); ?>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 class="box-title">
                    <?php echo isset($contentHeader) ? $contentHeader : ''; ?>
                </h2>
                <a href="<?php echo $this->Html->Url(['plugin' => 'admin', 'controller' => 'Products', 'action' => 'add']); ?>" type="button" data-toggle="tooltip" data-original-title="<?php echo __('Thêm'); ?>" class="btn btn-success waves-effect pull-right"><i class="fa fa-plus"></i></a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="productTable" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                        <tr>
                            <th><?php echo __('No.') ?></th>
                            <th><?php echo __('Name') ?></th>
                            <th><?php echo __('Picture') ?></th>
                            <th><?php echo __('Price') ?></th>
                            <th><?php echo __('Status') ?></th>
                            <th class="cls-action-admin"></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="application/javascript">

    var ajaxShopTable,
        DECIMAL_SYMBOL = ",",
        NO_OF_DIGIT_AFTER_DECIMAL = 2,
        DIGIT_GROUPING_SYMBOL = ".";

    $(function() {
        ajaxShopTable = $('#productTable').DataTable({
//            language: APP.dataTableLanguage,
            pagingType: "full_numbers",
            searching: true,
            info: true,
            lengthChange: true,
            pageLength: 25,
            ordering: true,
            processing: true,
            serverSide: true,
            deferLoading: 0,
            ajax: {
                url: "<?php echo $this->Html->url(array('plugin' => 'admin', 'controller' => 'products', 'action' => 'index'), true); ?>",
                data: function ( d ) {
                }
            },
            fnRowCallback: function( nRow, aData, iDisplayIndex ) {
                var info = ajaxShopTable.page.info();
                var index = iDisplayIndex + 1 + (info.page*info.length);
                $('td:eq(0)', nRow).html(index);
                return nRow;
            },
            columns: [
                { "data": null, "class": "text-center", "width" : "1%"},
                { "data": "name", "name": "name" },
                { "data": "picture", "name": "picture",
                    "render": function (data, type, row) {
                        if(data != '') {
                            return '<img src="'+row.picture+'" alt="'+row.name+'" style="width: 50px; height: 50px">';
                        } else {
                            return '';
                        }
                    }
                },
                { "data": "price", "name": "price",
                    "render" : function ( data, type, row ) {
                        if(!isNaN(data) && data != "" && data != null){
                            if(data.toString().match(/^-?\d*(\.\d+)?$/)){

                                return $.number(data, NO_OF_DIGIT_AFTER_DECIMAL, DECIMAL_SYMBOL, DIGIT_GROUPING_SYMBOL);

                            }else{

                                return "";

                            }

                        }else{
                            return data;
                        }
                    }
                },
                { "data": "status", "name": "status", "width" : "3%",
                    "render": function (data, type, row) {
                        if(data == 1) {
                            return 'Active';
                        } else {
                            return 'Inactive';
                        }
                    }
                },
                { "data": null, "class": "text-center",
                    "render": function (data, type, row) {
                        return '<a href="<?php echo $this->Html->url(['plugin' => 'admin','controller' => 'products', 'action' => 'edit']) ?>/'+row.id+'" class="btn btn-primary waves-effect btn-admin-action" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo __('Sửa'); ?>" title=""><i class="material-icons">mode_edit</i></a>' +
                                '<a href="#" class="btn btn-danger waves-effect btn-admin-action btn-delete-shop" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo __('Xóa'); ?>" title=""><i class="material-icons">delete</i></a>';
                    }
                }
            ]
        }).ajax.reload();

        $(document).on('click', '.btn-delete-shop', function(e) {
            e.preventDefault();

            var elmEdit = $(this).parents('tr');
            var record = ajaxShopTable.row(elmEdit).data();

            alert(record.id);
        });
    });
</script>