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
        $date = $now->toDateString();
        $dateTime1 = $date . '9:00:00';
        $dateTime2 = $date . '10:00:00';
        $dateTime3 = $date . '11:00:00';
        $dateTime4 = $date . '17:00:00';

        DB::table('datlich')->insert([
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 7, 'idnhanvien' => 1, 'thoigiandat' => strtotime($dateTime1)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 9, 'idnhanvien' => 3, 'thoigiandat' => strtotime($dateTime1)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 10, 'idnhanvien' => 4, 'thoigiandat' => strtotime($dateTime1)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 11, 'idnhanvien' => 6, 'thoigiandat' => strtotime($dateTime1)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 12, 'idnhanvien' => 2, 'thoigiandat' => strtotime($dateTime2)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 7, 'idnhanvien' => 4, 'thoigiandat' => strtotime($dateTime2)],
            ['idcoso' => 1, 'iddichvu' => '[1, 4]', 'idkhachhang' => 8, 'idnhanvien' => 6, 'thoigiandat' => strtotime($dateTime2)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 9, 'idnhanvien' => 5, 'thoigiandat' => strtotime($dateTime2)],
            ['idcoso' => 1, 'iddichvu' => '[1, 4]', 'idkhachhang' => 8, 'idnhanvien' => 3, 'thoigiandat' => strtotime($dateTime3)],
            ['idcoso' => 1, 'iddichvu' => '[1]', 'idkhachhang' => 9, 'idnhanvien' => 4, 'thoigiandat' => strtotime($dateTime3)],
            ['idcoso' => 1, 'iddichvu' => '[1, 4]', 'idkhachhang' => 8, 'idnhanvien' => 3, 'thoigiandat' => strtotime($dateTime4)],
        ]);
    }
}
