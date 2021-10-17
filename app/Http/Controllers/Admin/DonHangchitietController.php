<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Repositories\DonHangChiTiet\DonHangChiTietRepository;
use Illuminate\Http\Request;
class DonHangchitietController extends Controller
{
    private $DonHangChiTiet;
    /**
     * CosoController constructor.
     */
    public function __construct(DonHangChiTietRepository $DonHangChiTiet)
    {
        $this->DonHangChiTiet = $DonHangChiTiet;
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
        //dd($data);
        return view('Admin.DonHang.detail',compact('data'));
    }


    function updateDetailDonHang(Request $request, $id){
        $data = [
            'soluong'=> $request->soluong,
            'dongiatruocgiamgia'=> $request->dongiatruocgiamgia,
            'dongiasaugiamgia'=>$request->dongiasaugiamgia
        ];
        $this->DonHangChiTiet->update($id,$data);
        return view('Admin.DonHang.detail',compact('data'));
    }
}
