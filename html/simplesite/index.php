<?php
require __DIR__.'/../../vendor/autoload.php';

define('REINSYS_SIMPLE_FRONTEND', 'simplesite');

(new Reinsys\Simple\App())->run();
