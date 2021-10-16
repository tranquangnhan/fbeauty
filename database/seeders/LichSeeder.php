<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soluongkhach = 4;
        $thu = 2;
        $idcoso = 1;
        $gio = 9;
        $trangthai = 1;
        for ($i = 0; $i < 21; $i++) {
            $khoanGiuaKhungGio = 0.5;
            $gio += $khoanGiuaKhungGio;
            $toTime = sprintf('%02d:%02d', (int) $gio, fmod($gio, 1) * 60);

            DB::table('lich')->insert([
                ['idcoso' => $idcoso, 'thutrongtuan' => $thu , 'soluongkhach' => $soluongkhach, 'gio' => $toTime, 'trangthai' => $trangthai]
            ]);

            if ($i == 20)
            {
                $gio = 9;
                if ($idcoso == 2 && $thu == 8)
                {
                    break;
                }
                else if ($idcoso == 1 && $thu == 8)
                {
                    $idcoso = 2;
                    $thu = 1;
                }

                if ($thu <= 8)
                {
                    $thu++;
                    $i = 0;
                }
            }

        }
    }
}
