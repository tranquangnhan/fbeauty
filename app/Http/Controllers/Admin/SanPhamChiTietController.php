<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamChiTiet;
use App\Repositories\SanPhamChiTiet\SanPhamChiTietRepository;
use Illuminate\Http\Request;

class SanPhamChiTietController extends Controller
{
    private $SanPhamChiTiet;

    public function __construct(SanPhamChiTietRepository $SanPhamChiTiet)
    {
        $this->SanPhamChiTiet = $SanPhamChiTiet;
    }

    public function createDetailProduct(){

        return view('Admin.SanPham.createDetail');
    }

    public function postDetailProduct(SanPhamChiTiet $request){

        $idsanpham = $request->route('id');
        $ml = $request->ml;
        $tonkho = $request->tonkho;
        $dongia = $request->dongia;
        if($ml[0] != null && $tonkho[0] != null && $dongia[0] != null){

            for ($i=0; $i < count($ml); $i++) { 

                $data = [
                    'idsanpham'=>$idsanpham,
                    'ml'=>  $ml[$i],
                    'tonkho'=>$tonkho[$i],
                    'dongia'=>$dongia[$i]
                ];
                $this->SanPhamChiTiet->create($data);
            }

        }else{
            return $this->handleError('Dữ liệu không được để trống');
        }
        return redirect('quantri/sanpham')->with('success','Thêm thành công');
    }
    
    
    function editDetailProduct($id){

        $data = $this->SanPhamChiTiet->getSanPhamChiTietByIdSanPham($id);

        return view('Admin.SanPham.editDetail',compact('data'));
    }



    function updateDetailProduct(SanPhamChiTiet $request, $id){
        $data = $this->SanPhamChiTiet->getSanPhamChiTietByIdSanPham($id);
        $ml = $request->ml;
        $tonkho = $request->tonkho;
        $dongia = $request->dongia;
       
        if($ml[0] == null || $tonkho[0] == null || $dongia[0] == null){
            return $this->handleError('Dữ liệu không được để trống');
        }

        if(count($data) === count($request->dongia)){

            for ($i=0; $i < count($ml); $i++) { 

                $data = [
                    'ml'=>  $ml[$i],
                    'tonkho'=>$tonkho[$i],
                    'dongia'=>$dongia[$i]
                ];
            
                $this->SanPhamChiTiet->updateDetailByIdSp($id,$data);
            }

        }else{
            $this->SanPhamChiTiet->delDetailByIdSp($id);
           
            for ($i=0; $i < count($ml); $i++) { 
                
                $data = [
                    'idsanpham'=> $id,
                    'ml'=>  $ml[$i],
                    'tonkho'=>$tonkho[$i],
                    'dongia'=>$dongia[$i]
                ];

                $this->SanPhamChiTiet->create($data);
            }
        }
    

        return redirect('quantri/sanpham')->with('success','Sửa thành công');
    }
    // this is test
}
