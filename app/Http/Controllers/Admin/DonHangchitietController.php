<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Repositories\DonHang\DonHangRepository;
use App\Repositories\DonHangChiTiet\DonHangChiTietRepository;
use App\Repositories\SanPham\SanPhamRepository;
use Illuminate\Http\Request;
class DonHangchitietController extends Controller
{
    private $DonHangChiTiet;
    private $DonHang;
    private $SanPham;
    /**
     * CosoController constructor.
     */
    public function __construct(DonHangChiTietRepository $DonHangChiTiet , DonHangRepository $DonHang , SanPhamRepository $SanPham)
    {
        $this->DonHangChiTiet = $DonHangChiTiet;
        $this->DonHang = $DonHang;
        $this->SanPham = $SanPham;
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

        $data = $this->DonHangChiTiet->getDonHangChiTietByIdDonHang($id);
        // $datadonhangchitiet = $this->DonHangChiTiet->find($id);
        // $donhang = $this->DonHang->find($datadonhangchitiet->iddonhang);
        // $sanpham = $this->SanPham->find($datadonhangchitiet->idsanpham);

        return view('Admin.DonHang.detail',compact('data'));
    }


    function updateDetailDonHang(Request $request, $id){
        $data = [
            'soluong'=> $request->soluong,
            'dongiatruocgiamgia'=> $request->truocgiamgia,
            'dongiasaugiamgia'=>$request->saugiamgia
        ];

        //$this->DonHangChiTiet->updateDetailByIdDH($id,$data);
dd($data);
        //return redirect('quantri/donhang')->with('success','Sửa thành công');
    }
}
