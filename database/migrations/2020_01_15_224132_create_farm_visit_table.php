<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmVisitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farm_visit', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('farmer_id'); 
            $table->unsignedInteger('user_id');
            $table->dateTime('date_time_visit')->nullable();
            $table->date('date_visit')->nullable();
            $table->string('comments')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('status')->default('0');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('farmer_id')->references('id')->on('farmers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farm_visit');
    }
}
