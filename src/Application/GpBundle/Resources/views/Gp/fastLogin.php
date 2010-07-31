<?php $view->extend('MiamBundle::layout') ?>
<div class="fast_login">
    <?php foreach($users as $user): ?>
    <a class="fast_login_user" href="<?php echo $view->router->generate('fast_login', array('username' => $user->getUsername())) ?>">
        <img src="<?php echo Bundle\GravatarBundle\Api::getUrl($emails[$user->getUsername()], array('size' => 120)) ?>" width="120" height="120" alt="<?php echo $user->getUsername() ?>" />
    </a>
    <?php endforeach; ?>
</div>
