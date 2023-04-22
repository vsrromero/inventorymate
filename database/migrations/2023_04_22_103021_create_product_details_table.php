<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->float('weight', 8, 2)->default(0.00);
            $table->float('height', 8, 2)->default(0.00);
            $table->float('width', 8, 2)->default(0.00);
            $table->float('depth', 8, 2)->default(0.00);
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->unique('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop foreign key
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign('product_details_product_id_foreign');
            $table->dropColumn('product_id');
        });
        Schema::dropIfExists('product_details');
    }
}
