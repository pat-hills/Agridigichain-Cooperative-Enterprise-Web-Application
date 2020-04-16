<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnTypesOfUpdateFarmersTableWithSoilDetails extends Migration
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
            $table->string('type_of_soil')->change();
        });

        Schema::table('farmers', function (Blueprint $table) {
            $table->string('color_of_soil')->change();
        });

        Schema::table('farmers', function (Blueprint $table) {
            $table->string('texture_of_soil')->change();
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
