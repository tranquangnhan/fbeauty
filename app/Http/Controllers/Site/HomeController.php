<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\SanPham\SanPhamRepository;
use App\Repositories\Blog\BlogRepository;
use Illuminate\Http\Request;

use App\Models\Admin\NhanVien;
// use App\Repositories\NhanVien\NhanVienRepositoryInterface;
use App\Repositories\Coso\CoSoRepository;
use App\Repositories\DanhMuc\DanhMucRepository;
use App\Repositories\DichVu\DichVuRepository;
use App\Repositories\NhanVien\NhanVienRepository;

class HomeController extends Controller
{
        private $SanPham;
        private $Blog;
        private $data = array();
        private $Coso;
        private $Dichvu;
        private $Danhmuc;
        private $NhanVien;

        public function __construct(NhanVienRepository $NhanVien,CoSoRepository $Coso,BlogRepository $Blog,SanPhamRepository $SanPham, DanhMucRepository $Danhmuc, DichVuRepository $Dichvu)
        {
            $this->Coso = $Coso;
            $this->Danhmuc = $Danhmuc;
            $this->Dichvu = $Dichvu;
            $this->NhanVien = $NhanVien;
            $listCoSo = $this->Coso->getAll();
            $listDanhMucDichVu = $this->getDichVuTheoDanhMuc();
            $this->SanPham = $SanPham;
            $this->Blog = $Blog;
            $this->data = array(
                'listCoSo' => $listCoSo,
                'listDanhMucDichVu' => $listDanhMucDichVu
            );
        }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $data = $this->SanPham->getAll();
            $listCoSo = $this->Coso->getAll();
            $Blog = $this->Blog->getBlog1();
            $Blog2 = $this->Blog->getBlog2();
            $listDanhMucDichVu = $this->getDichVuTheoDanhMuc();
            return view("Site.home", ['data' => $data,'Blog' => $Blog,'Blog2' => $Blog2,'listCoSo' => $listCoSo,'listDanhMucDichVu' => $listDanhMucDichVu]);
        }
  
    /**
     * CosoController constructor.
     */
   

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
        return  $this->NhanVien->getNhanVienByIdCoSo( $id);
    }

    public function getDichVuTheoDanhMuc() {
        $listDanhMuc = $this->Danhmuc->findDanhMucByIdLoai(Controller::LOAI_DANHMUC_DICHVU);

        foreach ($listDanhMuc as $row) {
            $dichVu = $this->Dichvu->getDichVuTheoDanhMuc($row->id);
            $row->listDichVu = $dichVu;
        }

        return $listDanhMuc;
    }
}
