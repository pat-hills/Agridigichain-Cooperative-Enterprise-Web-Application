<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmHarvestingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::defaultStringLength(128);
        Schema::create('farm_harvesting', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('farmer_id');
            $table->date('date_of_activity')->nullable(); 
            $table->string('month_of_activity')->nullable(); 
            $table->string('year_of_activity')->nullable(); 
            $table->string('labour_cost')->nullable(); 
            $table->string('package_type')->nullable(); 
            $table->string('quantity')->nullable(); 
            $table->string('weight')->nullable(); 
            $table->string('unit')->nullable(); 
            $table->string('notes')->nullable(); 
            $table->string('image_url')->nullable();
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
        Schema::dropIfExists('farm_harvesting');
    }
}
