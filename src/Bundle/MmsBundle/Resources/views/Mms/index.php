<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'sms') ?>
<?php $view->slots->set('title', 'Send SMS to any Grameen Phone mobile from web') ?>

<div class="">
<?php if($status): ?>
    <?php if ($status->SendMMSResponse->status == "success"): ?>
    <?php else: ?>
        <div class="ui-state-error padded error ui-corner-all">
            Sorry, We could not process your query this time. Please try again.
            Here is the possible cause that Grameen Phone says! <pre><?php echo $status->SendMMSResponse->status; ?></pre>
        </div>
    <?php endif; ?>
<?php endif; ?>

    <form method="post" id="mmsForm" action="" name="mmsForm" class="stylized full" enctype="multipart/form-data">
        <h2>Send MMS now!</h2>
        <dl>
            <dt><label for="destinationMsisdn">Receiver's Mobile number <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['destinationMsisdn']->render() ?>
                <p class="desc">Hint: GP number only, Example: 880171124189 </p>
                <div class="error"><?php echo $form['destinationMsisdn']->renderErrors() ?></div>
            </dd>
            <dt><label for="msgSubject">Subject <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['msgSubject']->render() ?>
                <p class="desc">Hint: GP number only, Example: 880171124189 </p>
                <div class="error"><?php echo $form['msgSubject']->renderErrors() ?></div>
            </dd>
            <dt><label for="msgContent">Message <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['msgBody']->render() ?>
                <p class="desc">Maximum 140 character allowed</p>
                <div class="error"><?php echo $form['msgBody']->renderErrors() ?></div>
            </dd>
            <dt><label for="msgContent">Message file <span class="required">*</span></label></dt>
            <dd>
                <?php //echo $form['msgContent']->render() ?>
                <input type="file" name="msgContent"/>
                <input name="folder" type="hidden" value="<?php echo $view->assets->getUrl("uploads")?>" /> 
                <p class="desc">Allowed extensions: .jpg, .png, .gif</p>
                <div class="error"><?php echo $form['msgContent']->renderErrors() ?></div>
            </dd>
            <dt>&nbsp;</dt>
            <dd><input type="submit" class="button" name="login" value="Send Now!" /></dd>
        </dl>
    </form>
</div>