<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrepareLandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(128);
        Schema::create('prepare_land', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('farmer_id')->nullable();
            $table->date('date_of_activity')->nullable(); 
            $table->string('month_of_activity')->nullable(); 
            $table->string('year_of_activity')->nullable(); 
            $table->double('cost')->nullable(); 
            $table->string('mechanized_vendor')->nullable(); 
            $table->string('notes')->nullable(); 
            $table->string('receipt_url')->nullable();
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
        Schema::dropIfExists('prepare_land');
    }
}
