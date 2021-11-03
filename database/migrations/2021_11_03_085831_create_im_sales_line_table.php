<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImSalesLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('im_sales_line', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('im_product');
            $table->foreignId('sales_id')->constrained('im_sales');
            $table->integer('nb_products');
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
        Schema::dropIfExists('im_sales_line');
    }
}
