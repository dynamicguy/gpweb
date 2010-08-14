<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'locator') ?>
<?php $view->slots->set('title', 'Buy and Sell with GP mobile') ?>

<div class="">
    <?php if($charge) : ?>
    <div class="ui-state-highlight ui-corner-all padded notice">
        <?php if(isset($charge->ChargeResponse->status))echo $charge->ChargeResponse->status;else 'Something went wrong, please try again'; ?>
    </div><br/>
    <?php endif; ?>

    <form method="post" id="donateForm" action="" name="donateForm" class="stylized full">
        <h2>Donate Now</h2>
        <dl>
            <dt><label for="registrationID">AloAshbei username <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['registrationID']->render(); ?>
                <p class="desc">Hint: Grameen Phone Aloashbei username</p>
                <div class="error"><?php echo $form['registrationID']->renderErrors() ?></div>
            </dd>

            <dt><label for="password">AloAshbei password</label></dt>
            <dd>
                <?php echo $form['password']->render(); ?>
                <p class="desc">Hint: Grameen Phone Aloashbei password <span class="required">*</span></p>
                <div class="error"><?php echo $form['password']->renderErrors() ?></div>
            </dd>

            <dt><label for="msisdn">Mobile number <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['msisdn']->render(); ?>
                <p class="desc">Hint: GP number only, Example: 880171124189 </p>
                <div class="error"><?php echo $form['msisdn']->renderErrors() ?></div>
            </dd>

            <dt><label for="amount">Amount <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['amount']->render(); ?>
                <p class="desc">amount in BDT. example: 10 </p>
                <div class="error"><?php echo $form['amount']->renderErrors() ?></div>
            </dd>

            <dt><label for="msgContent">Notes</label></dt>
            <dd>
                <?php echo $form['msgContent']->render(); ?>
                <p class="desc">Your notes (optional)</p>
            </dd>

            <dt>&nbsp;</dt>
            <dd><input type="submit" class="button" name="donate" value="Donate Now!" /></dd>
        </dl>
    </form>
</div>
