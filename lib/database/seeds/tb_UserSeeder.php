<?php

use Illuminate\Database\Seeder;

class tb_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'user_name'         =>  'TuanAnhDinh',
                'user_email'        =>  'tuananhdinh.vn@gmail.com',
                'user_password'     =>  bcrypt('123456'),
                'user_phone'        =>  '0964973492',
                'user_diachi'       =>  'Vũng Tàu',
                'user_phanquyen'    =>  1,
                'user_avatar'       =>  'avatar.png',
                'user_xacnhan'      =>  true,
                'created_at'        =>  new DateTime,
                'updated_at'        =>  new DateTime,
            ],
            [
                'user_name'         =>  'Dinh Anh Duc',
                'user_email'        =>  'tuananh.a.bk@gmail.com',
                'user_password'     =>  bcrypt('123456'),
                'user_phone'        =>  '0933953192',
                'user_diachi'       =>  'Ho Chi Minh',
                'user_phanquyen'    =>  2,
                'user_avatar'       =>  'avatar.png',
                'user_xacnhan'      =>  true,
                'created_at'        =>  new DateTime,
                'updated_at'        =>  new DateTime,
            ],
           

        ];
        DB::table('tb_user')->insert($data);
    }
}
