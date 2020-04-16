<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmProduceSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(128);
        Schema::create('farm_produce_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('farmer_id');
            $table->unsignedInteger('farm_harvesting_id');
            $table->string('quantity')->nullable();
            $table->double('price')->nullable();
            $table->string('buyer')->nullable();
            $table->string('name_of_driver')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('way_bill_number')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('status')->default('0');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('farmer_id')->references('id')->on('farmers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('farm_harvesting_id')->references('id')->on('farm_harvesting')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farm_produce_sales');
    }
}
