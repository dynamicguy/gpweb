<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'home') ?>
<?php $view->slots->set('title', 'Home') ?>

<div id="login">
    
    <h1>Hello, <?php echo $identity->getFullName() ?></h1>
    this is home dashboard
    <a href="/index_dev.php/user/logout">Logout</a>

</div>