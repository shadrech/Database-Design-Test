<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule; //nice wrapper provided to use illuminate/database outside of Laravel
$capsule->addConnection([
	"driver"		=> "sqlite",
	"database"		=> __DIR__ . "/../database/database.sqlite",
	"prefix"		=> ""
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();