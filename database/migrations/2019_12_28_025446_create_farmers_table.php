<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(128);
        Schema::create('farmers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('fullname');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->default("123456");
            $table->string('gender');
            $table->string('contact')->unique()->nullable();
            $table->string('location');
            $table->string('age')->nullable();
            $table->string('marital_status');
            $table->string('educational_level')->nullable();
            $table->string('main_occupation')->nullable();
            $table->string('minor_occupation')->nullable();
            $table->string('dependants')->nullable();
            $table->string('farm_acres');
            $table->string('main_crop')->nullable();
            $table->string('image_url')->nullable();
            $table->string('thumb_scan')->nullable();
            $table->string('index_scan')->nullable();
            $table->string('middle_scan')->nullable();
            $table->string('ring_scan')->nullable();
            $table->string('little_scan')->nullable();
            $table->string('status')->default('0');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
    }
}
