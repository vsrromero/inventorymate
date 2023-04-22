<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdjustProductBranches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name');
            $table->timestamps();
        });
        
        Schema::create('product_branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('branch_id');
            $table->decimal('price', 8, 2)->default(0.00);
            $table->integer('maximum_stock')->nullable();
            $table->integer('minimum_stock')->nullable(); 
            $table->timestamps();

            //foreign keys
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

        });

        //remove from products table price, maximum_stock, minimum_stock
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['price', 'maximum_stock', 'minimum_stock']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->default(0.00);
            $table->integer('maximum_stock')->nullable();
            $table->integer('minimum_stock')->nullable();
        });

        Schema::dropIfExists('product_branches');
        Schema::dropIfExists('branches');
    }
}
