<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePessoas extends Migration
{
    public function up() {
	Schema::create('pessoasteste', function (Blueprint $table) {
	$table->increments('id');
	$table->string('nome');
	
	});
	}
	/**
	* Reverse the migrations.
	* @return void
	*/
	public function down() {
	Schema::drop('tarefa');
	}
}
