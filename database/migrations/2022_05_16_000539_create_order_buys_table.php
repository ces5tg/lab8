<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_buys', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('description');
            $table->integer('price_unidad');
            $table->float('peso');
            $table->integer('total');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');

            $table->unsignedBigInteger('buy_id')->nullable();
            $table->foreign('buy_id')->references('id')->on('buys')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_buys');
    }
}
