<?php

use Illuminate\Database\Seeder;

class BlogcatSeeder extends Seeder
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
                'blogcat_ten' => 'Đời sống',
                'blogcat_slug' => str_slug('Đời sống'),
                'blogcat_mota' => 'Mô tả danh mục Đời sống',
                'blogcat_thumb' => 'picture.png',
                'blogcat_hienthi' => true,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'blogcat_ten' => 'Thể thao',
                'blogcat_slug' => str_slug('Thể thao'),
                'blogcat_mota' => 'Mô tả danh mục Thể thao',
                'blogcat_thumb' => 'picture.png',
                'blogcat_hienthi' => true,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'blogcat_ten' => 'Nghệ thuật',
                'blogcat_slug' => str_slug('Nghệ thuật'),
                'blogcat_mota' => 'Mô tả danh mục Nghệ thuật',
                'blogcat_thumb' => 'picture.png',
                'blogcat_hienthi' => true,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];

        DB::table('tb_blogcat')->insert($data);
    }
}
