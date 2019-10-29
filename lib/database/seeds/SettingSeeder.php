<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'st_tencongty'  => 'TuanAnhDinh',
                'st_email'      => 'tuananhdinh.vn@gmail.com',
                'st_hotline'    => '0964973492',
                'st_diachi'     => 'Vũng Tàu',
                'st_title'      => 'TuanAnhDinh',
                'st_mota'       => 'Mô tả công ty',
                'st_codehead'   => 'code head',
                'st_codebody'   => 'code body',
                'st_codefoot'   => 'code foot',
                'created_at'    => new DateTime,
            ],
            
        ];
        DB::table('tb_setting')->insert($data);
    }
}
