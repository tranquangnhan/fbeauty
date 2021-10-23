<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            ['iddm' => '8', 'img' => '02_12.jpg', 'name' => 'DR.Seoul trị và ức chế mụn VAS 4.0 cho da mụn và nhạy cảm', 'slug' => Str::slug('DR.Seoul trị và ức chế mụn VAS 4.0 cho da mụn và nhạy cảm', '-'), 'noidung' => 'Test', 'trangthai' => '1'],
            ['iddm' => '8', 'img' => 'adrian-motroc-87InWldRhgs-unsplash.jpg', 'name' => 'Trị mụn bằng tia laser có tốt không? Công nghệ laser trị mụn tốt nhất 2021', 'slug' => Str::slug('Trị mụn bằng tia laser có tốt không? Công nghệ laser trị mụn tốt nhất 2021', '-'), 'noidung' => 'Test', 'trangthai' => '1'],
            ['iddm' => '8', 'img' => 'beautician-with-brush-applies-white-moisturizing-mask-face-young-girl-client-spa-beauty-salon.jpg', 'name' => 'Top 7 thẩm mỹ viện uy tín – chuyên nghiệp tại Đà Nẵng', 'slug' => Str::slug('Top 7 thẩm mỹ viện uy tín – chuyên nghiệp tại Đà Nẵng', '-'), 'noidung' => 'Test', 'trangthai' => '1'],
            ['iddm' => '8', 'img' => 'beauty-spa.jpg', 'name' => 'Tiêm hồng môi và những lưu ý quan trọng cần nhớ', 'slug' => Str::slug('Tiêm hồng môi và những lưu ý quan trọng cần nhớ', '-'), 'noidung' => 'Test', 'trangthai' => '1'],
        ]);
    }
}
