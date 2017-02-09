<?php

require "../vendor/autoload.php";

//initiate Slim framework and other bootstrap stuff
require __DIR__ . "/../bootstrap/app.php";

//app routes
require __DIR__ . "/../app/routes.php";

$app->run();