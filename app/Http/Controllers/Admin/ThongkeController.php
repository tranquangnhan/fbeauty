<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class ThongkeController extends Controller
{
    private $data = array();

    public function index()
    {
        $this->data['namePage']            = 'Thống kê';
        $this->data['breadcrumbArray']     = [
            ['link' => '/quantri', 'name' => 'Thống kê'],
            ['link' => '', 'name' => 'Danh sách'],
        ];
        $toDay = Carbon::today();
        $thoigian = $this->getThoiGianDauVaCuoiCuaNgay($toDay->toDateString());
        $soDatLichToday = 0;
        $soDonDatHangToday = 0;
        $tongDoanhThuHoaDonToday = 0;
        $tongDoanhThuDathangToday = 0;


        return view("Admin.Thongke.index", $this->data);
    }

    public function getThoiGianDauVaCuoiCuaNgay($ngay) {
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
