<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'home') ?>
<?php $view->slots->set('title', 'Home') ?>

<div id="register">

    <form method="post" id="loginForm" action="" name="loginForm">

        <fieldset>
            <legend>Register</legend>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo $username ?>" />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" />

            <input type="submit" class="button primary" name="login" value="Sign in" />
        </fieldset>

    </form>

</div>