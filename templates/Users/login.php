<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<h3>Login</h3>
<?= $this->Form->create() ?>
<fieldset>
<legend><?= __('Please enter your username and password') ?></legend>
<?= $this->Form->control('email', ['required' => true]) ?>
<?= $this->Form->control('password', ['required' => true]) ?>
</fieldset>
<?= $this->Form->submit(__('login')); ?>
<?= $this->Form->end() ?>
<?= $this->Html->link('Register', ['action' => 'register']) ?>
</div>
<!-- <div class="login-container" data-view="login/index" data-view-attached="true">
  <div class="container mvxxl">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="components-login" data-view="components/login_or_join" data-context="" data-sign_up="false" data-view-attached="true">
          <div class="form" data-view="components/login_or_join/login" data-show_saved_payment_info_text="" data-hide_signup_link="" data-allow_guest_login="" data-prefilled_email="" data-view-attached="true">
            <div class="form" data-view="components/login_or_join/login_header" data-show_saved_payment_info_text="" data-hide_signup_link="" data-context="" data-view-attached="true">
              <div class="txt-c mbl">
                <h3 class="mtn">Entra</h3>
                <p>¿No tienes una cuenta?&nbsp;<a class="js-sign-up">Regístrate</a></p>
              </div>
            </div><button class="btn btn-big btn-full google-login js-google-login mbxs">
              <div class="logo-tile"><img src="https://s3.amazonaws.com/change-assets/iconography/Icon_google.png"></div><span>Entra con Google</span>
            </button><button class="btn btn-big btn-fb btn-full facebook-btn js-facebook-login"><span class="symbol symbol-facebook mrs" aria-hidden="true"></span>Entra con Facebook</button>
            <div class="text-bar text-bar-center">
              <h5 class="mvn text">ó</h5>
            </div>
            <form method="post" class="login">
              <div class="grouped-form">
                <div class="control-group" data-view="components/input" data-value="" data-autofocus="true" data-placeholder="Email" data-autocapitalize="off" data-autocorrect="off" data-name="email" data-type="email" data-view-attached="true">
                  <div class="control"><span class="input bg-brighter"><input autofocus="true" placeholder="Email" autocapitalize="off" autocorrect="off" name="email" type="email"></span></div>
                </div>
                <div class="control-group" data-view="components/input" data-placeholder="Contraseña" data-name="password" data-type="password" data-view-attached="true">
                  <div class="control"><span class="input bg-brighter"><input placeholder="Contraseña" name="password" type="password"></span></div>
                </div>
              </div>
              <div class="mtxs type-s txt-r"><a class="js-forgot-password">Me olvidé la contraseña</a></div>
              <div class="control-group mtm mbn">
                <div class="control"><input value="Entra" type="submit" class="btn btn-full btn-action btn-big js-login-button"></div>
              </div>
            </form>
            <p class="mts type-s">Al registrarte o entrar vía Facebook, aceptas <a href="/policies/terms-of-service" class="link-subtle" target="_blank" rel="noopener noreferrer" data-pass-thru="true">las normas de uso</a> y la <a href="/policies/privacy" class="link-subtle" target="_blank" rel="noopener noreferrer" data-pass-thru="true">política de privacidad</a> de Change.org y aceptas recibir mensajes email de vez en cuando sobre campañas en Change.org.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->