<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_order_detail', function (Blueprint $table) {
            $table->increments('odd_id');
            $table->integer('odd_od_id')->default(0)->index();
            $table->integer('odd_product_id')->default(0)->index();
            $table->integer('odd_qty')->default(0);
            $table->integer('odd_price')->default(0);
            $table->integer('odd_sale')->default(0);
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
        Schema::dropIfExists('tb_order_detail');
    }
}
