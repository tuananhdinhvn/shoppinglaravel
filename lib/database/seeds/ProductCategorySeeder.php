<?php

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
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
                'procat_ten'        => 'Apple',
                'procat_slug'       => str_slug('Apple'),
                'procat_mota'       => 'Mô tả danh mục Apple',
                'procat_thumb'      => 'photo.png',
                'procat_hienthi'    => true,
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'procat_ten'        => 'SamSung',
                'procat_slug'       => str_slug('SamSung'),
                'procat_mota'       => 'Mô tả danh mục SamSung',
                'procat_thumb'      => 'photo.png',
                'procat_hienthi'    => true,
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            
        ];
        DB::table('tb_productcat')->insert($data);
    }
}
