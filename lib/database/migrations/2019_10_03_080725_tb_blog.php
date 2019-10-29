<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_blog', function (Blueprint $table) {
            $table->increments('blog_id');
            $table->string('blog_ten');
            $table->string('blog_slug');
            $table->string('blog_thumb')->default('picture.png');
            $table->text('blog_noidung');
            $table->boolean('blog_noibat')->default(false);
            $table->boolean('blog_hienthi')->default(true);
            $table->string('blog_title');
            $table->text('blog_mota');
            $table->string('blog_nguoiviet');
            $table->integer('blog_blogcatid')->unsigned();
            $table->foreign('blog_blogcatid')
                    ->references('blogcat_id')
                    ->on('tb_blogcat')
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
        Schema::dropIfExists('tb_blog');
    }
}
