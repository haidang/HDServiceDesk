<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTitlesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
      Schema::create('users_titles',function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('id_department')->nullable();
          $table->foreign('id_department')->references('id')->on('users_departments');
          $table->unisignedInteger('id_sub_department')->nullable();
          $table->foreign('id_sub_department')->references('id')->on('users_sub_departments');
          $table->string('name');
          $table->string('color',50)->default('#000000');
          $table->text('description');
          $table->softDeletes();
          $table->timestamps();
      });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
      Schema::dropIfExists('users_sub_departments');
  }
}
