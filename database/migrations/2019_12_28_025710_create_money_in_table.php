<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(128);
        Schema::create('money_in', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('farmerId');
            $table->unsignedInteger('user_id');
            $table->string('itemName')->nullable();
            $table->string('quantity')->nullable();
            $table->double('unitPrice')->nullable();
            $table->double('totalPrice')->nullable()->index(); 
            $table->dateTime('dateAdded')->nullable();
            $table->string('description')->nullable();
            $table->string('weight')->nullable();
            $table->string('crop')->nullable();
            $table->string('money_in_month')->nullable();
            $table->string('money_in_year')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('status')->default('0');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('farmerId')->references('id')->on('farmers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('money_in');
    }
}
