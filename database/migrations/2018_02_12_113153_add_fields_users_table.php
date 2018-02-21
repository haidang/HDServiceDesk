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
    Schema::table('users', function (Blueprint $table) {
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
      $table->unsignedInteger('id_role')->nullable();
      $table->foreign('id_role')->references('id')->on('users_roles');

      $table->string('date_format',30)->default('dd/mm/yyyy');
      $table->string('hour_format',30)->default('h:m A');
      $table->string('hour_start',30)->default('08:00 AM');
      $table->string('hour_end',30)->default('05:00 PM');
      $table->unsignedTinyInteger('day_of_week')->default(1);
      $table->unsignedTinyInteger('call_duration')->default(5);
      $table->unsignedTinyInteger('other_duration')->default(240);

      $table->unsignedInteger('id_user_report_to')->nullable();
      $table->foreign('id_user_report_to')->references('id')->on('users');
      $table->unsignedInteger('id_user_created')->nullable();
      $table->foreign('id_user_created')->references('id')->on('users');
      $table->unsignedInteger('id_user_modified')->nullable();
      $table->foreign('id_user_modified')->references('id')->on('users');

      $table->unsignedTinyInteger('status')->default(0);
      $table->softDeletes();
      $table->rememberToken();
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
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn('email1');
      $table->dropColumn('firstname');
      $table->dropColumn('lastname');
      $table->dropColumn('address');
      $table->dropColumn('photo');
      $table->dropColumn('mobile');
      $table->dropColumn('mobile1');

      $table->dropForeign('users_id_title_foreign');
      $table->dropColumn('id_title');

      $table->dropForeign('users_id_sub_department_foreign');
      $table->dropColumn('id_sub_department');

      $table->dropForeign('users_id_department_foreign');
      $table->dropColumn('id_department');

      $table->dropForeign('users_id_role_foreign');
      $table->dropColumn('id_role');

      $table->dropColumn('is_admin');

      $table->dropColumn('date_format');
      $table->dropColumn('hour_format');
      $table->dropColumn('hour_start');
      $table->dropColumn('hour_end');
      $table->dropColumn('day_of_week');
      $table->dropColumn('call_duration');
      $table->dropColumn('other_duration');

      $table->dropForeign('users_id_user_report_to_foreign');
      $table->dropColumn('id_user_report_to');
      $table->dropForeign('users_id_user_created_foreign');
      $table->dropColumn('id_user_created');
      $table->dropForeign('users_id_user_modified_foreign');
      $table->dropColumn('id_user_modified');

      $table->dropColumn('status');
      $table->dropColumn('deleted_at');
    });
  }
}
