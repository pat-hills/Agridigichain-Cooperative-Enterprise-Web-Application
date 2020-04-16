<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(128);
        Schema::create('admins', function (Blueprint $table) {
      
           $table->increments('id');
           $table->string('fullname');
           $table->string('email')->unique();
           $table->string('password');
           $table->timestamp('email_verified_at')->nullable();
           $table->string('contact')->unique();
           $table->string('country');
           $table->string('status')->default('0');
           $table->rememberToken();
           $table->timestamps();
           $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
