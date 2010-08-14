<?php foreach ($view->user->getAttribute('_flash') as $key => $details): ?>
    <div class="flash_info">
    <?php
    switch ($key):
        case 'notice': printf('<div class="notice ui-state-highlight padded ui-corner-all"> %s </div><br />', $details);
            break;
        case 'error': printf('<div class="error ui-state-error padded ui-corner-all"> %s </div><br />', $details);
            break;
        case 'success': printf('<div class="success ui-state-success padded ui-corner-all"> %s </div><br />', $details);
            break;
    endswitch
    ?>
</div>
<?php endforeach ?>