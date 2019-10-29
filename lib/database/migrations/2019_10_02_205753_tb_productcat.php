<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbProductcat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_productcat', function (Blueprint $table) {
            $table->increments('procat_id');
            $table->string('procat_ten');
            $table->string('procat_slug');
            $table->text('procat_mota');
            $table->string('procat_thumb')->default('productcat.png');
            $table->boolean('procat_hienthi')->default(true);
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
        Schema::dropIfExists('tb_productcat');
    }
}
