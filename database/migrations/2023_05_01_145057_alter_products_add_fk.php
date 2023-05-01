<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductsAddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function(Blueprint $table) {
            $table->unsignedBigInteger('measurement_unit_id')->after('stock');
            $table->foreign('measurement_unit_id')->references('id')->on('measurement_units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('measurement_units', function(Blueprint $table) {
            $table->dropForeign('products_measurement_unit_id_foreign');
            $table->dropColumn('measurement_unit_id');
        });
    }
}
