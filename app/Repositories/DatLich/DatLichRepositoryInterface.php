<?php


namespace App\Repositories\DatLich;
use App\Repositories\RepositoryInterface;
interface DatLichRepositoryInterface extends RepositoryInterface
{
    public function getModel();
    public function getAllCungCoSo($idCoSo);
    public function getAll2CungCoSo($idCoSo);
    public function getdv();
    public function findDatLichCuaNhanVienTheoThoiGian($thoiGianDat, $idNhanVien);
    public function getSoLanKhachDatByTimeStamp($thoiGianDat);
    public function getDatLichCungCoSo($idCoSo);
    public function getNumDatLichByTime($timeStampDauNgay, $timeStampCuoiNgay);
}
