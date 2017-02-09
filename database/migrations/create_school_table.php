<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create("schools", function($table){
	$table->increments("id");
	$table->string("name")->unique();
});