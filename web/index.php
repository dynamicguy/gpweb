<?php

require_once __DIR__.'/../gp/GpKernel.php';

$kernel = new GpKernel('prod', false);
$kernel->handle()->send();
