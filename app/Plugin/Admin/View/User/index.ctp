<?php echo $this->Html->css('../assets/components/datatables/dataTables.bootstrap.min'); ?>
<?php echo $this->Html->script('../assets/components/datatables/jquery.dataTables.min'); ?>
<?php echo $this->Html->script('../assets/components/datatables/dataTables.bootstrap.min'); ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                <?php echo isset($contentHeader) ? $contentHeader : 'Users'; ?>
            </h2>
        </div>
        <div class="box-body">
            <table id="userTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><?php echo __('Stt') ?></th>
                    <th><?php echo __('Tài khoản') ?></th>
                    <th><?php echo __('Họ tên') ?></th>
                    <th><?php echo __('Email') ?></th>
                    <th><?php echo __('Ngày đăng ký') ?></th>
                    <th><?php echo __('Trạng thái') ?></th>
                    <th></th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<script type="application/javascript">

    var ajaxUserTable;

    $(function() {
        /*ajaxUserTable = $('#userTable').DataTable({
            language: APP.dataTableLanguage,
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
                url: "<?php echo $this->Html->url(array('plugin' => 'admin', 'controller' => 'user', 'action' => 'index'), true); ?>",
                data: function ( d ) {
                }
            },
            fnRowCallback: function( nRow, aData, iDisplayIndex ) {
                var info = ajaxUserTable.page.info();
                var index = iDisplayIndex + 1 + (info.page*info.length);
                $('td:eq(0)', nRow).html(index);
                return nRow;
            },
            columns: [
                { "data": null, "class": "text-center", "width" : "1%"},
                { "data": "username", "name": "username" },
                { "data": "realname", "name": "realname" },
                { "data": "email", "name": "email" },
                { "data": "join_date", "name": "join_date" },
                { "data": "status_name", "name": "status" },
                { "data": null, "class": "text-center",
                    "render": function (data, type, row) {
                        return '<a href="<?php echo $this->Html->url(['plugin' => 'admin','controller' => 'user', 'action' => 'edit']) ?>/'+row.id+'" class="btn btn-sm btn-circle btn-primary m-bottom-5" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo __('Sửa'); ?>" title=""><i class="fa fa-edit"></i></a>' +
                                '<a href="#" class="btn btn-sm btn-circle btn-danger m-bottom-5 btn-delete-user" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo __('Xóa'); ?>" title=""><i class="fa fa-trash-o"></i></a>';
                    }
                }
            ],
            columnDefs: [
                { "orderable": false, "targets": 0 },
                { "orderable": false, "targets": 6, "width": '80px' }
            ]
        }).ajax.reload();*/

        $(document).on('click', '.btn-delete-user', function(e) {
            e.preventDefault();

            var elmEdit = $(this).parents('tr');
            var record = ajaxUserTable.row(elmEdit).data();

            alert(record.id);
        });
    });
</script>