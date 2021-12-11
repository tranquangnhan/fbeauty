<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\YeuThich\YeuThichRepository;
use Illuminate\Http\Request;

class YeuThichController extends Controller
{
    private $YeuThich;

    /**
     * CosoController constructor.
     */
    public function __construct(YeuThichRepository $YeuThich)
    {
        $this->YeuThich = $YeuThich;

    }
    public function getSanPhamYeuThich($idsanpham){
        if (session()->has('khachHang') && session('khachHang') != ''){
            $check=$this->YeuThich->CheckYeuThich(session('khachHang')->id, $idsanpham);
            if ($check == true){
                return 1;
            }
            else{
                return 0;
            }
        }
        else{
            return 1;
        }
    }

    public function AddSanPhamYeuThich($idsanpham){
        if (session()->has('khachHang') && session('khachHang') != ''){
            $check=$this->YeuThich->CheckYeuThich(session('khachHang')->id, $idsanpham);
            if ($check == true){
                $yeuthich=[
                    'idkhachhang'=>session('khachHang')->id,
                    'idsanphamchitiet'=>$idsanpham
                ];
                $this->YeuThich->create($yeuthich);
                return 0;
            }
            else{
                $this->YeuThich->DeleteYeuThich(session('khachHang')->id, $idsanpham);
                return 1;
            }
        }
        else{
            return 2;
        }
    }

    public function getAllSPYeuThich(){
        if (session()->has('khachHang') && session('khachHang') != ''){
            return $this->YeuThich->getAllYeuThich(session('khachHang')->id);
        }
        else{
            return $this->YeuThich->getAllYeuThich(00);
        }
    }

    public function xoayeuthich($id){
        $delete=$this->YeuThich->delete($id);
        if ($delete){
            return 0;
        }
        else{
            return 1;
        }
    }
}
