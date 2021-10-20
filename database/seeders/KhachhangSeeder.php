<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KhachhangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khachhang')->insert([
            ['name' => 'Long', 'sdt'=> '0965286055', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => 'Nhân', 'sdt'=> '0965286056', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => 'Ly Ly', 'sdt'=> '0965286057', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => 'Hương Hương', 'sdt'=> '0965286058', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => 'Thảo', 'sdt'=> '0965286059', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => 'Thảo Mai', 'sdt'=> '0965286060', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => null, 'sdt'=> '0965286061', 'password' => null, 'active' => 0, 'img' => null],
        ]);
    }
}
