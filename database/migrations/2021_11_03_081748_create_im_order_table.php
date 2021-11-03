<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('im_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained('im_supplier');
            $table->string('status');
            $table->dateTime('creation_date');
            $table->dateTime('delivery_date');
            $table->foreignId('user_id_creation')->constrained('im_user');
            $table->foreignId('user_id_delivery')->constrained('im_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('im_order');
    }
}
