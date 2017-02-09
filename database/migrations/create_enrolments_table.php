<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('enrolments', function($table){
	$table->integer('member_id')->unsigned();
	$table->integer('school_id')->unsigned();

	$table->foreign('member_id')
		->references('id')
		->on('members')
		->onDelete('cascade');

	$table->foreign("school_id")
		->references("id")
		->on('schools')
		->onDelete('cascade');
});