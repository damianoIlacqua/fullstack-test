<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('missions', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title')->nullable();
      $table->text('description')->nullable();
      $table->integer('user_id')->unsigned();

      //TODO
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('missions');
  }
}
