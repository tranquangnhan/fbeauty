<?php


namespace App\Repositories\DatLich;

use Carbon\Carbon;
use DB;
use App\Repositories\BaseRepository;
use App\Models\Admin\DatLichModel;
use App\Models\Admin\DichVuModel;
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
        return $this->model->select('datlich.*', 'datlich.id','dichvu.name AS dichvu','nhanvien.name AS nhanvien','khachhang.name AS khachhang')
        // ->join('dichvu','datlich.iddichvu', '=', 'dichvu.id')
        // ->join('nhanvien','datlich.idnhanvien', '=', 'nhanvien.id')
        // ->join('khachhang','datlich.idkhachhang', '=', 'khachhang.id')
        ->where('datlich.idcoso', $idCoSo)
        ->get();
    }
    public function getAll2CungCoSo($idCoSo){
        // $getall = $this->model->s
        // elect('dichvu')->value("name")->first();
        // dd($getall)
        $date = Carbon::now('Asia/Ho_Chi_Minh');

        return $this->model->select('datlich.*', 'datlich.id','nhanvien.name as namenv','khachhang.name as namekh')

        // ->join('dichvu','datlich.iddichvu', '=', 'dichvu.id')
        ->join('nhanvien','datlich.idnhanvien', '=', 'nhanvien.id')
        ->join('khachhang','datlich.idkhachhang', '=', 'khachhang.id')
        // ->join('khachhang','datlich.idkhachhang', '=', 'khachhang.id')
        ->where('datlich.idcoso', '=',$idCoSo)
        ->whereDate('datlich.created_at','=', $date->toDateString())
        ->get();
    }

    public function getdv(){
        return DichVuModel::class;
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

    public function getDatLichCungCoSo($idCoSo)
    {
        return $this->model->select('*')
        ->where('datlich.idcoso', $idCoSo)
        ->get();
    }
}
