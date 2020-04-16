<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmNurseryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(128);
        Schema::create('farm_nursery', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('farmer_id');
            $table->date('date_of_activity')->nullable(); 
            $table->string('month_of_activity')->nullable(); 
            $table->string('year_of_activity')->nullable(); 
            $table->string('size_of_nursery')->nullable(); 
            $table->string('source_of_seedling')->nullable(); 
            $table->double('cost')->nullable(); 
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
        Schema::dropIfExists('farm_nursery');
    }
}
