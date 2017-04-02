<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cars', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->integer('service_id')->unsigned()->index()->default(1);
        $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        $table->integer('user_id')->unsigned()->index();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->date('production_date');
        $table->date('insurance_date');
        $table->date('card_date');
        $table->date('service_date');
        $table->integer('distance');
        $table->string('engine');
        $table->string('reg_nr');        
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
        Schema::dropIfExists('cars');
    }
}
