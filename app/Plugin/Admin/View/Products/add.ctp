<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <?php echo isset($contentHeader) ? $contentHeader : ''; ?>
                </h2>
            </div>
            <?php echo $this->element('..' . DS . 'Products' . DS . '_form');?>
        </div>
    </div>
</div>