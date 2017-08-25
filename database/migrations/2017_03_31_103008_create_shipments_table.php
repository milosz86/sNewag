<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('part_id')->unsigned()->index();
          $table->foreign('part_id')->references('id')->on('parts')->onDelete('cascade');
          $table->integer('user_id')->unsigned()->index();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->integer('service_id')->unsigned()->index();
          $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
          $table->date('date');
          $table->string('status');
          $table->string('serial')->nullable();
          $table->integer('quantity');
          $table->string('info')->nullable();
          $table->integer('edited_by')->unsigned()->index()->nullable();
          $table->foreign('edited_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('shipments');
    }
}
