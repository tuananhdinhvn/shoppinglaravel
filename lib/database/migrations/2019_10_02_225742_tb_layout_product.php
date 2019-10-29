<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbLayoutProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_layout_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->boolean('product_category');
            $table->boolean('product_fillter');
            $table->string('product_advertise');
            $table->string('product_banner');
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
        Schema::dropIfExists('tb_layout_product');
    }
}
