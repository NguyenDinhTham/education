<!DOCTYPE HTML>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $this->fetch('title'); ?></title>
    <link rel="icon" href="<?php echo $this->webroot.'img/Logo4.png' ?>">
    <link rel="shortcut icon" href="<?php echo $this->webroot.'img/Logo4.png' ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <?php
    echo $this->Html->script('jquery');
    echo $this->Html->script('bootstrap');
    echo $this->Html->script('common.js?v=20180110');
    echo $this->Html->script('libs/jquery.bxslider');

    echo $this->Html->css('font-awesome');
    echo $this->Html->css('login/style');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');

    ?>

    <?php echo $this->element('Common/common_variables') ?>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>

<body>


<style type='text/css'>
    .adsense_fixed{position:fixed;bottom:-8px;width:100%;z-index:999999999999;}
    .adsense_content{width:720px;margin:0 auto;position:relative;background:#fff;}
    .adsense_btn_close,
    .adsense_btn_info{
        font-size:12px;color:#fff;height:20px;width:20px;vertical-align:middle;text-align:center;
        background:#000;top:4px;left:4px;position:absolute;z-index:99999999;font-family:Georgia;cursor:pointer;line-height:18px}
    .adsense_btn_info{left:26px;font-family:Georgia;font-style:italic}
    .adsense_info_content{display:none;width:260px;height:340px;position:absolute;top:-360px;
        background:rgba(255,255,255,.9);font-size:14px;padding:20px;font-family:Arial;border-radius:4px;-webkit-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);
        -moz-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);box-shadow:0 1px 26px -2px rgba(0,0,0,.3)}
    .adsense_info_content:after{
        content:'';position:absolute;left:25px;top:100%;width:0;height:0;border-left:10px solid transparent;border-right:10px solid transparent;
        border-top:10px solid #fff;clear:both}
    .adsense_info_content #adsense_h3{color:#000;margin:0;font-size:18px!important;font-family:'Arial'!important;margin-bottom:20px!important;}
    .adsense_info_content .adsense_p{color:#888;font-size:13px!important;line-height:20px;font-family:'Arial'!important;margin-bottom:20px!important;}
    .adsense_fh5co-team{color:#000;font-style:italic;}
</style>

<script>

    $(function() {
        $('.adsense_btn_close').click(function() {
            $(this).closest('.adsense_fixed').css('display', 'none');
        });

        $('.adsense_btn_info').click(function() {
            if ($('.adsense_info_content').is(':visible')) {
                $('.adsense_info_content').css('display', 'none');
            } else {
                $('.adsense_info_content').css('display', 'block');
            }
        });

    });

</script>

<style>
    @media (max-width: 1600px){
        .center-container {
            background: rgba(0, 0, 0, 0.49);
        }
    }
    .center-container {
        background: rgba(0, 0, 0, 0.49);
    }
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .alert h4 {
        margin-top: 0;
        color: inherit;
    }
    .alert .alert-link {
        font-weight: bold;
    }
    .alert > p,
    .alert > ul {
        margin-bottom: 0;
    }
    .alert > p + p {
        margin-top: 5px;
    }
    .alert-dismissable,
    .alert-dismissible {
        padding-right: 35px;
    }
    .alert-dismissable .close,
    .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit;
    }
    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }
    .alert-success hr {
        border-top-color: #c9e2b3;
    }
    .alert-success .alert-link {
        color: #2b542c;
    }
    .alert-info {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1;
    }
    .alert-info hr {
        border-top-color: #a6e1ec;
    }
    .alert-info .alert-link {
        color: #245269;
    }
    .alert-warning {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc;
    }
    .alert-warning hr {
        border-top-color: #f7e1b5;
    }
    .alert-warning .alert-link {
        color: #66512c;
    }
    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
    .alert-danger hr {
        border-top-color: #e4b9c0;
    }
    .alert-danger .alert-link {
        color: #843534;
    }
</style>
<div class="login-page">

    <div class="center-container content-form" >
        <h1></h1>
        <div class="login-w3l" style="width: 365px !important;">
            <div class="login-form">
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer-agileits">
            <p></p>
        </div>
    </div>
</div>

</body>
</html>