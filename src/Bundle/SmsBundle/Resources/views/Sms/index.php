<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'sms') ?>
<?php $view->slots->set('title', 'SMS') ?>

<div class="">
    <form method="post" id="smsForm" action="" name="smsForm" class="stylized full">
        <h2>Send SMS for FREE!</h2>
        <dl>
            <dt><label for="destinationMsisdn">Receiver's Mobile number</label></dt>
            <dd>
                <input type="text" id="destinationMsisdn" name="destinationMsisdn" value="" />
            </dd>
            <dt><label for="msgContent">Message</label></dt>
            <dd>
                <textarea name="msgContent" rows="3" cols="30" id="msgContent" ></textarea>
            </dd>
            <dt>&nbsp;</dt>
            <dd><input type="submit" class="button" name="login" value="Send Now!" /></dd>
        </dl>
    </form>
</div>