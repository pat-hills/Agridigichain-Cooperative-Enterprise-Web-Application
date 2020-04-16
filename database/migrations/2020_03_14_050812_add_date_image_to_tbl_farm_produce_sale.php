<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateImageToTblFarmProduceSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('farm_produce_sales', function (Blueprint $table) {
            $table->date('date_of_activity')->nullable(); 
            $table->string('month_of_activity')->nullable(); 
            $table->string('year_of_activity')->nullable(); 
            $table->string('image_url')->nullable(); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('farm_produce_sales', function (Blueprint $table) {
            $table->dropColumn('date_of_activity')->nullable(); 
            $table->dropColumn('month_of_activity')->nullable(); 
            $table->dropColumn('year_of_activity')->nullable(); 
            $table->dropColumn('image_url')->nullable(); 

        });
    }
}
