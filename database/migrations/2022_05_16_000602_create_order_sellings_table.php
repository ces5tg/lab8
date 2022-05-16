<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_sellings', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('description');
            $table->float('price_costo');
            $table->float('price_venta');

            $table->float('cantidad');
            $table->float('peso');

            $table->float('total');
            $table->float('ganancia');
            $table->float('porcentajeGanancia');
            /* $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
 */
            $table->unsignedBigInteger('selling_id')->nullable();
            $table->foreign('selling_id')->references('id')->on('sellings')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_sellings');
    }
}
