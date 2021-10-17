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
        $thu = 0;
        $idcoso = 1;
        $gio = 8;
        $trangthai = 1;
        for ($i = 0; $i <= 20; $i++) {
            $khoanGiuaKhungGio = 0.5;
            $gio += $khoanGiuaKhungGio;
            $toTime = sprintf('%02d:%02d', (int) $gio, fmod($gio, 1) * 60);

            DB::table('lich')->insert([
                ['idcoso' => $idcoso, 'thutrongtuan' => $thu , 'soluongkhach' => $soluongkhach, 'gio' => $toTime, 'trangthai' => $trangthai]
            ]);

            if ($i == 20)
            {
                $gio = 8;
                if ($idcoso == 2 && $thu == 6)
                {
                    break;
                }
                else if ($idcoso == 1 && $thu == 6)
                {
                    $idcoso = 2;
                    $thu = 0;
                }

                if ($thu <= 6)
                {
                    $thu++;
                    $i = 0;
                }
            }

        }
    }
}
