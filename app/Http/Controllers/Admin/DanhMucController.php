<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\DanhMuc\DanhMucRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\DanhMuc;
use App\Http\Requests\DanhMucEdit;

class DanhMucController extends Controller
{
    private $DanhMuc;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(DanhMucRepository $DanhMuc)
    {
        $this->DanhMuc = $DanhMuc;
    }
    public function index()
    {
        $data = $this->DanhMuc->getAll();
        return view('Admin.DanhMuc.index',compact('data'));
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
    public function store(DanhMuc $request)
    {

        $img =  $this->uploadSingle('public',$request->img);
        $data = [
            'name'=> $request->name,
            'img'=> $img,
            'slug'=>Str::slug($request->name),
            'loai'=>$request->loai
        ];

        $this->DanhMuc->create($data);
        return redirect('quantri/danhmuc')->with('success','Thêm thành công');
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
        $data  = $this->DanhMuc->find($id);
        return view('Admin.DanhMuc.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DanhMucEdit $request, $id)
    {
        $data = [
            'name'=> $request->name,
            'slug'=>Str::slug($request->name),
            'loai'=>$request->loai
        ];

        if($request->img){
            $img =  $this->uploadSingle('public',$request->img);
            $data['img'] = $img;
        }

        $this->DanhMuc->update($id,$data);
        
        return redirect('quantri/danhmuc')->with('success','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->DanhMuc->delete($id);
        // thiếu logic check xem có sản phẩm,bài viết, dịch vụ không
        
        return redirect('quantri/danhmuc')->with('success','Xoá thành công');
    }
}
