<?php $view->assets->setVersion(1.0) ?>
<?php $view->stylesheets->add('/bundles/gp/css/reset-min.css') ?>
<?php $view->stylesheets->add('/bundles/gp/css/form.css') ?>
<?php $view->stylesheets->add('/bundles/gp/css/main.css') ?>
<?php $view->stylesheets->add('/bundles/gp/vendor/960/960.css') ?>
<?php $view->stylesheets->add('/bundles/gp/vendor/jquery-ui/css/smoothness/jquery-ui-1.8.2.custom.css') ?>

<?php $view->javascripts->add('/bundles/gp/vendor/jquery/jquery.min.js') ?>
<?php $view->javascripts->add('/bundles/gp/vendor/jquery-ui/js/jquery-ui-1.8.2.custom.min.js') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" type="image/png" href="favicon.png" />
        <title><?php $view->slots->output('title', 'Welcome') ?> - GP Web</title>
        <?php echo $view->stylesheets ?>
    </head>
    <body>
        <?php echo $view->render('GpBundle:Gp:header') ?>        
        <div class="container_12" id="content-wrapper">
            <div id="content">
                <div class="ui-widget-header pad center">
                    <span class="site_title"><?php $view->slots->output('title', 'Welcome') ?> - GP Web</span>
                </div>
                <div id="content-body">
                    <?php echo $view->render('GpBundle:Gp:messages') ?>
                    <?php $view->slots->output('_content') ?>
                </div>
                <div id="foot">
                    <ul id="foot-icons">
                        <li><a href="<?php echo $view->router->generate('homepage'); ?>" class="small btn"><img alt="send SMS" width="32" src="/bundles/gp/images/home.png" style="display: block;"/>Home</a></li>
                        <li><a href="<?php echo $view->router->generate('smshome'); ?>" class="small btn"><img alt="send SMS" width="32" src="/bundles/sms/images/sms32.png" style="display: block;"/>SMS</a></li>
                        <li><a href="<?php echo $view->router->generate('mmshome'); ?>" class="small btn"><img alt="send MMS" width="32" src="/bundles/mms/images/mms32.png" style="display: block;"/>MMS</a></li>
                        <li><a href="<?php echo $view->router->generate('find'); ?>" class="small btn"><img alt="find your mobile" width="32" src="/bundles/locator/images/locator32.png" style="display: block;"/>Find</a></li>
                        <li><a href="<?php echo $view->router->generate('donate'); ?>" class="small btn"><img alt="buy and sell" width="32" src="/bundles/charge/images/charge32.png" style="display: block;"/>Trade</a></li>
                        <?php if($view->user->getAttribute('identity')): ?>
                        <li><a href="<?php echo $view->router->generate('logout'); ?>" class="small btn"><img alt="Logout" width="32" src="/bundles/user/images/logout.png" style="display: block;"/>Logout</a></li>
                        <?php else: ?>
                        <li><a href="<?php echo $view->router->generate('login'); ?>" class="small btn"><img alt="Logout" width="32" src="/bundles/user/images/login.png" style="display: block;"/>Login</a></li>
                        <?php endif;  ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container_12" id="footer">
            <div id="ipad-bottom">&nbsp;</div>            
            <?php echo $view->render('GpBundle:Gp:footer') ?>
            <?php echo $view->javascripts ?>
            <?php echo $view->render('GpBundle::javascriptConfig') ?>
        </div>
    </body>
</html>
