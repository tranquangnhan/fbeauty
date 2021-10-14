<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\DonHang;
use App\Http\Requests\KhachHang;
use App\Models\Admin\KhachHangModel;
use App\Repositories\DonHang\DonHangRepository;
use App\Repositories\KhachHang\KhachHangRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DonHangController extends Controller
{
    private $DonHang;
    private $KhachHang;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(DonHangRepository $DonHang , KhachHangRepository $KhachHang)
    {
        $this->DonHang = $DonHang;
        $this->KhachHang = $KhachHang;
    }
    public function index()
    {
        $data = $this->DonHang->getAll();
        return view('Admin.DonHang.index',compact('data'));
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
    public function store( $request)
    {
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
        //$khachhang = KhachHangModel::orderby('id','ASC')->get();

        $data  = $this->DonHang->find($id);
        $khachHang  = $this->KhachHang->find($data->idkhachhang);
        // $khachHang  = $this->KhachHang->find($data->idkhachhang);
        return view('Admin.DonHang.edit',compact('data','khachHang'));
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

        //$validated = $request->validated();

        $data = [
            'idgiamgia'=> $request->magiamgia,
            'tennguoinhan'=> $request->namenguoinhan,
            'diachikhachhang'=>$request->diachi,
            'sdtnguoinhan'=>$request->sodienthoai,
            'tongtientruocgiamgia'=>$request->tongtientruocgiamgia,
            'tongtiensaugiamgia'=>$request->tongtiensaugiamgia,
            'ghichucuakhachhang'=>$request->ghichukhachhang,
            'phuongthucthanhtoan'=>$request->phuongthucthanhtoan,
            'phuongthucgiaohang'=>$request->phuongthucgiaohang
        ];

        $this->DonHang->update($id,$data);

        return redirect('quantri/donhang')->with('success','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->DonHang->delete($id);
        // thiếu logic check xem có sản phẩm,bài viết, dịch vụ không

        return redirect('quantri/donhang')->with('success','Xoá thành công');
    }

    public function active ($id){



        DB::table('donhang')->where('id',$id)->update(['trangthai'=>1]);

        return Redirect::to('quantri/donhang');

        // $this->DonHang->active_donhang($id);
    }
    public function active_1 ($id){
        DB::table('donhang')->where('id',$id)->update(['trangthai'=>2]);
        return Redirect::to('quantri/donhang');
    }
    public function active_2 ($id){
        DB::table('donhang')->where('id',$id)->update(['trangthai'=>3]);
        return Redirect::to('quantri/donhang');
    }
    public function active_3 ($id){
        DB::table('donhang')->where('id',$id)->update(['trangthai'=>3]);
        return Redirect::to('quantri/donhang');
    }


}
