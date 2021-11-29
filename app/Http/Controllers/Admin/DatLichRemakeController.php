<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\CoSo\CoSoRepository;
use App\Repositories\DichVu\DichVuRepository;
use App\Repositories\KhachHang\KhachHangRepository;
use App\Repositories\DatLich\DatLichRepository;
use App\Repositories\NhanVien\NhanVienRepository;
use App\Repositories\Lich\LichRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class DatLichRemakeController extends Controller
{
    private $data = array();
    private $CoSo;
    private $DatLich;
    private $DichVu;
    private $KhachHang;
    private $NhanVien;

    public function __construct(
        CoSoRepository $CoSo,
        DatLichRepository $DatLich,
        DichVuRepository $DichVu,
        KhachHangRepository $KhachHang,
        NhanVienRepository $NhanVien,
        LichRepository $Lich,
        )
    {
        $this->CoSo = $CoSo;
        $this->DatLich = $DatLich;
        $this->DichVu = $DichVu;
        $this->KhachHang = $KhachHang;
        $this->NhanVien = $NhanVien;
        $this->Lich = $Lich;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['namePage']            = 'Khách Đặt Lịch';
        $this->data['breadcrumbArray']     = [
            ['link' => '/quantri/datlichremake', 'name' => 'Đặt lịch'],
            ['link' => '', 'name' => 'Danh sách'],
        ];
        $toDay = Carbon::today();
        $this->data['duLieuCalendar'] = $this->getDuLieuChoCalendar($toDay);

        return view('Admin.DatLichRemake.index', $this->data);
    }

    public function getLichByDay($day, $idCoSo) {
        $newCarbon = new Carbon($day);
        $dayOfWeek = $newCarbon->dayOfWeek;
        $lich = $this->Lich->getLichByThuAndCoSo($dayOfWeek, $idCoSo);
        return $lich;
    }

    public function getDatLichByDay($ngay, $idCoSo) {
        $thoigian = Controller::getThoiGianTimestampDauVaCuoiCuaNgay($ngay->toDateString());
        $datlich = $this->DatLich->getDatLichByDay($thoigian['dauNgayTimestamp'], $thoigian['cuoiNgayTimestamp'], $idCoSo);

        foreach ($datlich as $datLichItem) {
            if ($datLichItem->idnhanvien == 0) {
                $datLichItem->nameNhanVien = 'Spa tự chọn';
            } else {
                $datLichItem->nameNhanVien = $this->NhanVien->getNameNhanVien($datLichItem->idnhanvien);
            }

            $arrayDichVu = array();
            $listIdDichVu = json_decode($datLichItem->iddichvu);

            if (count($listIdDichVu) > 0) {
                for ($i = 0; $i < count($listIdDichVu); $i++) {
                    $arrayDichVu[] = $this->DichVu->findDichVuById($listIdDichVu[$i]);
                }

                $datLichItem->arrayDichVu = $arrayDichVu;
            }
        }
        return $datlich;
    }

    public function getDuLieuChoCalendar($day) {
        $listLich = $this->getLichByDay($day, session('coso'));
        $listDatLich = $this->getDatLichByDay($day, session('coso'));
        $nullArray = array();
        foreach ($listLich as $lichItem) {
            $lichItem['listDatLich'] = [];
            $nullArray = [];

            $ngay = $day->toDateString().$lichItem->gio;

            $thoigiandat = Carbon::parse($ngay)->timestamp;

            foreach ($listDatLich as $datLichItem) {
                if ($datLichItem->thoigiandat == $thoigiandat) {
                    $nullArray[] = $datLichItem;
                } else {
                    // Tạo data mới cho trường hợp khung giờ thay đổi
                }
            }
            $lichItem['listDatLich'] = $nullArray;
        }


        return $listLich;
    }


}
