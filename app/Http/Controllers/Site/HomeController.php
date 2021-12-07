<?php

namespace App\Http\Controllers\Site;

use App\Events\SendDatLich;
use App\Http\Controllers\Controller;
use App\Http\Controllers\freeSMSController;
use App\Http\Requests\ChangeProfile;
use App\Http\Requests\LienHe;
use App\Models\Admin\DatLichModel;
use App\Models\Admin\KhachHangModel;
use App\Models\Admin\LieuTrinhChiTietModel;
use App\Repositories\Blog\BlogRepository;
use App\Repositories\CoSo\CoSoRepository;
use App\Repositories\DanhMuc\DanhMucRepository;
use App\Repositories\DatLich\DatLichRepository;
use App\Repositories\DichVu\DichVuRepository;
use App\Repositories\DonHang\DonHangRepository;
use App\Repositories\HoaDon\HoaDonRepository;
use App\Repositories\HoaDonChiTiet\HoaDonChiTietRepository;
use App\Repositories\KhachHang\KhachHangRepository;
use App\Repositories\Lich\LichRepository;
use App\Repositories\LieuTrinh\LieuTrinhRepository;
use App\Repositories\NhanVien\NhanVienRepository;
use App\Repositories\SanPham\SanPhamRepository;
use App\Repositories\LienHe\LienHeRepository;
use App\Repositories\LieuTrinhChiTiet\LieuTrinhChiTietRepository;
use App\Repositories\SanPhamChiTiet\SanPhamChiTietRepository;
use App\Repositories\YeuThich\YeuThichRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    private $data = array();
    private $Coso;
    private $Dichvu;
    private $DanhMuc;
    private $NhanVien;
    private $DatLich;
    private $Lich;
    private $KhachHang;
    private $SanPham;
    private $limitTimeNum = 10;
    private $freeSMSController;
    private $SanPhamChiTiet;
    private $LienHe;
    private $LieuTrinhChiTiet;
    private $HoaDon;
    private $HoaDonChiTiet;
    private $Blog;
    private $DonHang;
    private $LieuTrinh;
    private $YeuThich;

    /**
     * CosoController constructor.
     */
    public function __construct(
        NhanVienRepository $NhanVien,
        CoSoRepository $Coso,
        DanhMucRepository $DanhMuc,
        DichVuRepository $Dichvu,
        LichRepository $Lich,
        DatLichRepository $DatLich,
        KhachHangRepository $KhachHang,
        BlogRepository $Blog,
        SanPhamRepository $SanPham,
        SanPhamChiTietRepository $SanPhamChiTiet,
        LieuTrinhRepository $LieuTrinh,
        LienHeRepository $LienHe,
        LieuTrinhChiTietRepository $LieuTrinhChiTiet,
        HoaDonRepository $HoaDon,
        HoaDonChiTietRepository $HoaDonChiTiet,
        DonHangRepository $DonHang,
        YeuThichRepository $YeuThich
    )
    {
        $this->freeSMSController = new freeSMSController;
        $this->Coso = $Coso;
        $this->DanhMuc = $DanhMuc;
        $this->Dichvu = $Dichvu;
        $this->NhanVien = $NhanVien;
        $this->Lich = $Lich;
        $this->DatLich = $DatLich;
        $this->KhachHang = $KhachHang;
        $this->Blog = $Blog;
        $this->SanPham = $SanPham;
        $this->SanPhamChiTiet = $SanPhamChiTiet;
        $this->LieuTrinh = $LieuTrinh;
        $this->LienHe = $LienHe;
        $this->LieuTrinhChiTiet = $LieuTrinhChiTiet;
        $danhmuc = $this->DanhMuc->getdanhmucshow();
        $listCoSo = $this->Coso->getAll();
        $listDanhMucDichVu = $this->getDichVuTheoDanhMuc();
        $this->HoaDon = $HoaDon;
        $this->HoaDonChiTiet = $HoaDonChiTiet;
        $this->DonHang=$DonHang;
        $this->YeuThich=$YeuThich;
        $this->data = array(
            'danhmuc' => $danhmuc,
            'listCoSo' => $listCoSo,
            'listDanhMucDichVu' => $listDanhMucDichVu,
            'pathActive' => '',
        );
    }

    public function index()
    {
        $sanPham = $this->SanPham->getAll();
        $blog = $this->Blog->getBlog1();
        $getBlog2 = $this->Blog->getBlog2();
        $blog3 = $this->Blog->getLastWeek1();
        $blog4 = $this->Blog->getLastWeek2();
        $spkhac = $this->SanPham->getSanPhamHome();
        $this->getDanhMucVaDichVuHome();

        $this->data['sanPham'] = $sanPham;
        $this->data['blog'] = $blog;
        $this->data['getBlog2'] = $getBlog2;
        $this->data['blog3'] = $blog3;
        $this->data['blog4'] = $blog4;
        $this->data['pathActive'] = 'trang-chu';
        $this->data['spkhac'] = $spkhac;

        return view("Site.pages.home", $this->data);
    }

    public function viewSanPham()
    {
        $sanpham = $this->SanPham->getsanpham();

        $this->data['sanpham'] = $sanpham;
        $this->data['pathActive'] = 'san-pham';
        $this->data['namePage'] = 'Sản phẩm';
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'Sản phẩm'],
        ];
        $this->data["danhmucsp"] = $this->DanhMuc->findDanhMucByIdLoai(self::LOAI_DANHMUC_SANPHAM);
        $this->data["danhmucth"] = $this->DanhMuc->findDanhMucByIdLoai(self::LOAI_DANHMUC_THUONG_HIEU);
        return view("Site.pages.sanpham", $this->data);
    }

    public function getSanPham($soluong)
    {
        $sanpham = $this->SanPham->getSanPhamJoinDanhMuc($soluong);
        $sl = $this->SanPham->DemSanPham();
        $data = ['sanpham' => $sanpham];
        return $data;
    }

    public function viewSanPhamChiTiet($slug)
    {
        error_reporting(0);

        $this->data['pathActive'] = 'san-pham';
        $this->data['namePage'] = 'Sản phẩm chi tiết';
        $this->data['breadcrumbArray'] = [
            ['link' => '/san-pham', 'name' => 'Sản phẩm'],
            ['link' => '', 'name' => 'Tên sản phẩm'],
        ];
        $sanpham = $this->SanPham->getSanPhamJoinDanhMucSlug($slug);
        $splienquan = $this->SanPham->GetSanPhamLienQuan($sanpham[0]->iddanhmuc);
        $spkhac = $this->SanPham->GetSanPhamLienQuanKhacIDDM($sanpham[0]->iddanhmuc);
        $this->data['splienquan'] = $splienquan;
        $this->data['spkhac'] = $spkhac;
        $checkspct = $this->SanPhamChiTiet->CheckSanPhamChiTietByID($sanpham[0]->id);
        if ($checkspct == false) {
            $sanphamchitiet = $this->SanPhamChiTiet->getSanPhamChiTietByID($sanpham[0]->id);
            $sanphamchitietlimit = $this->SanPhamChiTiet->getSanPhamChiTietByIDLimit($sanpham[0]->id);
            return view("Site.pages.sanpham-chitiet", $this->data, ['sanpham' => $sanpham, 'sanphamchitiet' => $sanphamchitiet, 'sanphamchitietlimit' => $sanphamchitietlimit]);
        } else {
            return view("Site.pages.sanpham-chitiet", $this->data, ['sanpham' => $sanpham, 'sanphamchitietlimit' => null]);
        }
    }


    public function viewGioHang()
    {
        $this->data['pathActive'] = 'san-pham';
        $this->data['namePage'] = 'Giỏ hàng';
        $this->data['breadcrumbArray'] = [
            ['link' => '/san-pham', 'name' => 'Sản phẩm'],
            ['link' => '', 'name' => 'Giỏ hàng'],
        ];

        return view("Site.pages.giohang", $this->data);
    }

    public function viewThanhToan()
    {
        $this->data['pathActive'] = 'san-pham';
        $this->data['namePage'] = 'Thanh toán';
        $this->data['breadcrumbArray'] = [
            ['link' => '/san-pham', 'name' => 'Sản phẩm'],
            ['link' => '/gio-hang', 'name' => 'Giỏ hàng'],
            ['link' => '', 'name' => 'Thanh toán'],
        ];

        return view("Site.pages.thanhtoan", $this->data);
    }

    public function viewBaiViet()
    {
        $blog = $this->Blog->getBlog1();
        $blognewtt = $this->Blog->getBlognewtt();
        $xuhuong = $this->Blog->getblogbyxuhuong();
        $luotxem = $this->Blog->getblogbyView();
        $listdanhmuc = $this->DanhMuc->getAll();
        $listdanhmuc2 = $this->DanhMuc->getall2danhmuc();
        $this->getDanhMucVaBlog();

        foreach ($listdanhmuc as $dm) {
            $skip = 0;
            $take = 6;
            $blogbyid = $this->Blog->getBlogByIdDanhmuc($dm->id, $skip, $take);
            $dm['blogbyid'] = $blogbyid;
        }
        foreach ($listdanhmuc2 as $dm) {
            $skip_0 = 0;
            $take_3 = 3;
            $blogbyid2 = $this->Blog->getBlogByIdDanhmuc($dm->id, $skip_0, $take_3);
            $dm['blogbyid2'] = $blogbyid2;
        }

        $danhmuc = $this->DanhMuc->getAllDanhMuc();
        $getBlog2 = $this->Blog->getBlog2();
        $blog3 = $this->Blog->getLastWeek1();
        $blog4 = $this->Blog->getLastWeek2();
        $blognew = $this->Blog->getBlognew();

        $this->data['blog'] = $blog;
        $this->data['blog3'] = $blog3;
        $this->data['blog4'] = $blog4;
        $this->data['blognew'] = $blognew;
        $this->data['danhmuc'] = $danhmuc;
        $this->data['getBlog2'] = $getBlog2;
        $this->data['listdanhmuc'] = $listdanhmuc;
        $this->data['listdanhmuc2'] = $listdanhmuc2;
        $this->data['luotxem'] = $luotxem;
        $this->data['xuhuong'] = $xuhuong;
        $this->data['blognewtt'] = $blognewtt;

        $this->data['pathActive'] = 'bai-viet';
        $this->data['namePage'] = 'Bài viết';
        $this->data['breadcrumbArray'] = [
            ['link' => '/bai-viet', 'name' => 'Bài viết'],
        ];
        return view("Site.pages.baiviet", $this->data);
    }

    public function viewBaiVietChiTiet($slug)
    {
        $this->Blog->updateView($slug);
        $getBlog2 = $this->Blog->getBlog2();
        $danhmuc = $this->DanhMuc->getAllDanhMuc();
        $viewdetail = $this->Blog->editBlog($slug);
        $viewdetail2 = $this->Blog->editBlog($slug);
        $this->getDanhMucVaBlog();
        foreach ($viewdetail2 as $detail) {
            $viewdt = $this->Blog->getblogbyiddm3($detail->iddm);
            $detail['viewdt'] = $viewdt;
        }

        $this->data['getBlog2'] = $getBlog2;
        $this->data['danhmuc'] = $danhmuc;
        $this->data['viewdetail'] = $viewdetail;
        $this->data['viewdetail2'] = $viewdetail2;

        $this->data['pathActive'] = 'bai-viet';
        $this->data['namePage'] = $viewdetail[0]->name;
        $this->data['breadcrumbArray'] = [
            ['link' => '/bai-viet', 'name' => 'Bài viết'],
            ['link' => '', 'name' => $viewdetail[0]->name],
        ];

        return view("Site.pages.baivietchitiet", $this->data);
    }
    public function viewDanhmucBaiViet($slug){
        $danhmuc = $this->DanhMuc->getAllDanhMuc();
        $nameDanhMucbyslug = $this->DanhMuc->idDanhMucbyslug($slug);
        $viewdetail = $this->Blog->getBlogByslugdm($slug);

        $this->data['danhmuc'] = $danhmuc;
        $this->data['viewdetail'] = $viewdetail;
        $this->data['nameDanhMucbyslug'] = $nameDanhMucbyslug;

        $this->data['pathActive'] = 'danh-muc-bai-viet';
        $this->data['namePage'] = $nameDanhMucbyslug[0]->name;
        $this->data['breadcrumbArray'] = [
            ['link' => '/danh-muc-bai-viet', 'name' => 'Danh mục bài viết'],
            ['link' => '', 'name' => 'Danh mục'],
        ];

        return view("Site.pages.dmblogchitiet", $this->data);
    }
    public function viewDichVu(Request $request)
    {
        $dichvu = $this->Dichvu->getDichVu2();
        $dichvu1 = $this->Dichvu->getDichVu1();
        $dichvu2 = $this->Dichvu->getDichVubyGiamGia();
        $danhmuc = $this->DanhMuc->getalldanhmuc();
        $this->getDanhMucVaDichVu();

        $this->data['pathActive'] = 'dich-vu';
        $this->data['namePage'] = 'Dịch Vụ';
        $this->data['dichvu'] = $dichvu;
        $this->data['dichvu1'] = $dichvu1;
        $this->data['dichvu2'] = $dichvu2;
        $this->data['danhmuc'] = $danhmuc;
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'Dịch Vụ'],
        ];


        return view("Site.pages.dichvu", $this->data);
    }

    public function viewTimKiem()
    {
        $dichvu = $this->Dichvu->getAllDichVu();
        $sanpham = $this->SanPham->getsanphamtimkiem();
        $blog = $this->Blog->getAllBlog();

        $this->data['dichvu'] = $dichvu;
        $this->data['sanpham'] = $sanpham;
        $this->data['blog'] = $blog;
        $this->data['pathActive'] = 'tim-kiem';
        $this->data['namePage'] = 'Tìm Kiếm';
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'Tìm Kiếm'],
        ];
        if($valueSearch = request()->key){
            $dichvu = $this->Dichvu->search($valueSearch);
            $sanpham = $this->SanPham->searchsanpham($valueSearch);
            $blog = $this->Blog->searchblog($valueSearch);

            $this->data['dichvu'] = $dichvu;
            $this->data['sanpham'] = $sanpham;
            $this->data['blog'] = $blog;

        }


        return view("Site.pages.timkiem", $this->data);
    }

    public function viewLienHe()
    {
        $coso = $this->Coso->getAll();
        $this->data['coso'] = $coso;
        $this->data['pathActive'] = 'lien-he';
        $this->data['namePage'] = 'Liên Hệ';
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'Liên Hệ'],
        ];
        return view("Site.pages.contact", $this->data);
    }

    public function storeLienHe(LienHe $request)
    {
        $LienHe = [
            'namekh' => $request->namekh,
            'email' => $request->email,
            'sdt' => $request->sdt,
            'noidung' => $request->noidung,
        ];
        $this->LienHe->create($LienHe);
        return redirect('lien-he')->with('success', 'Gửi thành công liên hệ');
    }

    public function viewGioiThieu()
    {
        $this->data['pathActive'] = 'gioi-thieu';
        $this->data['namePage'] = 'Giới thiệu';
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'Giới thiệu'],
        ];
        return view("Site.pages.gioithieu", $this->data);
    }

    public function viewDichVuChiTiet($slug)
    {
        $detaildichvu = $this->Dichvu->dichvudetail($slug);

        $this->data['detaildichvu'] = $detaildichvu;
        $this->data['pathActive'] = 'dich-vu';
        $this->data['namePage'] = 'Dịch Vụ';
        $this->data['breadcrumbArray'] = [
            ['link' => '/dich-vu', 'name' => 'Dịch Vụ'],
            ['link' => '', 'name' => 'Tên Dịch Vụ'],

        ];

        return view("Site.pages.dichvuchitiet", $this->data);
    }

    public function viewProfileUser()
    {
        $khachHang = session()->get('khachHang');

        if ($khachHang === null) {
            return redirect('/')->with('alert', 'Deleted!');
        }

        $this->data['pathActive']          = 'thong-tin-tai-khoan';
        $this->data['namePage']            = 'Thông tin tài khoản';
        $this->data['breadcrumbArray']     = [
            ['link' => '', 'name' => 'Thông tin tài khoản'],
        ];


        if ($khachHang) {
            $dataLieuTrinh = $this->LieuTrinh->findLieuTrinhByIdKh($khachHang->id);
            $this->data['dataLieuTrinh'] = $dataLieuTrinh;
            $this->data['lichSuDatLich'] = $this->getDuLieuTabLichSuDatLich($khachHang->id);

            // dd($this->data['lichSuDatLich']);
        } else {
            $this->data['dataLieuTrinh'] = [];
        }
        $this->data['donhangcuatoi']=$this->DonHang->DonHanCuaBanALL();
        $this->data['donhangcuatoi1']=$this->DonHang->DonHanCuaBan(self::DONHANG_CHOXACNHAN);
        $this->data['donhangcuatoi2']=$this->DonHang->DonHanCuaBan(self::DONHANG_DANGGIAO);
        $this->data['donhangcuatoi3']=$this->DonHang->DonHanCuaBan(self::DONHANG_DAGIAO);
        $this->data['donhangcuatoi4']=$this->DonHang->DonHanCuaBan(self::DONHANG_DAHUY);
        $this->data['donhangcuatoi5']=$this->DonHang->DonHanCuaBan(self::DONHANG_TRAHANG);
        $this->data['spyeuthich']=$this->YeuThich->getYeuThichByIdKhachHang(session()->get('khachHang')->id);
        return view("Site.pages.profile-user", $this->data);
    }

    public function getDuLieuTabLichSuDatLich($idKhachHang) {
        $arrayYear = $this->getArrayYearInDatLich($idKhachHang);
        $arrayDatLich = $this->getDatLichByYearArrayAndIdKhachHang($idKhachHang, $arrayYear);
        // dd($arrayDatLich);
        return $arrayDatLich;
    }

    public function getArrayYearInDatLich($idKhachHang) {
        $listDatLich = $this->DatLich->getDatLichByIdKhachHang($idKhachHang);
        $arrayYear = array();
        foreach($listDatLich as $datLich) {
            $year = date('Y', $datLich->thoigiandat);
            if (!in_array($year, $arrayYear)) {
                $arrayYear[] = $year;
            }
        }
        return $arrayYear;
    }

    public function getDatLichByYearArrayAndIdKhachHang($idKhachHang, $arrayYear) {
        $arrayDatLich = array();
        for ($i = 0; $i < count($arrayYear); $i++) {
            $thoiGian = Controller::getThoiGianTimestampDauNamVaCuoiNam($arrayYear[$i]);
            $listDatLichByTime = $this->DatLich->getDatLichByIdKhachHangAndThoiGianDat($idKhachHang, $thoiGian['startOfYear'], $thoiGian['endOfYear']);

            foreach ($listDatLichByTime as $datLich) {
                $thoiGianDayYMD = date('Y-m-d', $datLich->thoigiandat);
                $datLich['thoiGianDayYMD'] = $thoiGianDayYMD;
            }

            $dataDatLich = array (
                "year" => $arrayYear[$i],
                "arrayDatLich" => $listDatLichByTime
            );
            $arrayDatLich[] = $dataDatLich;
        }

        return $arrayDatLich;
    }

    public function getDanhMucVaDichVuHome() {
        $limit = 3;
        $listDanhMuc = $this->DanhMuc->getDanhMucLimit($limit);

        $arrDichVu = array();
        foreach ($listDanhMuc as $item) {
            $dichVuByIdDanhMuc = $this->Dichvu->getDichVuByIdDanhMuc($item->id, $limit);
            $arrDichVu[] = $dichVuByIdDanhMuc;
        }


        $this->data['listDanhMuc'] = $listDanhMuc;
        $this->data['arrDichVu'] = $arrDichVu;
    }
    public function getDanhMucVaBlog() {
        $skip = 0;
        $task = 6;
        $limit = 6;
        $listDanhMucBlog = $this->DanhMuc->getDanhMucLimitBlog($limit);

        $arrBlog = array();
        foreach ($listDanhMucBlog as $item) {
            $BlogByIdDanhMuc = $this->Blog->getBlogByIdDanhmuc($item->id, $skip, $task);
            $arrBlog[] = $BlogByIdDanhMuc;
        }
// dd($arrBlog);
        $this->data['listDanhMucBlog'] = $listDanhMucBlog;
        $this->data['arrBlog'] = $arrBlog;
    }
    public function getDanhMucVaDichVu() {
        $limit = 4;
        $limitdv = $limit + 5;
        $listDanhMuc = $this->DanhMuc->getDanhMucLimit($limit);

        $arrDichVu = array();
        foreach ($listDanhMuc as $item) {
            $dichVuByIdDanhMuc = $this->Dichvu->getDichVuByIdDanhMuc($item->id, $limitdv);
            $arrDichVu[] = $dichVuByIdDanhMuc;
        }


        $this->data['listDanhMuc'] = $listDanhMuc;
        $this->data['arrDichVu'] = $arrDichVu;
    }

    public function getLieuTrinhDetailByIdLieuTrinh($id){
        $dataLieuTrinhChiTiet = $this->LieuTrinhChiTiet->getLieuTrinhChiTietInnerJoin($id);
        $data['dataLieuTrinhChiTiet'] = $dataLieuTrinhChiTiet;
        if ($dataLieuTrinhChiTiet !== null) {
            $data['dataLieuTrinh'] = $this->LieuTrinh->find($dataLieuTrinhChiTiet[0]->idlieutrinh);
        }
        return response()->json($data);
    }

    public function huyLieuTrinh(Request $request){
        // check đã hoàn thành 1 dịch vụ sẽ không được huỷ
        $hasHoaDon = $this->HoaDon->findHoaDonByIdLieuTrinh($request->idlieutrinh);
        if(count($hasHoaDon)>0){
            return response()->json([
                'success' => false,
                'titleMess' => 'Đã xảy ra lỗi !',
                'textMess' => 'Liệu trình đã thanh toán không thể huỷ!'
            ]);
        }else{
            if( $request->idlieutrinh){
                $res = $this->LieuTrinh->update($request->idlieutrinh,['trangthai'=>2]);
                if($res){
                    return response()->json([
                        'success' => true,
                        'titleMess' => 'Thành công!',
                        'textMess' => 'Đã huỷ liệu trình!'
                    ]);

                }
            }
        }

    }

    public static function findNameDichVuByIdLieuTrinh($id){
        $LieuTrinhResult = LieuTrinhChiTietModel::findNameDichVuByIdLieuTrinh($id);

        $arrName = [];
        for ($i = 0; $i < count($LieuTrinhResult); $i++) {
            array_push($arrName, $LieuTrinhResult[$i]->name);
        }
        return implode(", ", $arrName);
    }


    public function getNhanVienByIdCoSo(Request $request, $id)
    {
        try {
            if ($request->ajax()) {
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

    public function getBlogsPagi(Request $request)
    {
        try {
            if ($request->ajax()) {
                $blog = $this->Blog->getBlogByIdDanhmuc($request->id, $request->skip, $request->take);

                $response = Array(
                    'success' => true,
                    'blog' => $blog,
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


    public function datLich(Request $request)
    {
        try {
            if ($request->ajax()) {
                $error = false;

                if ($request->soDienThoai == '') {
                    $error = true;
                    $textMess = 'Số điện thoại không hợp lệ';
                } else {
                    $khachHang = $this->KhachHang->getBySdt($request->soDienThoai);
                    if ($khachHang == null) {
                        $khachHang = $this->createNewKhachHang($request->soDienThoai, $request->idCoSo, $request->nameKhachHang);
                    } else {
                        if ($khachHang->name == '') {
                            $khachHang = $this->updateKhachHangCoSoVaName($khachHang->id, $request->idCoSo, $request->nameKhachHang);
                        }
                    }
                }

                if ($error == false) {
                    $currentDate = $this->getCurrentDatet();
                    if ($currentDate == $request->ngay) {
                        $limitTime = $this->getLimitTime();
                        if ($request->gio < $limitTime) {
                            $error = true;
                            $textMess = 'Bạn hãy chọn khung giờ trước 10 phút nhé, xin cảm ơn.';
                        }
                    }
                }

                $thu = $this->getThuByNgay($request->ngay);
                $lichKhachDat = $this->Lich->getLichActive($thu, $request->idCoSo, $request->gio);
                if ($error == false) {
                    if ($lichKhachDat == null) {
                        $error = true;
                        $textMess = 'Khung giờ bạn chọn đã đóng. Hãy chọn khung giờ khác bạn nhé';
                    }
                }

                if ($error == false) {
                    $soLanKhachDatByTimeStamp = $this->DatLich->getSoLanKhachDatByTimeStamp($request->thoiGianDat);
                    if (intval($soLanKhachDatByTimeStamp) >= intval($lichKhachDat->soluongkhach)) {
                        $error = true;
                        $textMess = 'Khung giờ bạn chọn đã đầy. Hãy chọn khung giờ khác bạn nhé';
                    }
                }

                if ($error == false) {
                    if ($request->idNhanVien > 0) {
                        $nhanVien = $this->NhanVien->findNhanVienByIdAndCoSo($request->idNhanVien, $request->idCoSo);
                        if ($nhanVien) {
                            // check nhan vien
                            $nhanVienRanh = $this->checkNhanVienRanh($request->thoiGianDat, $nhanVien->id);
                            if (!$nhanVienRanh) {
                                $error = true;
                                $textMess = 'Chuyên viên bạn chọn đã có lịch vào ' . $request->ngay . ' ' . $request->gio . '. Hãy chọn giờ khác hoặc chuyên viên khác bạn nhé.';
                            }
                        } else {
                            $error = true;
                            $textMess = 'Không tìm thấy nhân viên';
                        }
                    } else {
                        if ($request->idNhanVien != 0) { // 0 = Spa chọn nhân viên
                            $error = true;
                            $textMess = 'Vui lòng thử lại trong ít phút nhé !.';
                        } else {
                            if ($request->listDichVu == '') {
                                $request->listDichVu = '[0]';
                            }
                        }
                    }
                }

                if ($error == false) {
                    $datLich = $this->createNewDatLich($request, $khachHang->id);
                    if (!$datLich) {
                        $error = true;
                        $textMess = 'Đặt lịch không thành công vui lòng thử lại';
                    } else {

                        // Tiến hành đặt lịch
                        $datLich['typez'] = 'dat-lich';
                        event(
                            $e = new SendDatLich($datLich)
                        );
                    }
                }

                if ($error == false) {
                    $sdt = '+84' . substr($request->soDienThoai, 1, strlen($request->soDienThoai));
                    $message = $this->makeMessageCamOnDatLich($request->idCoSo, $request->ngay, $request->gio);
                    // $this->freeSMSController->sendSingleMessage($sdt, $message);

                    $response = Array(
                        'success' => true,
                        'datLich' => $datLich,
                        'khachHang' => $khachHang,
                        'ngay' => $request->ngay,
                        'gio' => $request->gio,
                        'request' => $request,
                        'sdt' => $sdt
                    );
                } else {
                    $response = Array(
                        'success' => false,
                        'titleMess' => 'Đã xảy ra lỗi !',
                        'textMess' => $textMess,
                    );
                }

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

    public function makeMessageCamOnDatLich($idCoSo, $ngay, $gio)
    {
        $diachi = $this->Coso->getDiaChiById($idCoSo);
        $dateFormatDMY = date("d/m/Y", strtotime($ngay));
        $indexDauHaiChamFirst = stripos($gio, ':');
        $gioChenChuH = substr_replace($gio, "h", $indexDauHaiChamFirst, 1);
        $gioDaFormat = substr($gioChenChuH, 0, strlen($gioChenChuH) - 3);
        $message = '[Fbeauty]: Dat lich thanh cong. Thoi gian dat lich vao ngay ' . $dateFormatDMY . ' luc ' . $gioDaFormat . ' tai dia chi ' . $diachi . '. Ban co the dang nhap bang so dien thoai da dat lich vao trang web fbeauty.com de xem thong tin chi tiet. Cam on ban da quan tam dich vu cua chung toi';

        return $message;
    }


    public function skipCreatePassword(Request $request)
    {
        try {
            if ($request->ajax()) {
                $error = $this->checkSDTValid($request->sdt);

                if ($error == false) {
                    $khachHang = $this->KhachHang->checkLoginSite($request->sdt);

                    if ($khachHang) {
                        session(['khachHang' => $khachHang]);

                        $response = Array(
                            'success' => true,
                            'sdt' => $request->sdt,
                            'type' => 'Login with OTP'
                        );

                    } else {
                        $response = Array(
                            'success' => false,
                            'titleMess' => 'Đã xảy ra lỗi !',
                            'textMess' => 'Không tìm thấy số điện thoại. Vui lòng đăng ký lại'
                        );
                    }
                    session(['khachHang' => $khachHang]);
                } else {
                    $response = Array(
                        'success' => false,
                        'titleMess' => 'Đã xảy ra lỗi !',
                        'textMess' => 'Số điện thoại không đúng định dạng',
                        'request' => $request
                    );
                }
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


    public function newPassword(Request $request)
    {
        try {
            if ($request->ajax()) {
                $errors = $this->checkLoginSiteValid($request);

                if ($errors['type'] == false) {
                    $khachHang = $this->KhachHang->checkLoginSite($request->sdt);

                    if ($khachHang) {
                        if ($khachHang->active == Controller::KHACHHANG_DA_ACTIVE) {
                            $this->updateKhachHang($khachHang->id, $request->password);
                            $response = Array(
                                'success' => true,
                                'sdt' => $request->sdt,
                                'password' => $request->password,
                                'type' => 'update'
                            );
                        } else {
                            $this->updateKhachHangActive($khachHang->id, $request->password);
                            $response = Array(
                                'success' => true,
                                'sdt' => $request->sdt,
                                'password' => $request->password,
                                'type' => 'update active'
                            );
                        }
                    } else {
                        $khachHang = $this->createKhachHangActive($request->sdt, $request->password);
                        $response = Array(
                            'success' => true,
                            'sdt' => $request->sdt,
                            'password' => $request->password,
                            'type' => 'create new'
                        );
                    }
                    session(['khachHang' => $khachHang]);
                } else {
                    $response = Array(
                        'success' => false,
                        'titleMess' => 'Đã xảy ra lỗi !',
                        'textMess' => $errors['mess']
                    );
                }
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

    public function checkOTP(Request $request)
    {
        try {
            if ($request->ajax()) {
                $errors = $this->checkOTPValid($request->OTP);
                if ($errors['type'] == false) {
                    if (session('OTP') == $request->OTP) {
                        $response = Array(
                            'success' => true,
                            'OTP' => $request->OTP
                            // 'SOTP' => session('OTP')
                        );

                        session()->forget('OTP');
                    } else {
                        $response = Array(
                            'success' => false,
                            'titleMess' => 'Đã xảy ra lỗi !',
                            'textMess' => 'Mã xác nhận OTP không đúng. Vui lòng nhập lại'
                        );
                    }
                } else {
                    $response = Array(
                        'success' => false,
                        'titleMess' => 'Đã xảy ra lỗi !',
                        'textMess' => $errors['mess']
                    );
                }
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

    public function checkOTPValid($OTP)
    {
        $type = false;
        $mess = '';

        if (strlen($OTP) != 6) {
            $type = true;
            $mess = 'OTP không đúng định dạng';
        }

        return array(
            'type' => $type,
            'mess' => $mess
        );
    }

    public function removeOTP(Request $request)
    {
        try {
            if ($request->ajax()) {
                session()->forget('OTP');
                session()->forget('timeOTPNotValid');

                $response = Array(
                    'success' => true,
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

    public function makeOTP()
    {
        $OTP = random_int(100000, 999999);;
        session(['OTP' => $OTP]);

        return $OTP;
    }

    public function makeTimeOTPNotValid()
    {
        $currentTimestamp = time() * 1000; // lấy timestamp * 1000 vì sử dụng bên js
        $timeOTPNotValid = $currentTimestamp + 60000; // 60s sau
        session(['timeOTPNotValid' => $timeOTPNotValid]);

        return $timeOTPNotValid;
    }

    public function sendOTPSMS(Request $request)
    {
        try {
            if ($request->ajax()) {
                $OTP = $this->makeOTP();

                // Ví dụ sdt: 0868970582 => +84868970582
                $sdt = '+84' . substr($request->sdt, 1, strlen($request->sdt));
                $message = '[Fbeauty]: ' . $OTP . ' la ma OTP cua ban. Ma se het han trong vong 60s. Vui long khong chia se ma nay trong bat ki truong hop nao!';
                $this->freeSMSController->sendSingleMessage($sdt, $message);

                $timeOTPNotValid = $this->makeTimeOTPNotValid();
                $response = Array(
                    'success' => true,
                    'sdt' => $request->sdt,
                    'timeOTPNotValid' => $timeOTPNotValid,
                    'phoneNumber' => $sdt,
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

    public function logoutSite()
    {
        session()->forget('khachHang');
        session()->forget('giohang');
        return redirect()->back();
    }

    public function login(Request $request)
    {
        try {
            if ($request->ajax()) {
                $errors = $this->checkLoginSiteValid($request);

                if ($errors['type'] == false) {
                    $khachHang = $this->KhachHang->checkLoginSite($request->sdt);

                    if ($khachHang) {
                        if (Hash::check($request->password, $khachHang->password)) {
                            if ($khachHang->active == 1) {
                                session(['khachHang' => $khachHang]);
                                $response = Array(
                                    'success' => true,
                                    'khachHang' => $khachHang
                                );
                            } else {
                                $response = Array(
                                    'success' => false,
                                    'titleMess' => 'Đã xảy ra lỗi !',
                                    'textMess' => 'Tài khoản của bạn bị chưa kích hoạt hoặc bị chặn. Vui lòng liên hệ để được hỗ trợ'
                                );
                            }
                        } else {
                            $response = Array(
                                'success' => false,
                                'titleMess' => 'Đã xảy ra lỗi !',
                                'textMess' => 'Mật khẩu không chính xác'
                            );
                        }
                    } else {
                        $response = Array(
                            'success' => false,
                            'titleMess' => 'Đã xảy ra lỗi !',
                            'textMess' => 'Tài khoản khách hàng không tồn tại'
                        );
                    }
                } else {
                    $response = Array(
                        'success' => false,
                        'titleMess' => 'Đã xảy ra lỗi !',
                        'textMess' => $errors['mess']
                    );
                }
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

    public function checkIssetUser(Request $request)
    {
        try {
            if ($request->ajax()) {
                $user = $this->KhachHang->checkIssetUserByPhoneNumber($request->phoneNumber);

                if ($user == null) {
                    // Sdt chưa active hoặc chưa tạo
                    // Gửi OTP bằng SMS
                    $checkIssetUser = false;
                } else {
                    $checkIssetUser = true;
                }

                $response = Array(
                    'success' => true,
                    'request' => $request,
                    'sdt' => $request->phoneNumber,
                    'checkIssetUser' => $checkIssetUser
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

    public function getNhanVienTam($id)
    {
        return $this->NhanVien->getNhanVienByIdCoSo($id);
    }

    public function checkNhanVienRanh($thoiGianDat, $idNhanVien)
    {
        $nhanVien = $this->DatLich->findDatLichCuaNhanVienTheoThoiGian($thoiGianDat, $idNhanVien);
        if (!$nhanVien) {
            $check = true;
        } else {
            $check = false;
        }
        return $check;
    }

    public function getDichVuTheoDanhMuc()
    {
        $listDanhMuc = $this->DanhMuc->findDanhMucByIdLoai(Controller::LOAI_DANHMUC_DICHVU);

        foreach ($listDanhMuc as $row) {
            $dichVu = $this->Dichvu->getDichVuTheoDanhMuc($row->id);
            $row->listDichVu = $dichVu;
        }

        return $listDanhMuc;
    }

    public function layDatLichCungNgay($request)
    {
        $allDatLich = $this->DatLich->getDatLichCungCoSo($request->idCoSo);

        $datLichOfDay = array();
        foreach ($allDatLich as $row) {
            $dateMounthYear = date('Y-m-d', $row->thoigiandat);
            if ($dateMounthYear == $request->ngay) {
                $datLichOfDay[] = $row;
            }
        }

        return $datLichOfDay;
    }

    public function getLimitTime()
    {
        $carbonNow = Carbon::now();
        $limitTime = $carbonNow->addMinute($this->limitTimeNum);
        $limitTimeFormat = $limitTime->toTimeString();
        return $limitTimeFormat;
    }

    public function getCurrentDatet()
    {
        $carbonNow = Carbon::now();
        $currentDate = $carbonNow->toDateString();
        return $currentDate;
    }

    public function getThuByNgay($ngay)
    {
        $newCarbon = new Carbon($ngay);
        $thu = $newCarbon->dayOfWeek;

        return $thu;
    }

    public function checkTrangThaiLich($thu, $idCoSo, $gio)
    {
        $lich = $this->Lich->getLichActive($thu, $idCoSo, $gio);
        if ($lich) {
            $active = true;
        } else {
            $active = false;
        }
        return $lich;
    }

    public function getDataKhungGio(Request $request)
    {
        try {
            if ($request->ajax()) {
                $Lich = $this->Lich->getLichByThuAndCoSo($request->thu, $request->idCoSo);
                $datLichOfDay = $this->layDatLichCungNgay($request);

                // Set default = 0
                foreach ($Lich as $rowLich) {
                    $rowLich->soKhachDaDat = 0;
                    $rowLich->coNhanVien = 'true';
                }

                if ($request->idNhanVien > 0) {
                    $this->tinhKhungGioCoIdNhanVien($datLichOfDay, $Lich, $request->idNhanVien);
                } else {
                    $this->tinhKhungGioKhongCoIdNhanVien($datLichOfDay, $Lich);
                }

                $response = Array(
                    'success' => true,
                    'thuTrongTuan' => $request->thu,
                    'ngay' => $request->ngay,
                    'lich' => $Lich,
                    'idcoso' => $request->idCoSo,
                    'datLichOfDay' => $datLichOfDay,
                    'idNhanVien' => $request->idNhanVien
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

    public function tinhKhungGioCoIdNhanVien($datLichOfDay, $Lich, $idNhanVien)
    {
        foreach ($datLichOfDay as $rowDatLichOfDate) {
            $time = date('H:i:s', $rowDatLichOfDate->thoigiandat);
            foreach ($Lich as $rowLich) {
                if ($idNhanVien == $rowDatLichOfDate->idnhanvien) {
                    if ($rowLich->gio == $time) {
                        $rowLich->coNhanVien = 'false';
                    }
                }

                if ($rowLich->gio == $time) {
                    $rowLich->soKhachDaDat++;
                }
            }
        }
    }

    public function tinhKhungGioKhongCoIdNhanVien($datLichOfDay, $Lich)
    {
        foreach ($datLichOfDay as $rowDatLichOfDate) {
            $time = date('H:i:s', $rowDatLichOfDate->thoigiandat);
            foreach ($Lich as $rowLich) {
                if ($rowLich->gio == $time) {
                    $rowLich->soKhachDaDat++;
                }
            }
        }
    }

    public function createNewKhachHang($sdt, $idCoSo, $name)
    {
        $khachHang = new KhachHangModel;
        $khachHang->sdt = $sdt;
        $khachHang->idcoso = $idCoSo;
        $khachHang->name = $name;
        $khachHang->active = Controller::KHACHHANG_CHUA_ACTIVE;
        $khachHang->save();

        return $khachHang;
    }

    public function createKhachHangActive($sdt, $password)
    {
        $khachHang = new KhachHangModel;
        $khachHang->sdt = $sdt;
        $khachHang->password = bcrypt($password);
        $khachHang->active = Controller::KHACHHANG_DA_ACTIVE;
        $khachHang->save();

        return $khachHang;
    }

    public function updateKhachHang($id, $password)
    {
        $khachHang = KhachHangModel::find($id);
        $khachHang->password = bcrypt($password);
        $khachHang->save();
    }

    public function updateKhachHangCoSoVaName($id, $idCoSo, $name)
    {
        $khachHang = KhachHangModel::find($id);
        $khachHang->name = $name;
        $khachHang->idcoso = $idCoSo;
        $khachHang->save();
    }

    public function updateKhachHangActive($id, $password)
    {
        $khachHang = KhachHangModel::find($id);
        $khachHang->password = bcrypt($password);
        $khachHang->active = Controller::KHACHHANG_DA_ACTIVE;
        $khachHang->save();
    }

    public function createNewDatLich($request, $idKhachHang)
    {
        $datLich = new DatLichModel;
        $datLich->idcoso = $request->idCoSo;
        $datLich->iddichvu = $request->listDichVu;
        $datLich->idkhachhang = $idKhachHang;
        $datLich->idnhanvien = $request->idNhanVien;
        $datLich->thoiGianDat = $request->thoiGianDat;
        $datLich->save();
        return $datLich;
    }

    public function checkLoginSiteValid($request)
    {
        $type = false;
        $mess = '';

        if ($this->checkSDTValid($request->sdt) == true) {
            $type = true;
            $mess = 'Số điện thoại không đúng định dạng';
        } else if (strlen($request->password) != 6) {
            $type = true;
            $mess = 'Mật khẩu không đúng định dạng';
        }

        return array(
            'type' => $type,
            'mess' => $mess
        );
    }

    public function checkSDTValid($sdt)
    {
        $error = false;

        $pattern = "/((09|03|07|08|05)+([0-9]{8})\b)/";
        if (preg_match($pattern, $sdt) == 0) {
            $error = true;
        }

        return $error;
    }

    public function updateprofile(ChangeProfile $request)
    {

        if ($request->file("urlHinh") != null) {
            $img = $request->file('urlHinh');
            $extension = $img->getClientOriginalExtension();
            if ($this->checkImgCustomer($extension, $img) == true) {
                $imgTrue = true;
            } else {
                $imgTrue = false;
            }
            if ($imgTrue == true) {
                $profile = [
                    'name' => $request->username,
                    'email' => $request->email,
                    'img' => $_FILES["urlHinh"]["name"]
                ];
                $this->KhachHang->update(session()->get("khachHang")->id, $profile);
                $this->UpdateSessionInFor();
                return redirect("/thong-tin-tai-khoan")->with("thongbaoprofile","Cập nhật thành công");
            } else {
                $profile = [
                    'name' => $request->username,
                    'email' => $request->email,
                ];
                $this->KhachHang->update(session()->get("khachHang")->id, $profile);
                $this->UpdateSessionInFor();
                return redirect("/thong-tin-tai-khoan")->with("thatbaiprofile","Ảnh không đúng định dạng.");
            }
        } else {
            $profile = [
                'name' => $request->username,
                'email' => $request->email,
            ];
            $this->KhachHang->update(session()->get("khachHang")->id, $profile);
            $this->UpdateSessionInFor();
            return redirect("/thong-tin-tai-khoan")->with("thongbaoprofile","Cập nhật thành công");
        }

    }

    public function UpdateSessionInFor(){
        $infokh=$this->KhachHang->find(session()->get("khachHang")->id);
        session()->put("khachHang", $infokh);
        return true;
    }
}
