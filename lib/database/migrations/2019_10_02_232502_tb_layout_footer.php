<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbLayoutFooter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_layout_footer', function (Blueprint $table) {
            $table->increments('footer_id');
            $table->string('footer_logo');
            $table->text('footer_description');
            $table->string('footer_address');
            $table->string('footer_email');
            $table->string('footer_phone');
            $table->string('footer_facebook');
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
        Schema::dropIfExists('tb_layout_footer');
    }
}
