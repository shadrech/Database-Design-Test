<?php
require "vendor/autoload.php";

fopen(__DIR__ . "/database/database.sqlite", "w"); //create sqlite file

//create Illuminate\Database\Capsule\Manager instance
require __DIR__ . "/bootstrap/database.php";

//run migrations
require __DIR__ . "/database/migrations/create_school_table.php";
require __DIR__ . "/database/migrations/create_member_table.php";
require __DIR__ . "/database/migrations/create_enrolments_table.php";