<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanPham;
use App\Repositories\DanhMuc\DanhMucRepository;
use App\Repositories\SanPham\SanPhamRepository;
use App\Repositories\SanPhamChiTiet\SanPhamChiTietRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SanPhamController extends Controller
{
    private $DanhMuc;
    private $SanPham;
    private $idloai = 1;

    public function __construct(DanhMucRepository $DanhMuc,
    SanPhamRepository $SanPham,
    SanPhamChiTietRepository $SanPhamChiTiet)
    {
        $this->DanhMuc = $DanhMuc;
        $this->SanPham = $SanPham;
        $this->SanPhamChiTiet = $SanPhamChiTiet;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  $this->SanPham->getAll();
        return view('Admin.SanPham.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = $this->DanhMuc->findDanhMucByIdLoai($this->idloai);
        return view('Admin.SanPham.create',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SanPham $request)
    {
        
        $img = $this->uploadSingle($request->file('img'));
        
        $data = [
            'iddanhmuc'=>$request->iddanhmuc,
            'name'=> $request->name,
            'slug'=>Str::slug($request->name),
            "img"=>$img,
            'mota'=>$request->mota,
            'noidung'=>$request->noidung,
            "trangthai"=>$request->trangthai
        ];

        $data= $this->SanPham->create($data);

        return redirect('/quantri/sanpham/detail/'.$data->id.'')->with('success','Thêm thành công');
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
        $data  = $this->SanPham->find($id);
        $cate  = $this->DanhMuc->getAll();
        return view("Admin.SanPham.edit",compact('data','cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SanPham $request, $id)
    {
        $data = [
            'iddanhmuc'=>$request->iddanhmuc,
            'name'=> $request->name,
            'slug'=>Str::slug($request->name),
            'mota'=>$request->mota,
            'noidung'=>$request->noidung,
            "trangthai"=>$request->trangthai,
        ];

        if($request->img !== null){
            $img = $this->uploadSingle($request->file('img'));
            $data['img'] = $img;
        }

        $this->SanPham->update($id,$data);
        return redirect('quantri/sanpham')->with('success','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hasChiTiet = $this->SanPhamChiTiet->getSanPhamChiTietByIdSanPham($id);
        if(count($hasChiTiet)>0){
            return redirect('quantri/sanpham')->withErrors('Xoá không thành công, sản phẩm tồn tại sản phẩm chi tiết!');
        }else{
             $this->SanPham->delete($id);
             return redirect('quantri/sanpham')->with('success','Xoá thành công!');
        }
    }
}
