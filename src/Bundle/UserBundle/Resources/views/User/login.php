<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'home') ?>
<?php $view->slots->set('title', 'Home') ?>

<div class="grid_3">
    <p>
        Don't have an account yet? Well, you can
        <a href="/user/register">create one</a> for free!
    </p>
    <p>
        you can <a href="/user/reset_password">reset your password</a> if you forgot it.
    </p>
</div>

<div class="grid_6">

    <form method="post" id="loginForm" action="" name="loginForm" class="stylized">
        <h2>Login and start rolling!</h2>
        <dl>
            <dt><label for="username">Username</label></dt>
            <dd>
                <input type="text" id="username" name="username" value="<?php echo $username ?>" />
            </dd>
            <dt><label for="password">Password</label></dt>            
            <dd>
                <input type="password" id="password" class="text medium" name="password" />
            </dd>
            <dt>&nbsp;</dt>
            <dd><input type="submit" class="btn" name="login" value="Sign in" /></dd>
        </dl>            
    </form>

</div>