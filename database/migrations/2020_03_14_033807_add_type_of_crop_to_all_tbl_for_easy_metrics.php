<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeOfCropToAllTblForEasyMetrics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prepare_land', function (Blueprint $table) {
        $table->string('main_crop');
        });

        Schema::table('farm_produce_sales', function (Blueprint $table) {
         $table->string('main_crop');
         });

         Schema::table('farm_harvesting', function (Blueprint $table) {
            $table->string('main_crop');
         });


         Schema::table('farm_fertilizer_application', function (Blueprint $table) {
            $table->string('main_crop');
         });


        
         Schema::table('farm_nursery', function (Blueprint $table) {
            $table->string('main_crop');
         });
         
         
         Schema::table('farm_spraying_weeding', function (Blueprint $table) {
            $table->string('main_crop');
         }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prepare_land', function (Blueprint $table) {
            $table->dropColumn('main_crop');
            //
        });

        Schema::table('farm_produce_sales', function (Blueprint $table) {
            $table->dropColumn('main_crop');
            });


            Schema::table('farm_harvesting', function (Blueprint $table) {
                $table->dropColumn('main_crop');
        });


        Schema::table('farm_fertilizer_application', function (Blueprint $table) {
            $table->dropColumn('main_crop');
         });


         Schema::table('farm_nursery', function (Blueprint $table) {
            $table->dropColumn('main_crop');
         }); 


         Schema::table('farm_spraying_weeding', function (Blueprint $table) {
            $table->dropColumn('main_crop');
         }); 

    }
}
