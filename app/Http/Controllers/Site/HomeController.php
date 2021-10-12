<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\NhanVien;
// use App\Repositories\NhanVien\NhanVienRepositoryInterface;
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
    public function __construct(CoSoRepository $Coso, DanhMucRepository $Danhmuc, DichVuRepository $Dichvu)
    {
        $this->Coso = $Coso;
        $this->Danhmuc = $Danhmuc;
        $this->Dichvu = $Dichvu;

        $listCoSo = $this->Coso->getAll();
        $listDanhMucDichVu = $this->getDichVuTheoDanhMuc();
        $this->data = array(
            'listCoSo' => $listCoSo
        );
    }

    public function index() {

        return view('Site.home', $this->data);
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

    public function getDichVuTheoDanhMuc() {
        $listDanhMuc = $this->Danhmuc->findDanhMucByIdLoai(Controller::LOAI_DANHMUC_DICHVU);
        // dd($listDanhMuc);
    }
}
