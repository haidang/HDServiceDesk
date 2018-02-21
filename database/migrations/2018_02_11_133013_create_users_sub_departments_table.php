<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSubDepartmentsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
      Schema::create('users_sub_departments',function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('id_department')->nullable();
          $table->foreign('id_department')->references('id')->on('users_departments');
          $table->string('name');
          $table->string('color',50)->default('#000000');
          $table->text('description');
          $table->unsignedTinyInteger('status')->default(1);
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
