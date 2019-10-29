<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_setting', function (Blueprint $table) {
            $table->increments('st_id');
            $table->string('st_tencongty');
            $table->string('st_email');
            $table->string('st_hotline');
            $table->string('st_diachi');
            $table->text('st_title');
            $table->text('st_mota');
            $table->text('st_codehead')->nullable();
            $table->text('st_codebody')->nullable();
            $table->text('st_codefoot')->nullable();
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
        Schema::dropIfExists('tb_setting');
    }
}
