<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\DichVu\DichVuRepository;
use App\Repositories\KhachHang\KhachHangRepository;
use App\Repositories\LieuTrinh\LieuTrinhRepository;
use App\Repositories\LieuTrinhChiTiet\LieuTrinhChiTietRepository;
use App\Repositories\NhanVien\NhanVienRepository;
use Illuminate\Http\Request;

class LieuTrinhController extends Controller
{
    private $KhachHang;
    private $LieuTrinh;
    private $LieuTrinhChiTiet;
    public function __construct(
        KhachHangRepository $KhachHang,
        LieuTrinhRepository $LieuTrinh,
        LieuTrinhChiTietRepository $LieuTrinhChiTiet,
        NhanVienRepository $NhanVien,
        DichVuRepository $DichVu
    )
    {
        $this->KhachHang = $KhachHang;
        $this->LieuTrinh = $LieuTrinh;
        $this->LieuTrinhChiTiet = $LieuTrinhChiTiet;
        $this->NhanVien = $NhanVien;
        $this->DichVu = $DichVu;
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
        $KhachHang = $this->KhachHang->find(1);
        $LieuTrinh = $this->LieuTrinh->find(1);
        $LieuTrinhChiTiet = $this->LieuTrinhChiTiet->getLieuTrinhChiTietInnerJoin(1);
        $NhanVien = $this->NhanVien->find($LieuTrinh->idnhanvien);
        // dd($LieuTrinhChiTiet);

        return view("Admin.LieuTrinh.create",compact('KhachHang','LieuTrinh','LieuTrinhChiTiet','NhanVien'));
    }


    function searchDichVu(Request $request){
        $valueSearch = $this->DichVu->search($request->searchValue);

        return response()->json($valueSearch);
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
        //
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
