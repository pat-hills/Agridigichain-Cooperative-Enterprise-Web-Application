<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(128);
        Schema::create('money_out', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('farmer_id'); 
            $table->string('itemName')->nullable();
            $table->string('quantity')->nullable();
            $table->string('unitPrice')->nullable();
            $table->unsignedInteger('totalPrice')->nullable()->index(); 
            $table->string('dateAdded')->nullable();
            $table->string('description')->nullable();
            $table->string('weight')->nullable();
            $table->string('crop')->nullable();
            $table->string('category')->nullable();
            $table->string('money_out_month')->nullable();
            $table->string('money_year_year')->nullable();
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
        Schema::dropIfExists('money_out');
    }
}
