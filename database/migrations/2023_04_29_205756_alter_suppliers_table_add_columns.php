<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSuppliersTableAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('suppliers', function(Blueprint $table){
            $table->string('site', 100)->after('email')->nullable();
            $table->string('postcode', 10)->after('address')->nullable();
            $table->string('city', 50)->after('postcode')->nullable();
            $table->string('county', 50)->after('city')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('suppliers', function(Blueprint $table){
            $table->dropColumn('site');
            $table->dropColumn('postcode');
            $table->dropColumn('city');
            $table->dropColumn('county');
        });
    }
}
