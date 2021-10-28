<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Coso\CosoRepository;
use App\Repositories\DichVu\DichVuRepositoryInterface;
use App\Repositories\HoaDon\HoaDonRepositoryInterface;
use App\Repositories\HoaDonChiTiet\HoaDonChiTietRepositoryInterface;
use App\Repositories\NhanVien\NhanVienRepositoryInterface;
use Illuminate\Http\Request;

class HoaDonChiTietController extends Controller
{
    private $nhanvien;
    private $dichvu;
    private $hoadon;
    private $hoadonchitiet;
    private $coso;

    public function __construct(CosoRepository $coso, HoaDonRepositoryInterface $hoadon, HoaDonChiTietRepositoryInterface $hoadonchitiet, NhanVienRepositoryInterface $nhanvien, DichVuRepositoryInterface $dichvu)
    {
        $this->nhanvien = $nhanvien;
        $this->dichvu = $dichvu;
        $this->hoadon = $hoadon;
        $this->hoadonchitiet = $hoadonchitiet;
        $this->coso = $coso;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hd = $this->hoadon->find($id);
        $coso = $this->coso->find($hd->idcoso);
        $ThuNgan=$this->nhanvien->find($hd->idthungan);
        $idlieutrinh=$hd->idlieutrinh;
        $TenNhanVien=$this->nhanvien->find($hd->idnhanvien);
        $hdct = $this->hoadonchitiet->getHoaDonCTByIdHoaDon($id);
        return view("Admin.HoaDon.chitiet", ['hoadon'=>$hd,'coso' => $coso, 'hdct' => $hdct, 'thungan'=>$ThuNgan, 'TenNhanVien'=>$TenNhanVien, 'idlieutrinh'=>$idlieutrinh]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
