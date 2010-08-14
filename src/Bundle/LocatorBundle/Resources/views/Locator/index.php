<?php $view->extend('GpBundle::layout') ?>
<?php $view->slots->set('active_menu', 'locator') ?>
<?php $view->slots->set('title', 'Where is my Mobile?') ?>

<div class="">
    <form method="post" id="locatorForm" action="" name="locatorForm" class="stylized full">
        <h2>Where is my Mobile now?</h2>
        <dl>
            <dt><label for="msisdn">Mobile number <span class="required">*</span></label></dt>
            <dd>
                <?php echo $form['msisdn']->render(); ?>
                <p class="desc">Hint: GP number only, Example: 880171124189 </p>
                <div class="error"><?php echo $form['msisdn']->renderErrors() ?></div>
            </dd>
            <dt>&nbsp;</dt>
            <dd><input type="submit" class="button" name="login" value="Find It Now!" /></dd>
        </dl>
    </form>
</div>
<?php if ($location): ?>
    <?php if ($location->LBSResponse->Status == "success"): ?>
        <?php $data = json_decode(file_get_contents("http://maps.google.com/maps/api/geocode/json?latlng=".$location->LBSResponse->Latitude.",".$location->LBSResponse->Longitude."&sensor=true")); ?>
<div class="ui-state-success">
    <h2>Here is your mobile phone's location!</h2>
    <p><?php echo $data->results['0']->formatted_address ?> checked on <?php echo date('M jS, Y h:i:s a', strtotime($location->LBSResponse->Timestamp)); ?></p>
</div>
<br/>
<div style="border: 10px solid #555555"><div id="map-canvas" style="width: 720px; height: 420px;"></div></div>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            function initialize() {
                var mapDiv = document.getElementById('map-canvas');
                var map = new google.maps.Map(mapDiv, {
                    center: new google.maps.LatLng(<?php echo $location->LBSResponse->Latitude ?>, <?php echo $location->LBSResponse->Longitude ?>),
                    zoom: 13,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    map: map
                });

                var infoWindow = new google.maps.InfoWindow({
                    position: map.getCenter(),
                    maxWidth: "250",
                    content: "Your mobile is at: <?php echo $data->results['0']->formatted_address ?> on <?php echo date('M jS, Y h:i:s a', strtotime($location->LBSResponse->Timestamp)); ?>"
                });


                google.maps.event.addListener(marker, 'click', function() {
                    infoWindow.open(map);
                });

                infoWindow.open(map);

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <h1><?php echo date('M jS, Y h:i:s a', strtotime($location->LBSResponse->Timestamp)); ?></h1>
        <?php else: ?>
        <br/>
        <div class="ui-state-error padded ui-corner-all">
            Sorry, We could not process your query this time. Please try again.
            Here is the possible cause that Grameen Phone says! <strong><?php echo $location->LBSResponse->Status ?></strong>
        </div>
<?php endif; ?>
<?php endif; ?>