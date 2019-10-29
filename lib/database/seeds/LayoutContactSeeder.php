<?php

use Illuminate\Database\Seeder;

class LayoutContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'contact_map'   => 'maps',
            'contact_title' => 'title',
            'contact_add'   => 'add',
            'contact_email' => 'mail',
            'contact_phone' => 'phone',

        ];
        DB::table('tb_layout_contact')->insert($data);
    }
}
