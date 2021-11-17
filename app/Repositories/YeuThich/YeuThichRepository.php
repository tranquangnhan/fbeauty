<?php


namespace App\Repositories\YeuThich;


use App\Models\Site\YeuThich;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class YeuThichRepository extends BaseRepository implements YeuThichRepositoryInterface
{
    protected $model;
    public function getModel(){
        return YeuThich::class;
    }
    public function CheckYeuThich($id, $idsanpham){
        return $this->model->select("*")->where('idkhachhang', $id)->where('idsanphamchitiet', $idsanpham)->doesntExist();
    }

    public function DeleteYeuThich($id, $idsanpham){
        return DB::table('yeuthich')->where('idkhachhang', $id)->where('idsanphamchitiet', $idsanpham)->delete();
    }

}
