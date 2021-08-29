<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->nullable();
            $table->string('category_name')->nullable();
            $table->string('product_name')->nullable();
            $table->string('target_sale')->nullable();
            $table->string('approximate_cost')->nullable();
            $table->string('quantity')->nullable();
            $table->string('product_cost')->nullable();
            $table->string('percentage')->nullable();

            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
