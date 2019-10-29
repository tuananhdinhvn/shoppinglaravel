<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbBlogcat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_blogcat', function (Blueprint $table) {
            $table->increments('blogcat_id');
            $table->string('blogcat_ten');
            $table->string('blogcat_slug');
            $table->text('blogcat_mota');
            $table->string('blogcat_thumb')->default('picture.png');
            $table->boolean('blogcat_hienthi')->default(true);
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
        Schema::dropIfExists('tb_blogcat');
    }
}
