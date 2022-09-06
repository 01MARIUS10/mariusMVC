<?php

require_once "../vendor/autoload.php";
$app = new \App\Core\App\App();
new \App\Core\Dispatcher\Dispatcher($app->router);

?>