<?php

use Slim\App;

$app = new App(array_merge( //merge all arrays in config folder if required in container
	require __DIR__ . "/../config/views.php"
));

require __DIR__ . "/container.php";
require __DIR__ . "/database.php";