<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'sms') ?>
<?php $view->slots->set('title', 'Send SMS to any Grameen Phone mobile from web') ?>

<div class="">    
    <form method="post" id="smsForm" action="" name="smsForm" class="stylized full" autocomplete="off" >
        <h2>Send SMS to any Grameen Phone mobile</h2>
        <dl>
            <dt><label for="destinationMsisdn">Receiver's Mobile number <span class="required">*</span></label></dt>
            <dd>                
                <?php echo $form['destinationMsisdn']->render() ?>
                <p class="desc">Hint: GP number only, Example: 880171124189 </p>
                <div class="error"><?php echo $form['destinationMsisdn']->renderErrors() ?></div>
            </dd>
            <dt><label for="msgContent">Message <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['msgContent']->render() ?>
                <p class="desc">Maximum 140 character allowed</p>
                <div class="error"><?php echo $form['msgContent']->renderErrors() ?></div>
            </dd>
            <dt>&nbsp;</dt>
            <dd><input type="submit" class="button" name="login" value="Send Now!" /></dd>
        </dl>
    </form>
</div>