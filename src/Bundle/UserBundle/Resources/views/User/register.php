<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'home') ?>
<?php $view->slots->set('title', 'Home') ?>


<div id="register" class="grid_6">

    <form method="post" id="registerForm" action="" name="registerForm" class="stylized">
        <h2>Register in GP Web</h2>
        <dl>
            <dt><label for="login">Username <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['login']->render() ?>
                <p class="desc">example: freeman99 </p>
                <div class="error"><?php echo $form['login']->renderErrors() ?></div>
            </dd>
            <dt><label for="password">Password <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['password']->render() ?>
                <p class="desc">Minimum 4 characters</p>
                <div class="error"><?php echo $form['password']->renderErrors() ?></div>
            </dd>

            <dt><label for="emailAddress">Email Address <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['emailAddress']->render() ?>
                <div class="error"><?php echo $form['emailAddress']->renderErrors() ?></div>
            </dd>

            <dt><label for="firstName">First Name</label></dt>
            <dd>
                <?php echo $form['firstName']->render() ?>
                <div class="error"><?php echo $form['firstName']->renderErrors() ?></div>
            </dd>

            <dt><label for="lastName">Last Name</label></dt>
            <dd>
                <?php echo $form['lastName']->render() ?>
                <div class="error"><?php echo $form['lastName']->renderErrors() ?></div>
            </dd>

            <dt><label for="gender">Gender</label></dt>
            <dd>
                <?php echo $form['gender']->render() ?>
                <div class="error"><?php echo $form['gender']->renderErrors() ?></div>
            </dd>


            <dt>&nbsp;</dt>
            <dd><input type="submit" class="button" name="register" value="Submit" /></dd>
        </dl>
    </form>
</div>

<div class="grid_3">
    <strong>Why register?</strong>
    <p>
        by registering with GPWeb you could avail all the cool features from
        Grameen Phone AloAshbei API.
    </p>
    <a href="<?php echo $view->router->generate('login'); ?>">Login</a>
</div>