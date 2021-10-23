<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Repositories\DonHang\DonHangRepository;
use App\Repositories\DonHangChiTiet\DonHangChiTietRepository;
use App\Repositories\KhachHang\KhachHangRepository;
use App\Repositories\SanPham\SanPhamRepository;
use Illuminate\Http\Request;
class DonHangchitietController extends Controller
{
    private $DonHangChiTiet;
    private $DonHang;
    private $khachHang;
    /**
     * CosoController constructor.
     */
    public function __construct(DonHangChiTietRepository $DonHangChiTiet , DonHangRepository $DonHang , SanPhamRepository $SanPham ,KhachHangRepository $khachHang)
    {
        $this->DonHangChiTiet = $DonHangChiTiet;
        $this->DonHang = $DonHang;
        $this->khachHang = $khachHang;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    function editDetailDonHang($id){
        $donHang = $this->DonHang->find($id);

        $khachHang = $this->DonHangChiTiet->getDonHangChiTietByIdKhachHangInnerJoin($id);
        //dd($khachHang);
        $sanpham = $this->DonHangChiTiet->getDonHangChiTietByIdDonHangInnerJoin($id);

        return view('Admin.DonHang.detail', compact('donHang','sanpham','khachHang'));
    }


    function updateDetailDonHang(Request $request, $id){
        $data = [
            'soluong'=> $request->soluong,
        ];
        // dd($data);
        if(count($request->soluong)>0){
            $array = [];
         for ($i=0; $i < count($request->id) ; $i++) {
             $data = [
                'soluong'=> $request ->soluong[$i],
             ];
                array_push($array,$data);

            $this->DonHangChiTiet->updateDetailByIdDH($request->id[$i],$data);
         }

         //dd($array);
        }



        return redirect('quantri/donhang')->with('success','Sửa thành công');
    }
}
