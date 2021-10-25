<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Coso\CosoRepository;
use App\Repositories\CoSo\CoSoRepositoryInterface;
use App\Repositories\DichVu\DichVuRepositoryInterface;
use App\Repositories\HoaDon\HoaDonRepositoryInterface;
use App\Repositories\HoaDonChiTiet\HoaDonChiTietRepositoryInterface;
use App\Repositories\NhanVien\NhanVienRepositoryInterface;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    private $nhanvien;
    private $coso;
    private $dichvu;
    private $hoadon;
    private $hoadonchitiet;
    public function __construct(HoaDonRepositoryInterface $hoadon, HoaDonChiTietRepositoryInterface $hoadonchitiet,NhanVienRepositoryInterface $nhanvien, CosoRepository $coso, DichVuRepositoryInterface $dichvu)
    {
        $this->nhanvien = $nhanvien;
        $this->coso = $coso;
        $this->dichvu = $dichvu;
        $this->hoadon =$hoadon;
        $this->hoadonchitiet=$hoadonchitiet;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $coso=$this->coso->getAll();
//        return view("Admin.HoaDon.index", ['coso'=>$coso]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hoadon=$this->hoadon->ShowHoaDonByIdCoso($id);
        $coso=$this->coso->find($id);
        return view("Admin.HoaDon.index", ['hoadon'=>$hoadon, 'coso'=>$coso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
