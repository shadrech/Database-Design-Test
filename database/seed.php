<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::table('schools')->insert([
	['name'=>"University Of Cambridge"],
	['name'=>"Toronto University"]
]);