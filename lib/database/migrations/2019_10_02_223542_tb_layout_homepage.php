<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbLayoutHomepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_layout_homepage', function (Blueprint $table) {
            $table->increments('homepage_id');
            $table->string('homepage_logo');
            $table->string('homepage_favicon');

            $table->string('slide_img_1');
            $table->string('slide_link_1');
            $table->boolean('slide_hienthi_1')->default(true);
            $table->string('slide_img_2');
            $table->string('slide_link_2');
            $table->boolean('slide_hienthi_2')->default(true);
            $table->string('slide_img_3');
            $table->string('slide_link_3');
            $table->boolean('slide_hienthi_3')->default(true);

            $table->string('bannertop_img_1');
            $table->string('bannertop_link_1')->nullable();
            $table->string('bannertop_img_2');
            $table->string('bannertop_link_2')->nullable();
            $table->string('bannertop_img_3');
            $table->string('bannertop_link_3')->nullable();
            $table->string('bannertop_img_4');
            $table->string('bannertop_link_4')->nullable();

            $table->string('aboutus_img');
            $table->string('aboutus_title');
            $table->string('aboutus_description');
            $table->string('aboutus_icon_1');
            $table->string('aboutus_textup_1');
            $table->string('aboutus_textdown_1')->nullable();
            $table->string('aboutus_icon_2');
            $table->string('aboutus_textup_2');
            $table->string('aboutus_textdown_2')->nullable();
            $table->string('aboutus_icon_3');
            $table->string('aboutus_textup_3');
            $table->string('aboutus_textdown_3')->nullable();
            $table->string('aboutus_icon_4');
            $table->string('aboutus_textup_4');
            $table->string('aboutus_textdown_4')->nullable();

            $table->integer('topproduct_1')->nullable();
            $table->integer('topproduct_2')->nullable();
            $table->integer('topproduct_3')->nullable();
            $table->integer('topproduct_4')->nullable();

            $table->string('promotion_img');
            $table->string('promotion_text_1');
            $table->string('promotion_text_2');
            $table->string('promotion_text_3');
            $table->tinyInteger('promotion_day')->unsigned();
            $table->tinyInteger('promotion_hour')->unsigned();
            $table->tinyInteger('promotion_minute')->unsigned();
            $table->tinyInteger('promotion_second')->unsigned();
            $table->string('promotion_link');

            $table->string('whyus_title');
            $table->string('whyus_img');

            $table->string('whyus_icon_1');
            $table->string('whyus_title_1');
            $table->string('whyus_description_1');
            $table->string('whyus_icon_2');
            $table->string('whyus_title_2');
            $table->string('whyus_description_2');
            $table->string('whyus_icon_3');
            $table->string('whyus_title_3');
            $table->string('whyus_description_3');
            $table->string('whyus_icon_4');
            $table->string('whyus_title_4');
            $table->string('whyus_description_4');
            $table->string('whyus_icon_5');
            $table->string('whyus_title_5');
            $table->string('whyus_description_5');
            $table->string('whyus_icon_6');
            $table->string('whyus_title_6');
            $table->string('whyus_description_6');

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
        Schema::dropIfExists('tb_layout_homepage');
    }
}
