<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamChiTiet;
use App\Repositories\DonHangChiTiet\DonHangChiTietRepository;
use App\Repositories\SanPhamChiTiet\SanPhamChiTietRepository;


class SanPhamChiTietController extends Controller
{
    private $SanPhamChiTiet;
    private $DonHangChiTiet;
    public function __construct(SanPhamChiTietRepository $SanPhamChiTiet,DonHangChiTietRepository $DonHangChiTiet)
    {
        $this->SanPhamChiTiet = $SanPhamChiTiet;
        $this->DonHangChiTiet = $DonHangChiTiet;
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



    function updateDetailProduct(SanPhamChiTiet $request, $idsp){

        $id = $request->id;
        $data = $this->SanPhamChiTiet->getSanPhamChiTietByIdSanPham($idsp);

        $ml = $request->ml;
        $tonkho = $request->tonkho;
        $dongia = $request->dongia;

        if($ml[0] == null || $tonkho[0] == null || $dongia[0] == null){
            return $this->handleError('Dữ liệu không được để trống');
        }

        if(count($data) === count($request->dongia)){

            for ($i=0; $i < count($ml); $i++) {

                if(strlen($ml[$i]) > 4){
                    return  $this->handleError('Số ml không được lớn hơn 9999');
                }

                $data = [
                    'ml'=>  $ml[$i],
                    'tonkho'=>$tonkho[$i],
                    'dongia'=>$dongia[$i]
                ];
    
                $res = $this->SanPhamChiTiet->update($id[$i],$data);
            }
            if($res) {
              
                return redirect('quantri/sanpham')->with('success','Sửa thành công');
            }

        }
        else{
            // $this->SanPhamChiTiet->delDetailByIdSp($id);

            // for ($i=0; $i < count($ml); $i++) {

            //     $data = [
            //         'idsanpham'=> $id,
            //         'ml'=>  $ml[$i],
            //         'tonkho'=>$tonkho[$i],
            //         'dongia'=>$dongia[$i]
            //     ];

            //     $this->SanPhamChiTiet->create($data);
            // }
        }


        
    }
  
    public function destroy($id)
    {
        $hasDonHang = $this->DonHangChiTiet->findDonHangChiTietByIdDonHang($id);
        if(count($hasDonHang)>0){
            return  $this->handleError('Sản phẩm đã tồn tại trong đơn hàng, không thể xoá');
        }else{
            $this->SanPhamChiTiet->delete($id);
        }
    }

}
