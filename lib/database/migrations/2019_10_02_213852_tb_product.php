<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_product', function (Blueprint $table) {
            $table->increments('pro_id');
            $table->string('pro_ten');
            $table->string('pro_slug');
            $table->boolean('pro_noibat')->default(false);
            $table->boolean('pro_banchay')->default(false);
            $table->boolean('pro_hienthi')->default(false);
            $table->string('pro_thumb')->default('productimg.png');
            $table->text('pro_thongtin');
            $table->float('pro_giaban');
            $table->float('pro_giakhuyenmai');
            $table->string('pro_baohanh');
            $table->float('pro_cannang')->default(0);
            $table->float('pro_sizedai')->default(0);
            $table->float('pro_sizerong')->default(0);
            $table->float('pro_sizecao')->default(0);
            $table->string('pro_title');
            $table->text('pro_mota');
            $table->tinyInteger('pro_trangthai')->default(1);
            $table->integer('pro_procatid')->unsigned();
            $table->foreign('pro_procatid')
                    ->references('procat_id')
                    ->on('tb_productcat')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('tb_product');
    }
}
