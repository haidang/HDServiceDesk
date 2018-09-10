<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustContactsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('cust_contacts', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('id_customer');
      $table->foreign('id_customer')->references('id')->on('cust_customers');
      $table->unsignedInteger('id_salutation')->nullable();
      $table->foreign('id_salutation')->references('id')->on('pick_picklists');
      $table->string('first_name');
      $table->string('last_name')->nullable();
      $table->string('address')->nullable();
      $table->unsignedInteger('id_district')->nullable();
      $table->foreign('id_district')->references('id')->on('pick_districts');
      $table->unsignedInteger('id_city')->nullable();
      $table->foreign('id_city')->references('id')->on('pick_cities');
      $table->string('tax_full_name')->nullable();
      $table->string('tax_code')->nullable();
      $table->string('tax_full_address')->nullable();
      $table->string('ship_address')->nullable();
      $table->unsignedInteger('ship_id_district')->nullable();
      $table->foreign('ship_id_district')->references('id')->on('pick_districts');
      $table->unsignedInteger('ship_id_city')->nullable();
      $table->foreign('ship_id_city')->references('id')->on('pick_cities');
      $table->string('email')->nullable();
      $table->string('mobile')->nullable();
      $table->string('phone')->nullable();
      $table->unsignedInteger('id_title')->nullable();
      $table->foreign('id_title')->references('id')->on('pick_picklists');
      $table->unsignedInteger('id_department')->nullable();
      $table->foreign('id_department')->references('id')->on('pick_picklists');
      $table->unsignedInteger('id_owner')->nullable();
      $table->foreign('id_owner')->references('id')->on('users');
      $table->unsignedInteger('id_created');
      $table->foreign('id_created')->references('id')->on('users');
      $table->unsignedInteger('id_supporter');
      $table->foreign('id_supporter')->references('id')->on('users');
      $table->date('begin_support')->nullable();
      $table->date('end_support')->nullable();
      $table->string('teamviewer')->nullable();
      $table->string('ultraviewer')->nullable();
      $table->unsignedInteger('id_status')->nullable();
      $table->unsignedInteger('id_rate')->nullable();
      $table->unsignedInteger('id_type')->nullable();
      $table->unsignedInteger('id_industry')->nullable();
      $table->text('description')->nullable();
      $table->boolean('status')->default(1);

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
    Schema::dropIfExists('cust_contacts');
  }
}
