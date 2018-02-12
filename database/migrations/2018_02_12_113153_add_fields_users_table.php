<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::talble('users', function (Blueprint $table) {
      $table->string('email1')->nullable();
      $table->string('firstname');
      $table->string('lastname')->nullable();
      $table->string('address')->nullable();
      $table->string('photo')->nullable();
      $table->string('mobile',20)->nullable();
      $table->string('mobile1',20)->nullable();

      $table->unsignedInteger('id_title')->nullable();
      $table->foreign('id_title')->references('id')->on('users_titles');

      $table->unsignedInteger('id_sub_department')->nullable();
      $table->foreign('id_sub_department')->references('id')->on('users_sub_departments');

      $table->unsignedInteger('id_department')->nullable();
      $table->foreign('id_department')->references('id')->on('users_departments');

      $table->boolean('is_admin')->default(0);
      $table->unsignedSmallInteger('id_role')->nullable();
      $table->foreign('id_role')->references('id')->on('users_roles');

      $table->string('date_format',30)->default('dd/mm/yyyy');
      $table->string('hour_format',30)->default('h:m A');
      $table->string('hour_start',30)->default('08:00 AM');
      $table->string('hour_end',30)->default('05:00 PM');
      $table->unsignedTinyInteger('day_of_week')->default(1);
      $table->unsignedTinyInteger('call_duration')->default(5);
      $table->unsignedTinyInteger('other_duration')->default(240);
      $table->unisignedInteger('id_user_report_to')->default(1);
      $table->unisignedInteger('id_user_created')->default(1);
      $table->unisignedInteger('id_user_modified')->default(1);
      $table->unsignedTinyInteger('status')->default(0);
      $table->softDeletes();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    //
  }
}
