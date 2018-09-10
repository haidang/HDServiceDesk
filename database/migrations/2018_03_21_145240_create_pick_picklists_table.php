<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePickPicklistsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pick_picklists', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedSmallInteger('id_category'); // Link to table 'pick_categories'
      $table->string('name');
      $table->string('label');
      $table->string('color',10)->nullable();
      $table->string('description')->nullable();
      $table->boolean('status')->nullable()->default(1);
      $table->unsignedSmallInteger('sort')->nullable();
      $table->timestamps();
    });
    Schema::create('pick_cities', function(Blueprint $table){
      $table->increments('id');
      $table->string('name',150)->comment('Tên Tỉnh/Thành');
      $table->string('type',30)->comment('Loại Quận/Huyện');
      $table->unsignedSmallInteger('area')->default(1)->comment('Vùng miền 3-Bắc 2-Trung 1-Nam');
      $table->boolean('status')->default(1)->comment('Ẩn/Hiện');
      $table->unsignedSmallInteger('sort')->nullable()->comment('Thứ tự');
      $table->timestamps();
    });
    Schema::create('pick_districts', function(Blueprint $table){
      $table->increments('id');
      $table->string('name',150)->comment('Tên Quận/Huyện');
      $table->string('type',30)->comment('Loại Quận/Huyện');
      $table->string('location',30)->nullable()->comment('Tọa độ');
      $table->unsignedInteger('id_city')->comment('Mã Tỉnh/Thành');
      $table->foreign('id_city')->references('id')->on('pick_cities')->onDelete('cascade');; // Liên kết với City
      $table->boolean('urban')->default(0)->comment('Nội thành');
      $table->boolean('show')->default(1)->comment('Ẩn/Hiện');
      $table->unsignedSmallInteger('sort')->nullable()->comment('Thứ tự');
      $table->timestamps();
    });
    Schema::table('cust_customers', function (Blueprint $table) {
      // $table->foreign('id_type')->references('id')->on('pick_picklists');
      // $table->foreign('id_status')->references('id')->on('pick_picklists');
      $table->foreign('id_city')->references('id')->on('pick_cities');
      $table->foreign('id_district')->references('id')->on('pick_districts');
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
    Schema::dropIfExists('pick_districts');
    Schema::dropIfExists('pick_cities');
  }
}
