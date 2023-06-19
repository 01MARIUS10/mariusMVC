<?php

require_once "../vendor/autoload.php";
require_once "../src/_configuration/config.php";
$app = new \App\Core\App\App();
new \App\Core\Dispatcher\Dispatcher($app->router);

?>