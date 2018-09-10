<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustCustomersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('cust_customers', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('phone');
      $table->string('address')->nullable();
      $table->unsignedInteger('id_district')->nullable();
      // $table->foreign('id_district')->references('id')->on('pick_districts');
      $table->unsignedInteger('id_city')->nullable();
      // $table->foreign('id_city')->references('id')->on('pick_cities');
      // $table->string('full_name')->nullable();
      // $table->string('tax_code',50)->nullable();
      // $table->string('tax_address')->nullable();
      // $table->string('ship_address')->nullable();
      // $table->unsignedInteger('id_ship_district')->nullable();
      // $table->unsignedInteger('id_ship_city')->nullable();
      $table->text('description')->nullable();
      $table->string('website')->nullable();
      // $table->unsignedInteger('id_owner')->nullable(); // Link to table 'users'
      // $table->foreign('id_owner')->references('id')->on('users');
      $table->unsignedInteger('id_created')->nullable(); // Link to table 'users'
      $table->foreign('id_created')->references('id')->on('users');
      // $table->unsignedInteger('id_supporter')->nullable(); // Link to table 'users'
      // $table->foreign('id_supporter')->references('id')->on('users');
      // $table->unsignedInteger('id_type')->nullable(); // Link to table 'pick_picklists'
      // $table->unsignedInteger('id_status')->nullable(); // Link to table 'pick_picklists'
      // $table->date('begin_date')->nullable();
      // $table->date('end_date')->nullable();
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
    Schema::dropIfExists('cust_customers');
  }
}
