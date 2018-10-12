<?php
$this->layout = "my_login";
echo $this->Html->css('login.css?t=20180110');

$languageUser = isset($language) ? $language : DEFAULT_LANGUAGE;
$reCaptchaLang = $languageUser == '' ? $this->Session->read('Language.Key') : $languageUser;
$reCaptchaLang = $reCaptchaLang == 'vie' ? 'vi' : ($reCaptchaLang == 'jpn' ? 'ja' : 'en');
?>
<style>
    <?php if(isset($linkImg) && $linkImg != ''){ ?>
    .background{
        background-image: url('<?php echo $this->webroot."img/login/".$linkImg ?>') !important;
    }
    <?php  } ?>

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0 30px lightgrey inset !important;
    }

    @media (min-width: 860px) {
        .login-form input[type="password"], .login-form input[type="text"] {
            width: 79.5% !important;
        }
    }

    @media (min-width: 654px) {
        .login-form input[type="password"], .login-form input[type="text"] {
            width: 81.5% !important;
        }
    }

    @media (max-width: 653px) {
        .login-form input[type="password"], .login-form input[type="text"] {
            width: 82.5% !important;
        }
    }

    .login-form input[type="password"], .login-form input[type="text"], #email {
        width: 79.5%;
        padding: 10px 12px 10px 49px;
        border: none;
        text-align: center;
        outline: none;
        color: #fff;
        font-size: 13px;
        letter-spacing: 1px;
        margin-bottom: 15px;
        background: rgba(255, 255, 255, 0.15);
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
        -moz-transition: 0.5s all;
        font-family: 'Montserrat', sans-serif;
    }

    .text-center{
        text-align: center !important;
    }

    @media (max-width: 500px) {
        .inputs-w3ls {
            margin-left: 5px;
        }

        #captcha_login_ctp{
            margin-left: 5px;
        }
    }
</style>


<h2 class="sub-head-w3-agileits text-center">
    <div class="text-center">
        <a href="<?php echo $this->Html->url(['controller' => 'test', 'action' => 'index']) ?>">
            <img class="logo" style="width: 80px" alt="Toyo Investment" title="Toyo Investment" src="<?php echo $this->webroot.'img/Logo4.png'; ?>">
        </a>
        <hr>
    </div>
</h2>

<?php echo $this->Session->flash();?>
<?php echo $this->Form->create('User', array('url' => array('controller' => 'auth', 'action' => 'login'))); ?>
    <div class="inputs-w3ls" style="width: 296px !important;">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input name="data[User][email]" id="email" maxlength="100" class="form-control" type="text" required="required" placeholder="<?php echo __('Email') ?>">

    </div>
    <div class="inputs-w3ls" style="width: 296px !important;">
        <i class="fa fa-key" aria-hidden="true"></i>
        <input name="data[User][password]" id="password" maxlength="100" type="password" required="required" placeholder="<?php echo __('Password') ?>">

    </div>
    <div id="captcha_login_ctp" style="margin-top: 17px !important;"></div>
    <input type="submit" style="width: 303px !important;" value="<?php echo __('Đăng nhập') ?>" >
<?php echo $this->Form->end(null); ?>

<script>

    var CaptchaCallback = function() {
        grecaptcha.render('captcha_login_ctp', {'sitekey' : APP.GOOGLE_RECAPTCHA_API_KEY});
    };

    $(function() {

        $('.close').remove();
        var wHei = $(window).height();
        var pad = (wHei - $('.content-form').height() - 120)/2;

        $('.content-form').css('padding-top', pad+'px');
        $('.content-form').css('padding-bottom', (pad + 42)+'px');

        $('#btn-alert-dismissible').remove();
        var height = $('.form-box').height() + $('.logo').height();
        $('.login-panel').css('min-height', (height+100)+'px');

        $(document).on('click', '.close', function(){
            var height = $('.form-box').height() + $('.logo').height();
            $('.login-panel').css('min-height', (height+100)+'px');
        });

    });

</script>

<!--<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit&hl=--><?php //echo $reCaptchaLang ?><!--" async defer></script>-->
