<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use App\Repositories\DatLich\DatLichRepository;
use App\Repositories\DonHang\DonHangRepository;
use App\Repositories\HoaDon\HoaDonRepository;
class ThongkeController extends Controller
{
    private $data = array();
    private $DonHang;
    private $khachHang;
    private $GiamGia;
    private $DonHangChiTiet;
    private $HoaDon;
    private $idCoSo;

    public function __construct(
        DonHangRepository $DonHang,
        DatLichRepository $DatLich,
        HoaDonRepository $HoaDon
    ){
        $this->DatLich = $DatLich;
        $this->DonHang = $DonHang;
        $this->HoaDon = $HoaDon;
    }

    public function index()
    {
        $this->data['namePage']            = 'Thống kê';
        $this->data['breadcrumbArray']     = [
            ['link' => '/quantri', 'name' => 'Thống kê'],
            ['link' => '', 'name' => 'Danh sách'],
        ];

        $toDay = Carbon::today();
        $yesterday = Carbon::now()->subDays(1);
        $this->getDuLieuDatLichFirst($toDay, $yesterday);
        $this->getDuLieuHoaDonFirst($toDay, $yesterday);
        $this->getDuLieuNumDonHangFirst($toDay, $yesterday);
        $this->getDuLieuDonHangHoanThanhFirst($toDay, $yesterday);
        $tongDoanhThuDathangToday = 0;

        return view("Admin.Thongke.index", $this->data);
    }

    public function getDuLieuDonHangHoanThanhFirst($toDay, $yesterday) {
        $this->data['doanhThuDonHangHoanThanhToday'] = $this->getDoanhThuDonHangHoanThanh($toDay, session('coso'));
        $this->data['doanhThuDonHangHoanThanhYesterday'] = $this->getDoanhThuDonHangHoanThanh($yesterday, session('coso'));
        if ($this->data['doanhThuDonHangHoanThanhToday'] > 0 && $this->data['doanhThuDonHangHoanThanhYesterday'] > 0) {
            $this->data['phanTramDoanhThuDonHangHoanThanh'] = ceil($this->data['doanhThuDonHangHoanThanhToday'] / $this->data['doanhThuDonHangHoanThanhYesterday'] * 100);
        } else {
            $this->data['phanTramDoanhThuDonHangHoanThanh'] = 0;
        }
    }

    public function getDuLieuDatLichFirst($toDay, $yesterday) {
        $this->data['soDatLichToday'] = $this->getSoDatLich($toDay, session('coso'));
        $this->data['soDatLichYesterday'] = $this->getSoDatLich($yesterday, session('coso'));
        if ($this->data['soDatLichToday'] > 0 && $this->data['soDatLichYesterday'] > 0) {
            $this->data['phanTramDatLich'] = ceil($this->data['soDatLichToday'] / $this->data['soDatLichYesterday'] * 100);
        } else {
            $this->data['phanTramDatLich'] = 0;
        }
    }

    public function getDuLieuHoaDonFirst($toDay, $yesterday) {
        $this->data['tongDoanhThuHoaDonToday'] = $this->getDoanhThuHoaDon($toDay, session('coso'));
        $this->data['tongDoanhThuHoaDonYesterday'] = $this->getDoanhThuHoaDon($yesterday, session('coso'));
        if ($this->data['tongDoanhThuHoaDonToday'] > 0 && $this->data['tongDoanhThuHoaDonYesterday'] > 0) {
            $this->data['phanTramDoanhThu'] = ceil($this->data['tongDoanhThuHoaDonToday'] / $this->data['tongDoanhThuHoaDonYesterday'] * 100);
        } else {
            $this->data['phanTramDoanhThu'] = 0;
        }
    }

    public function getDuLieuNumDonHangFirst($toDay, $yesterday) {
        $this->data['numDonHangToday'] = $this->getNumDonHang($toDay);
        $this->data['numDonHangYesterday'] = $this->getNumDonHang($yesterday);
        if ($this->data['numDonHangToday'] > 0 && $this->data['numDonHangYesterday'] > 0) {
            $this->data['phanTramNumDonHang'] = ceil($this->data['numDonHangToday'] / $this->data['numDonHangYesterday'] * 100);
        } else {
            $this->data['phanTramNumDonHang'] = 0;
        }
    }

    public function getNumDonHang($ngay) {
        $thoigian = $this->getThoiGianDauVaCuoiCuaNgay($ngay->toDateString());
        $numDonHang = $this->DonHang->getNumDonHang($thoigian['dauNgay'], $thoigian['cuoiNgay']);

        return $numDonHang;
    }

    public function getDoanhThuDonHangHoanThanh($ngay) {
        $thoigian = $this->getThoiGianDauVaCuoiCuaNgay($ngay->toDateString());
        $numDonHang = $this->DonHang->getDoanhThuDonHangHoanThanh($thoigian['dauNgay'], $thoigian['cuoiNgay']);

        return $numDonHang;
    }

    public function getDoanhThuHoaDon($ngay, $idCoSo) {
        $thoigian = $this->getThoiGianDauVaCuoiCuaNgay($ngay->toDateString());
        $tongDoanhThu = $this->HoaDon->getTongDoanhThuHoaDon($thoigian['dauNgay'], $thoigian['cuoiNgay'], $idCoSo);

        return $tongDoanhThu;
    }

    public function getSoDatLich($ngay, $idCoSo) {
        $thoigian = $this->getThoiGianTimestampDauVaCuoiCuaNgay($ngay->toDateString());
        $soDatLich = $this->DatLich->getNumDatLichByTime($thoigian['dauNgayTimestamp'], $thoigian['cuoiNgayTimestamp'], $idCoSo);
        return $soDatLich;
    }

    public function getThoiGianDauVaCuoiCuaNgay($ngay) {
        $dauNgay = $ngay . ' 00:00:00';
        $cuoiNgay = $ngay . ' 23:59:59';

        return array (
            'dauNgay' => $dauNgay,
            'cuoiNgay' => $cuoiNgay
        );
    }

    public function getThoiGianTimestampDauVaCuoiCuaNgay($ngay) {
        $dauNgay = $ngay . ' 00:00:00';
        $cuoiNgay = $ngay . ' 23:59:59';
        $dauNgayTimestamp = Carbon::parse($dauNgay)->timestamp;

        $cuoiNgayTimestamp = Carbon::parse($cuoiNgay)->timestamp;
        // $taoFormatCarbon = Carbon::createFromTimestamp($dauNgayTT);
        return array (
            'dauNgayTimestamp' => $dauNgayTimestamp,
            'cuoiNgayTimestamp' => $cuoiNgayTimestamp
        );
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
