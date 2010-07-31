<?php foreach ($view->user->getAttribute('_flash') as $key => $details): ?>
    <div class="flash_info">
    <?php
    switch ($key):
        case 'notice': printf('<div class="notice"> %s </div>', $details);
            break;
        case 'error': printf('<div class="error"> %s </div>', $details);
            break;
        case 'success': printf('<div class="success"> %s </div>', $details);
            break;
    endswitch
    ?>
</div>
<?php endforeach ?>