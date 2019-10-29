<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_order', function (Blueprint $table) {
            $table->increments('od_id');
            $table->integer('od_user_id')->default(0)->index();
            $table->integer('od_total')->default(0);
            $table->integer('od_ship')->nullable();
            $table->text('od_note')->nullable();
            $table->string('od_address');
            $table->string('od_phone');
            $table->tinyInteger('od_status')->default(0)->index();
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
        Schema::dropIfExists('tb_order');
    }
}
