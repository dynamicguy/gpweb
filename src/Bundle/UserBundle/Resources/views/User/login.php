<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'home') ?>
<?php $view->slots->set('title', 'Home') ?>

<div class="grid_3">
    <p>
        Don't have an account yet? Well, you can
        <a href="<?php echo $view->router->generate('register'); ?>">create one</a> for free!
        You can <a href="<?php echo $view->router->generate('register'); ?>">reset your password</a> if you forgot it.
    </p>
</div>

<div class="grid_6">

    <?php if($isLoginError): ?>
    <div class="error ui-state-error padded ui-corner-all">
        Login failed. Invalid username or password combination. Please try again.
    </div>
    <br/>
    <?php endif; ?>

    <form method="post" id="loginForm" action="" name="loginForm" class="stylized">
        <h2>Login at GPWeb</h2>
        <dl>
            <dt><label for="login">Username <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['login']->render(); ?>
                <div class="error"><?php echo $form['login']->renderErrors() ?></div>
            </dd>
            <dt><label for="password">Password <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['password']->render(); ?>
                <div class="error"><?php echo $form['password']->renderErrors() ?></div>
            </dd>
            <dt>&nbsp;</dt>
            <dd><input type="submit" class="button" name="login" value="Sign in" /></dd>
        </dl>            
    </form>

</div>