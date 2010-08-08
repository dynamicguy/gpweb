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
        <title><?php $view->slots->output('title', 'Welcome') ?> - GP World</title>
        <?php echo $view->stylesheets ?>
    </head>
    <body>
        <?php echo $view->render('GpBundle:Gp:header') ?>        
        <div class="container_12" id="content-wrapper">
            <div id="content">
                <div class="ui-widget-header pad center">
                    <span class="site_title"><?php $view->slots->output('title', 'Welcome') ?> - GP World</span>
                </div>
                <div id="content-body">
                <?php echo $view->render('GpBundle:Gp:messages') ?>
                <?php $view->slots->output('_content') ?>
                </div>
            </div>
        </div>
        <div class="container_12" id="footer">
            <div id="ipad-bottom">&nbsp;</div>            
            <?php echo $view->render('GpBundle:Gp:footer') ?>
            <?php echo $view->render('GpBundle::javascriptConfig') ?>
            <?php echo $view->javascripts ?>
        </div>
    </body>
</html>
