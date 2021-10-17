<?php


namespace App\Repositories\DatLich;

use App\Repositories\BaseRepository;
use App\Models\Admin\DatLichModel;
use App\Repositories\DatLich\DatLichRepositoryInterface;
class DatLichRepository extends BaseRepository implements DatLichRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return DatLichModel::class;
    }

    public function getAllCungCoSo($idCoSo)
    {
        return $this->model::where([
            ['idcoso', '=', $idCoSo]
        ])->get();
    }

    public function findDatLichCuaNhanVienTheoThoiGian($thoiGianDat, $idNhanVien)
    {
        return $this->model::where([
            ['idnhanvien', '=', $idNhanVien],
            ['thoigiandat', '=', $thoiGianDat]
        ])->first();
    }

    public function getSoLanKhachDatByTimeStamp($thoiGianDat)
    {
        return $this->model::where([
            ['thoigiandat', '=', $thoiGianDat]
        ])->count();
    }
}
