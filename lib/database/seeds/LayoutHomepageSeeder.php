<?php

use Illuminate\Database\Seeder;

class LayoutHomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'homepage_logo'     => 'logo.png',
            'homepage_favicon'  => 'favicon.png',

            'slide_img_1'       => 'text',
            'slide_link_1'      => 'text',
            'slide_hienthi_1'   => true,
            'slide_img_2'       => 'text',
            'slide_link_2'      => 'text',
            'slide_hienthi_2'   => true,
            'slide_img_3'       => 'text',
            'slide_link_3'      => 'text',
            'slide_hienthi_3'   => true,

            'bannertop_img_1'   => 'text',
            'bannertop_link_1'  => 'text',
            'bannertop_img_2'   => 'text',
            'bannertop_link_2'  => 'text',
            'bannertop_img_3'   => 'text',
            'bannertop_link_3'  => 'text',
            'bannertop_img_4'   => 'text',
            'bannertop_link_4'  => 'text',

            'aboutus_img'           => 'text',
            'aboutus_title'         => 'text',
            'aboutus_description'   => 'text',
            'aboutus_icon_1'        => 'text',
            'aboutus_textup_1'      => 'text',
            'aboutus_textdown_1'    => 'text',
            'aboutus_icon_2'        => 'text',
            'aboutus_textup_2'      => 'text',
            'aboutus_textdown_2'    => 'text',
            'aboutus_icon_3'        => 'text',
            'aboutus_textup_3'      => 'text',
            'aboutus_textdown_3'    => 'text',
            'aboutus_icon_4'        => 'text',
            'aboutus_textup_4'      => 'text',
            'aboutus_textdown_4'    => 'text',

            'topproduct_1'      => 1,
            'topproduct_2'      => 1,
            'topproduct_3'      => 1,
            'topproduct_4'      => 1,

            'promotion_img'     => 'text',
            'promotion_text_1'  => 'text',
            'promotion_text_2'  => 'text',
            'promotion_text_3'  => 'text',
            'promotion_day'     => 0,
            'promotion_hour'    => 0,
            'promotion_minute'  => 0,
            'promotion_second'  => 0,
            'promotion_link'    => 'text',

            'whyus_title'       => 'text',
            'whyus_img'         => 'text',

            'whyus_icon_1'          => 'text',
            'whyus_title_1'         => 'text',
            'whyus_description_1'   => 'text',
            'whyus_icon_2'          => 'text',
            'whyus_title_2'         => 'text',
            'whyus_description_2'   => 'text',
            'whyus_icon_3'          => 'text',
            'whyus_title_3'         => 'text',
            'whyus_description_3'   => 'text',
            'whyus_icon_4'          => 'text',
            'whyus_title_4'         => 'text',
            'whyus_description_4'   => 'text',
            'whyus_icon_5'          => 'text',
            'whyus_title_5'         => 'text',
            'whyus_description_5'   => 'text',
            'whyus_icon_6'          => 'text',
            'whyus_title_6'         => 'text',
            'whyus_description_6'   => 'text',
          
        ];
        DB::table('tb_layout_homepage')->insert($data);
    }
}
