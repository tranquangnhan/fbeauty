<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NhanVien;
use App\Repositories\CoSo\CoSoRepository;
use App\Repositories\DichVu\DichVuRepository;
use App\Repositories\NhanVien\NhanVienRepository;
use Illuminate\Http\Request;
class NhanVienController extends Controller
{
    private $nhanvien;
    private $coso;
    private $dichvu;

    public function __construct(NhanVienRepository $nhanvien, CoSoRepository $coso, DichVuRepository $dichvu)
    {
        $this->nhanvien = $nhanvien;
        $this->coso = $coso;
        $this->dichvu = $dichvu;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->nhanvien->getNhanVien();

        return view("Admin.NhanVien.index", ['data' => $data]);
    }

    public function AllImgKH() {
        $data = $this->nhanvien->getNhanVien();
        return view("Admin.NhanVien.allimg", ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coso = $this->coso->getAll();
        return view("Admin.NhanVien.create", ['coso' => $coso]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(NhanVien $request)
    {
        
        $coSo = session()->get('coso');

        $img = $request->file('urlHinh');
        $extension = $img->getClientOriginalExtension();
        $CheckEmail = $this->nhanvien->CheckEmail($request->email);
        $CheckSdt = $this->nhanvien->CheckSdt($request->sdt);
        $imgTrue = true;
        $emailTrue = true;
        $sdtTrue = true;
        if ($this->checkImg($extension, $img) == true) {
            $imgTrue = true;
        } else {
            $imgTrue = false;
        }

        if ($CheckEmail == true) {
            $emailTrue = true;
        } else {
            $emailTrue = false;
        }

        if ($CheckSdt == true) {
            $sdtTrue = true;
        } else {
            $sdtTrue = false;
        }

        if ($imgTrue == true and $emailTrue == true and $sdtTrue == true) {
            $nhanvien = [
                'name' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'sdt' => $request->sdt,
                'gioitinh' => $request->gioitinh,
                'avatar' => $_FILES["urlHinh"]["name"],
                'idcoso' => $coSo,
                'role' => $request->role,
                'active' => $request->active,
                'namsinh' => $request->namsinh,
                'trangthai' => $request->trangthai
            ];
            $this->nhanvien->create($nhanvien);
            return redirect('quantri/nhanvien')->with('thanhcong', 'Thêm nhân viên thành công');
        } else {
            return redirect('quantri/nhanvien')->with('thatbai', 'Thêm nhân viên thất bại');

        }


    }

    public function CheckEmailTonTai($email)
    {
        if ($this->nhanvien->CheckEmail($email) == false) {
            echo "<span class='badge badge-danger'> Email đã được dùng </span>";
        }

    }

    public function CheckSdtTonTai($sdt)
    {
        if ($this->nhanvien->CheckSdt($sdt) == false) {
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
     * 3 xóa
     */
    public function show($id)
    {
        $nhanvien = $this->nhanvien->find($id);
        return view("Admin.NhanVien.ImgKhachHang", ['nhanvien' => $nhanvien]);
    }

    public function upImgKhachHang(Request $request, $id)
    {
        if ($request->file('photos')!=""){
        $nv = $this->nhanvien->find($id);
        $jsonimg = json_decode($nv->img);
        if (is_array($jsonimg)) {
            $dataImg = $this->uploadMultipleImg($this::PATH_UPLOADS_KHACHHANG,$request->file('photos'));
            $mergearray = array_merge($dataImg, $jsonimg);
            $nhanvien = [
                'img' => $mergearray
            ];
            $this->nhanvien->update($id, $nhanvien);
        } else {
            $dataImg = $this->uploadMultipleImg($this::PATH_UPLOADS_KHACHHANG,$request->file('photos'));
            $nhanvien = [
                'img' => $dataImg
            ];
            $this->nhanvien->update($id, $nhanvien);
        }

        $dataNV = $this->nhanvien->find($id);
        return redirect(route("nhanvien.show", $id))->with('thanhcong', 'Tải ảnh lên thành công');
        }
        else{
            return redirect(route("nhanvien.show", $id))->with('thatbai', 'bạn chưa tải ảnh lên.');
        }
    }

    public function XoaImgKH($id, $idImg)
    {
        $nv = $this->nhanvien->find($id);
        $jsonimg = json_decode($nv->img);
        if (is_file('uploads/khachhang/' . $jsonimg[$idImg])) {
            unlink('uploads/khachhang/' . $jsonimg[$idImg]);
        }
        if (count($jsonimg) == 1) {
            $jsonimg = "";
        } else {
            array_splice($jsonimg, $idImg, 1);
        }
        $nhanvien = [
            'img' => $jsonimg
        ];
        $this->nhanvien->update($id, $nhanvien);
        return redirect(route("nhanvien.show", $id))->with('thanhcong', 'Xóa ảnh thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coso = $this->coso->getAll();
        $nhanvien = $this->nhanvien->find($id);
        return view("Admin.NhanVien.edit", ['coso' => $coso, 'nhanvien' => $nhanvien]);
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
        $coSo = session()->get('coso');

        $img = $request->file('urlHinh');
        $password = $request->password;
        $newpass = "";
        $picture = "";
        $newpicture = "";
        $imgTrue = true;
        if ($password == null) {
            $newpass = $request->oldpassword;
        } else {
            $newpass = bcrypt($password);
        }

        if ($img == null) {
            $newpicture = $request->oldImg;
        } else {
            $picture = $img;
            $extension = $picture->getClientOriginalExtension();
            $newpicture = $picture->getClientOriginalName();
            if ($this->checkImg($extension, $picture) == true) {
                $imgTrue = true;
            } else {
                $imgTrue = false;
            }
        }

        if ($imgTrue == true) {
            $nhanvien = [
                'name' => $request->username,
                'password' => $newpass,
                'gioitinh' => $request->gioitinh,
                'avatar' => $newpicture,
                'idcoso' => $coSo,
                'role' => $request->role,
                'active' => ($request->active) ? 1 : 0,
                'namsinh' => $request->namsinh,
                'trangthai' => ($request->trangthai) ? 1 : 0
            ];
            $this->nhanvien->update($id, $nhanvien);
            return redirect('quantri/nhanvien')->with('thanhcong', 'Sửa nhân viên thành công');
        } else {
            return redirect('quantri/nhanvien')->with('thatbai', 'Avatar không hợp lệ');
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
