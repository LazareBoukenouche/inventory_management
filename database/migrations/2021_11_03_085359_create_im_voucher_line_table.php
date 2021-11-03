<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImVoucherLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('im_voucher_line', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('im_product');
            $table->foreignId('voucher_id')->constrained('im_voucher');
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
        Schema::dropIfExists('im_voucher_line');
    }
}
