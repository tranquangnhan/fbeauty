<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\DanhMuc\DanhMucRepository;
use App\Repositories\SanPham\SanPhamRepository;
use App\Repositories\SanPhamChiTiet\SanPhamChiTietRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SanPhamController extends Controller
{
    private $DanhMuc;
    private $SanPham;
    private $SanPhamChiTiet;

    public function __construct(DanhMucRepository $DanhMuc,SanPhamRepository $SanPham,SanPhamChiTietRepository $SanPhamChiTiet)
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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = $this->DanhMuc->findDanhMucByIdLoai(1);
        return view('Admin.SanPham.create',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $img = $this->uploadSingle($request->file('img'));
        
        $data = [
            'iddanhmuc'=>$request->iddanhmuc,
            'name'=> $request->name,
            'slug'=>Str::slug($request->name),
            'loai'=>$request->loai,
            'mota'=>$request->mota,
            'noidung'=>$request->noidung,
            "trangthai"=>$request->trangthai,
            "img"=>$img
        ];

        $data= $this->SanPham->create($data);

        return redirect('/quantri/sanpham/detail/'.$data->id.'')->with('success','Thêm thành công');
    }

    public function createDetailProduct(){

        return view('Admin.SanPham.createDetail');
    }


    public function postDetailProduct(Request $request){
        $idsanpham = $request->route('id');
        $ml = $request->ml;
        $tonkho = $request->tonkho;
        $dongia = $request->dongia;


        for ($i=0; $i < count($ml); $i++) { 
            $data = [
                'idsanpham'=>$idsanpham,
                'ml'=>  $ml[$i],
                'tonkho'=>$tonkho[$i],
                'dongia'=>$dongia[$i]
            ];
            $this->SanPhamChiTiet->create($data);
        }
        
        return redirect('quantri/sanpham')->with('success','Thêm thành công');
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
