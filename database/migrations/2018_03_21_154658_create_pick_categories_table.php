<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePickCategoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pick_categories', function (Blueprint $table) {
      $table->smallIncrements('id');
      $table->string('name');
      $table->string('label');
      $table->string('description')->nullable();
      $table->unsignedSmallInteger('parent')->nullable()->default(0);
      $table->boolean('status')->default(1);
      $table->unsignedSmallInteger('sort')->nullable();
      $table->timestamps();
    });
    Schema::table('pick_picklists', function (Blueprint $table) {
      $table->foreign('id_category')->references('id')->on('pick_categories');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('cust_customers');
    Schema::dropIfExists('pick_picklists');
    Schema::dropIfExists('pick_categories');
  }
}
