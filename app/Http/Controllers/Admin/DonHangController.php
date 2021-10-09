<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\DonHang;
use App\Repositories\DonHang\DonHangRepository;

class DonHangController extends Controller
{
    private $DonHang;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(DonHangRepository $DonHang)
    {
        $this->DonHang = $DonHang;
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
        $data  = $this->DonHang->find($id);
        return view('Admin.DonHang.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {

        $validated = $request->validated();

        $data = [
            'name'=> $request->name,
            'slug'=>Str::slug($request->name),
            'loai'=>$request->loai
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

        $this->DonHang->where('id',$id)->update(['trangthai'=>0]);
    }
    public function active_1 ($id){

        $this->DonHang->where('id',$id)->update(['trangthai'=>1]);
    }
    public function active_2 ($id){

        $this->DonHang->where('id',$id)->update(['trangthai'=>2]);
    }
    public function active_3 ($id){

        $this->DonHang->where('id',$id)->update(['trangthai'=>3]);
    }

}
