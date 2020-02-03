<?php
require __DIR__.'/../../vendor/autoload.php';

define('REINSYS_SIMPLE_FRONTEND', 'canvas');

(new Reinsys\Simple\App())->run();
