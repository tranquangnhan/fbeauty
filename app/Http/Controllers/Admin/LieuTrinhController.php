<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LieuTrinhChiTiet;
use App\Repositories\DichVu\DichVuRepository;
use App\Repositories\HoaDon\HoaDonRepository;
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
        DichVuRepository $DichVu,
        HoaDonRepository $HoaDon,
    )
    {
        $this->KhachHang = $KhachHang;
        $this->LieuTrinh = $LieuTrinh;
        $this->LieuTrinhChiTiet = $LieuTrinhChiTiet;
        $this->NhanVien = $NhanVien;
        $this->DichVu = $DichVu;
        $this->HoaDon = $HoaDon;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
    //    $data=  $this->LieuTrinhChiTiet->selectDate();
    //    dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }


    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LieuTrinhChiTiet $request)
    {
      
        $trangThai = ($request->trangthai === "on") ? 1 : 0;
        $imgkhachhang = $this->uploadSingle($request->imgkhachhang);
        $data = [
            'idlieutrinh' =>$request->id,
            'iddichvu' => $request->iddichvu,
            'idnhanvien' => $request->idnhanvien,
            'mota' => $request->mota,
            'ngay' => strtotime($request->ngay),
            'trangthai' => $trangThai,
            'imgkhachhang' =>$imgkhachhang,
        ];

        $res = $this->LieuTrinhChiTiet->create($data);
        if($res){
            return redirect('quantri/lieutrinh/'.$request->id.'/edit');
        }else{
            // print_r($validate);
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
   
        $LieuTrinhChiTiet = $this->LieuTrinhChiTiet->getLieuTrinhChiTietInnerJoin($id);
        $NhanVien =  $this->NhanVien->getAll();
        $DichVu =  $this->DichVu->getAll();
        $findHoaDon = $this->HoaDon->findHoaDonByIdLieuTrinh($id);
        // dd($findHoaDon);
        $hasHoaDon = count($findHoaDon);
        view()->share('id',$id);

        return view("Admin.LieuTrinh.edit",compact('LieuTrinhChiTiet','NhanVien','DichVu','hasHoaDon'));
    }


    public function editNameDv(Request $request){
       
        switch ($request->name) {
            case 'mota':
                $data= [
                    'mota'=> $request->value
                ];
                $res = $this->LieuTrinhChiTiet->update($request->pk,$data);
                break;
            case 'date':
                // validate
                $messsages = array(
                    'value.required'=>'Bắt buộc phải nhập ngày',
                    'value.date'=>'Bạn nhập không đúng định dạng ngày',
                    'value.after'=>'Ngày nhập phải lớn hơn ngày hiện tại',
                );

                $request->validate([
                    'value' => 'required|date|after:today'
                ], $messsages);
              
                $data= [
                    'ngay'=> strtotime($request->value)
                ];

                $res = $this->LieuTrinhChiTiet->update($request->pk,$data);
                break;
            default:
                # code...
                break;
        }

        return response()->json($res);
    }

    function editImgLieuTrinh(Request $request){
  
        $img = $this->uploadSingle($request->file('file'));
        
        $data= [
            'imgkhachhang'=> $img
        ];

        $res = $this->LieuTrinhChiTiet->update($request->idlieutrinhgan,$data);

        return response()->json($res);
    }


    // public function editTrangThaiLieuTrinh(Request $request){
    //     $id =  $request->id;
    //     $res =  $this->LieuTrinhChiTiet->delete($id);
    //     return  $res;
    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $item = $this->LieuTrinhChiTiet->find($id);
        $data = [
            'trangthai' => ($item->trangthai === 1) ? 0 : 1 
        ]; 
        $res = $this->LieuTrinhChiTiet->update($id,$data);
        if($res){
            return  redirect()->back();
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
        $res =  $this->LieuTrinhChiTiet->delete($id);
      
        if($res){
            return  redirect()->back();
        }
    }
}
