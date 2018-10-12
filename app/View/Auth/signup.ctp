<?php
$languageUser = isset($language) ? $language : DEFAULT_LANGUAGE;
$reCaptchaLang = $languageUser == '' ? $this->Session->read('Language.Key') : $languageUser;
$reCaptchaLang = $reCaptchaLang == 'vie' ? 'vi' : ($reCaptchaLang == 'jpn' ? 'ja' : 'en');
?>
<article>
    <section>
        <p class="main-title"><?php echo __('会員登録') ?></p>
    </section>

    <section>
        <?php echo $this->Session->flash();?>
        <div class="alert alert-success hidden msg-success" role="alert"></div>
        <div class="alert alert-danger hidden msg-error" role="alert"></div>
        <?php echo $this->Form->create('User', array('type' => 'post',  'url' => array('controller' => 'auth', 'action' => 'signup'))); ?>
        <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label text-right"><?php echo __('ユーザーＩＤ'); ?> <span class="c-red">*</span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="username" name="data[User][username]" value="<?php echo isset($user['username']) ? $user['username'] : ''; ?>" placeholder="<?php echo __('ユーザーＩＤ'); ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="full_name" class="col-sm-3 col-form-label text-right"><?php echo __('お名前'); ?> <span class="c-red">*</span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="full_name" name="data[User][full_name]" value="<?php echo isset($user['full_name']) ? $user['full_name'] : ''; ?>" placeholder="<?php echo __('お名前'); ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-right"><?php echo __('メール'); ?> <span class="c-red">*</span></label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="data[User][email]" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>" placeholder="example@email.com" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label text-right"><?php echo __('パスワード'); ?> <span class="c-red">*</span></label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" name="data[User][password]" placeholder="******" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="confirm_password" class="col-sm-3 col-form-label text-right"><?php echo __('パスワードを認証する'); ?> <span class="c-red">*</span></label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="confirm_password" name="data[User][confirm_password]" placeholder="******" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label text-right"><?php echo __('住所'); ?></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="address" name="data[User][address]" value="<?php echo isset($user['address']) ? $user['address'] : ''; ?>" placeholder="<?php echo __('住所'); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="verify" class="col-sm-3 col-form-label text-right"><?php echo __('検証'); ?> <span class="c-red">*</span></label>
            <div class="col-md-9" id="signup_captcha_login"></div>
        </div>
        <div class="form-group row text-center" style="margin-top: 30px">
            <div class="col-md-offset-2 col-sm-10">
                <button class="btn btn-success btn-submit-sign-up" type="submit" id="signUpRe"><?php echo __('登録') ?></button>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </section>
</article>

<script>
    var CaptchaCallback = function() {
        grecaptcha.render('signup_captcha_login', {'sitekey' : APP.GOOGLE_RECAPTCHA_API_KEY});
    };
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit&hl=<?php echo $reCaptchaLang ?>" async defer></script>