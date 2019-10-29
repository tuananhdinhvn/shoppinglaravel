<?php

use Illuminate\Database\Seeder;

class LayoutFooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'footer_logo'           => 'logo.png',
            'footer_description'    => 'favicon.png',
            'footer_address'        => 'add',
            'footer_email'          => 'mail',
            'footer_phone'          => 'phone',
            'footer_facebook'       => 'facebook',

        ];
        DB::table('tb_layout_footer')->insert($data);
    }
}
