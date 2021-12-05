<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner;
use App\Http\Requests\BannerEdit;
use App\Repositories\Banner\BannerRepository;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    private $Banner;
    private $data=array();
    public function __construct(BannerRepository $Banner)
    {
        $this->Banner=$Banner;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data["banner"]=$this->Banner->getAll();
        return view("Admin.Banner.index", $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Banner.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Banner $request)
    {
        $img = $request->file('urlHinh');
        $extension = $img->getClientOriginalExtension();
        if ($this->checkImgBanner($extension, $img) == true) {
            $mang=[
                'tieude'=>$request->tieude,
                'noidung'=>$request->noidung,
                'img'=>$_FILES["urlHinh"]["name"],
                'AnHien'=>$request->anhien,
            ];
            $this->Banner->create($mang);
            return redirect(route("banner.index"))->with('thanhcong', 'Thêm banner thành công');
        } else {
            return redirect(route("banner.create"))->with('thatbai', 'Ảnh không đúng định dạng');
        }
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
        $this->data['banner']=$this->Banner->find($id);
        return view("Admin.Banner.edit", $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerEdit $request, $id)
    {
        $img = $request->file('urlImg');
        if ($img!=null){
            $extension = $img->getClientOriginalExtension();
            if ($this->checkImgBanner($extension, $img) == true) {
                $mang=[
                    'tieude'=>$request->tieude,
                    'noidung'=>$request->noidung,
                    'img'=>$_FILES["urlImg"]["name"],
                    'AnHien'=>$request->anhien,
                ];
                $this->Banner->update($id,$mang);
                return redirect(route("banner.index"))->with('thanhcong', 'Cập nhật banner thành công');
            } else {
                return redirect(route("banner.edit", $id))->with('thatbai', 'Ảnh không đúng định dạng');
            }
        }
        else{
            $mang=[
                'tieude'=>$request->tieude,
                'noidung'=>$request->noidung,
                'AnHien'=>$request->anhien,
            ];
            $this->Banner->update($id,$mang);
            return redirect(route("banner.index"))->with('thanhcong', 'Cập nhật thông tin thành công');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=$this->Banner->delete($id);
        if ($delete){
            return 0;
        }else{
            return 1;
        }
    }
}
