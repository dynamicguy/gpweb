<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'home') ?>
<?php $view->slots->set('title', 'Home') ?>

<?php if($identity): ?>
    <h1>Welcome, <?php echo $identity->getFullName(); ?> What would you like to do?</h1>
<?php else: ?>
    <h1>Send SMS, MMS, Locate mobiles and Trade with your GP Mobile!</h1>
<?php endif; ?>


<div id="home">
    <ul id="home-icons">
        <li><a href="<?php echo $view->router->generate('smshome'); ?>" class="large super btn"><img alt="send SMS" width="128" src="/bundles/sms/images/sms.png" style="display: block;"/>Send SMS</a></li>
        <li><a href="<?php echo $view->router->generate('mmshome'); ?>" class="large super btn"><img alt="send MMS" width="128" src="/bundles/mms/images/mms.png" style="display: block;"/>Send MMS</a></li>
        <li><a href="<?php echo $view->router->generate('find'); ?>" class="large super btn"><img alt="find your mobile" width="128" src="/bundles/locator/images/locator.png" style="display: block;"/>Find your Mobile!</a></li>
        <li style="margin-right:0;"><a href="" class="large super btn"><img alt="buy and sell" width="128" src="/bundles/charge/images/charge.png" style="display: block;"/>Trade!</a></li>
    </ul>
</div>
<p>
    <strong>Welcome to GP Web :) </strong> You are here at a promising framework
    based on the GP <a href="https://www.aloashbei.com.bd">AloAshbei</a> platform   
</p>

<p>
    To use this application you <em>DON'T</em> need a registration! But if you want your records
    to be saved we insist you to <a href="<?php echo $view->router->generate('register'); ?>">register</a> :)
    If you like this application, please don't forget to share it with others.
</p>
