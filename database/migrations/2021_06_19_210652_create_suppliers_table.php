<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('order_date');
            $table->string('receive_date')->nullable();
            $table->string('rupee');
            $table->string('bdt');
            $table->string('weight')->nullable();
            $table->string('weight_cost')->nullable();
            $table->string('other_cost')->nullable();
            $table->string('category')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('suppliers');
    }
}
