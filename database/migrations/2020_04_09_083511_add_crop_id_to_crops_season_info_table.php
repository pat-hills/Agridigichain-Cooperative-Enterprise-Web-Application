<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCropIdToCropsSeasonInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crops_season_info', function (Blueprint $table) {
            $table->unsignedInteger('crop_id');
            $table->foreign('crop_id')->references('id')->on('crops')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crops_season_info', function (Blueprint $table) {
            $table->dropColumn('crop_id');
        });
    }
}
