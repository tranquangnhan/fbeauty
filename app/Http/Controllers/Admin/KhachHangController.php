<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KhachHang;
use App\Http\Requests\LieuTrinh;
use App\Repositories\KhachHang\KhachHangRepository;
use App\Repositories\LieuTrinh\LieuTrinhRepository;
use App\Repositories\LieuTrinhChiTiet\LieuTrinhChiTietRepository;
use App\Repositories\NhanVien\NhanVienRepository;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{

    private $KhachHang;
    private $LieuTrinh;
    public function __construct(
        KhachHangRepository $KhachHang,
        LieuTrinhRepository $LieuTrinh,
        NhanVienRepository $NhanVien,
        LieuTrinhChiTietRepository $LieuTrinhChiTiet
        )
    {
        $this->KhachHang = $KhachHang;
        $this->LieuTrinh = $LieuTrinh;
        $this->NhanVien = $NhanVien;
        $this->LieuTrinhChiTiet = $LieuTrinhChiTiet;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->KhachHang->getAll();
        return view("Admin.khachhang.index", ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.khachhang.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(KhachHang $request)
    {
            $img = $this->uploadSingle($request->file('urlHinh'));
            if($img == null){
                $img = 'defaul.jpg';
            }
            $KhachHang = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'sdt' => $request->sdt,
                'img' => $img,
                'active' => $request->active
            ];
            $this->KhachHang->create($KhachHang);
            return redirect('quantri/khachhang')->with('thanhcong', 'Thêm nhân viên thành công');
        }


    public function CheckEmailTonTai($email)
    {
        if ($this->KhachHang->CheckEmail($email) == false) {
            echo "<span class='badge badge-danger'> Email đã được dùng </span>";
        }

    }

    public function CheckSdtTonTai($sdt)
    {
        if ($this->KhachHang->CheckSdt($sdt) == false) {
            echo "<span class='badge badge-danger'> Số điện thoại đã được dùng </span>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * Tải ảnh khách hàng lên
     * 1 show
     * 2 up
     */
    public function show($id)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $KhachHang = $this->KhachHang->find($id);
        return view("Admin.khachhang.edit", ['KhachHang' => $KhachHang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $password = $request->password;
        $passnew = "";
        if ($password == null) {
            $passnew = $request->passcu;
        } else {
            $passnew = bcrypt($password);
        }
        $KhachHang = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $passnew,
            'sdt' => $request->sdt,
            'active' => $request->active,
        ];
        if($request->urlHinh !== null){
            $img = $this->uploadSingle($request->file('urlHinh'));
            $KhachHang['img'] = $img;
        }

        $this->KhachHang->update($id, $KhachHang);
        return redirect('quantri/khachhang')->with('thanhcong', 'Sửa nhân viên thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->KhachHang->delete($id);

        return redirect('quantri/khachhang')->with('success', 'Xoá thành công');
    }


    public function detailKhachHang($id){
        $KhachHang = $this->KhachHang->find($id);
        $LieuTrinh =  $this->LieuTrinh->findLieuTrinhByIdKh($KhachHang->id);
        $NhanVien = $this->NhanVien->getAll();
        return view('Admin.KhachHang.detail',compact('KhachHang','LieuTrinh','NhanVien'));
    } 

    public function storeLieuTrinh(LieuTrinh $request){
        
        $data = [
            'idnhanvien' => $request->idnhanvien,
            'idkhachhang' => $request->id,
            'ngaybatdau' => strtotime($request->ngaybatdau),
            'dukienketthuc' => strtotime($request->dukienketthuc),
            'ghichu' => $request->ghichu,
            'trangthai' => 0,
        ];

        $res = $this->LieuTrinh->create($data);
        if($res){
           return redirect()->back();
        }else{
           return $this->handleError('Có lỗi khi thêm');
        }
    }

    public function delLieuTrinh($id){
      
        $hasLieuTrinhChiTiet =  $this->LieuTrinhChiTiet->findLieuTrinhChiTietByIdLieuTrinh($id);
     
        if(count($hasLieuTrinhChiTiet)>0){
            return $this->handleError('Không thể xoá vì đã tồn tại liệu trình chi tiết. Vui lòng xoá liệu trình chi tiết trước!');
         }else{
            $res = $this->LieuTrinh->delete($id);
            return redirect()->back();
         }
    }

}
