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
    // public function index()
    // {
    //     $data  = $this->DonHangChiTiet->getAll();
    //     return view('Admin.DonHang.detail',compact('data'));
    // }
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
    // public function detail($id)
    // {
    // $data  = $this->DonHangChiTiet->find($id);
    // return view('Admin.donhang.detail',compact('data'));

    // }

    function editDetailDonHang($id){

        $data = $this->DonHangChiTiet->getDonHangChiTietByIdDonHang($id);
        //dd($data);
        return view('Admin.DonHang.detail',compact('data'));
    }


    function updateDetailDonHang($id){

        $data = $this->DonHangChiTiet->getAll();
        return view('Admin.DonHang.detail',compact('data'));
    }
}
