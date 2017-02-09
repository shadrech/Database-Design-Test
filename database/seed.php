<?php

use Illuminate\Database\Capsule\Manager as Capsule;

//initial database seeding
Capsule::table('schools')->insert([
	['name' => "University Of Cambridge"],
	['name' => "Oxford University"]
]);