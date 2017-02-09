<?php

use App\Controllers\MemberController;
use App\Controllers\SchoolController;

$app->get("/", SchoolController::class.':index')->setName('school_page');
$app->get("/schools/create", SchoolController::class.':create')->setName('school_create_page');
$app->post("/schools/create", SchoolController::class.':post')->setName('school_create_post_page');

$app->get("/members", MemberController::class.':index')->setName('member_page');
$app->delete("/members", MemberController::class.':delete');
$app->get("/members/create", MemberController::class.':create')->setName('member_create_page');
$app->post("/members/create", MemberController::class.':post')->setName('school_create_post_page');