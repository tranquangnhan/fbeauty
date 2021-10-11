<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\CosoModel;
use App\Models\Admin\DichVuModel;
use App\Models\Admin\NhanVien;
use App\Repositories\NhanVien\NhanVienRepository;
use App\Repositories\Coso\CoSoRepository;
use App\Repositories\DanhMuc\DanhMucRepository;
use App\Repositories\DichVu\DichVuRepository;

class HomeController extends Controller
{
    private $data = array();
    private $Coso;
    private $Dichvu;
    private $Danhmuc;
    private $Nhanvien;
    /**
     * CosoController constructor.
     */
    public function __construct(CoSoRepository $Coso, NhanVienRepository $Nhanvien)
    {
        $this->Coso = $Coso;
        // $this->Dichvu = $Dichvu;
        // $this->Danhmuc = $Danhmuc;
        $this->Nhanvien = $Nhanvien;

        // $listDanhMuc = $this->Dichvu->getAll();
        // dd($listDanhMuc);
        // $listCoSo = $this->Coso->getAll();
        // $this->data = array(
        // 'listCoSo' => $listCoSo
        // );
    }

    public function index() {

        // return view('Site.home', $this->data);
    }

    public function getNhanVienByIdCoSo(Request $request, $id) {
        try {
            if ($request->ajax())
            {
                $id = (int)$id;
                if ($id > 0) {
                    $listNhanVien = $this->getNhanVienTam($id);
                }

                $response = Array(
                    'success' => true,
                    'listNhanVien' => $listNhanVien,
                    'idCoSo' => $id
                );
            }

            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'titleMess' => 'Đã xảy ra lỗi !',
                'textMess' => $e->getMessage()
            ]);
        }
    }

    public function getNhanVienTam($id) {
        return NhanVien::where('idcoso', $id)->get();
    }
}
