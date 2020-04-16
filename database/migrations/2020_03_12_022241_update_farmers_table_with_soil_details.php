<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFarmersTableWithSoilDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(128);

        Schema::table('farmers', function (Blueprint $table) {
            $table->dateTime('type_of_soil')->nullable();
        });

        Schema::table('farmers', function (Blueprint $table) {
            $table->unsignedInteger('color_of_soil')->nullable();
        });

        Schema::table('farmers', function (Blueprint $table) {
            $table->unsignedInteger('texture_of_soil')->nullable();
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
