<?php

use Illuminate\Database\Seeder;

class LayoutProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'product_category'  => true,
            'product_fillter'   => true,
            'product_advertise' => 'photo.png',
            'product_banner'    => 'photo.png',

        ];
        DB::table('tb_layout_product')->insert($data);
    }
}
