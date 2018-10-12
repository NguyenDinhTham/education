<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>

    <?php include('Include/head.ctp'); ?>

    <?php echo $this->element('Common/common_variables') ?>
    <?php echo $this->element('Admin.datatable_config') ?>

</head>
<body class="theme-red">
    <?php include('Include/header.ctp'); ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php include('Include/left_menu.ctp'); ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    <?php
                    if (isset($breadcrumb) && $breadcrumb) {
                        echo $this->App->breadcrumbRender($breadcrumb);
                    }
                    ?>
                </h2>
            </div>
            <?php echo $this->Flash->render(); ?>

            <?php echo $this->fetch('content'); ?>
        </div>
    </section>
    <!-- /.content -->
</body>
</html>
