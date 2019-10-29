<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
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
                'blog_ten' => 'Tên bài viết 1',
                'blog_slug' => str_slug('Tên bài viết 1'),
                'blog_noidung' => 'Nội dung bài viết 1',
                'blog_title' => 'Title 1',
                'blog_mota' => 'Mô tả bài viết 1',
                'blog_nguoiviet' => 'Tuấn Anh Đinh',
                'blog_blogcatid' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'blog_ten' => 'Tên bài viết 2',
                'blog_slug' => str_slug('Tên bài viết 2'),
                'blog_noidung' => 'Nội dung bài viết 2',
                'blog_title' => 'Title 2',
                'blog_mota' => 'Mô tả bài viết 2',
                'blog_nguoiviet' => 'Admin',
                'blog_blogcatid' => 2,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ];
        DB::table('tb_blog')->insert($data);
    }
}
