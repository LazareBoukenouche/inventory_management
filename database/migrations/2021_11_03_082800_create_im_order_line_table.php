<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImOrderLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('im_order_line', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('im_product');
            $table->foreignId('order_id')->constrained('im_order');
            $table->integer('nb_products_ordered');
            $table->integer('nb_products_received');
            $table->double('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('im_order_line');
    }
}
