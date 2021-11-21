<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class DatLichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $yesterday = Carbon::now()->subDays(1)->toDateString();
        $date = $now->toDateString();

        $dateTime1 = $yesterday . '9:00:00';
        $dateTime2 = $yesterday . '10:00:00';
        $dateTime3 = $yesterday . '11:00:00';
        $dateTime4 = $yesterday . '17:00:00';

        DB::table('datlich')->insert([
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 1, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime1)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 2, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime1)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 3, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime1)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 4, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime1)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 5, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime2)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 6, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime2)],
            ['idcoso' => 1, 'iddichvu' => '[1, 4]', 'idkhachhang' => 2, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime2)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 3, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime2)],
            ['idcoso' => 1, 'iddichvu' => '[1, 4]', 'idkhachhang' => 4, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime3)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 2, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime3)],
            ['idcoso' => 1, 'iddichvu' => '[1, 4]', 'idkhachhang' => 5, 'idnhanvien' => 0, 'thoigiandat' => strtotime($dateTime4)],
        ]);
    }
}
