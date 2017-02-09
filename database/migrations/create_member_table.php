<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('members', function($table){
	$table->increments("id");
	$table->string("name");
	$table->string("email");
});