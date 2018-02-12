<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMnConfigs extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('mn_configs',function (Blueprint $table){
      $table->increments('id');
      $table->string('key');
      $table->string('name')->nullable();
      $table->string('value')->nullable();
      $table->text('description')->nullable();
      $table->text('field')->nullable();
      $table->tinyInteger('active')->default(1);
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
    Schema::dropIfExists('mn_configs');
  }
}
