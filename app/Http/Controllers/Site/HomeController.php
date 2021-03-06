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
use App\Repositories\Banner\BannerRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
    private $Banner;

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
        YeuThichRepository $YeuThich,
        BannerRepository $Banner
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
        $this->HoaDon = $HoaDon;
        $this->HoaDonChiTiet = $HoaDonChiTiet;
        $this->DonHang = $DonHang;
        $this->YeuThich = $YeuThich;
        $this->LieuTrinhChiTiet = $LieuTrinhChiTiet;
        $this->Banner = $Banner;

        $danhmuc = $this->DanhMuc->getdanhmucshow();
        $listCoSo = $this->Coso->getAll();
        $listDanhMucDichVu = $this->getDichVuTheoDanhMuc();
        $listBanner = $this->getBanner();

        $this->data = array(
            'danhmuc' => $danhmuc,
            'listCoSo' => $listCoSo,
            'listDanhMucDichVu' => $listDanhMucDichVu,
            'pathActive' => '',
            'listBanner' => $listBanner
        );
    }

    public function index()
    {
        error_reporting(E_ALL);
        $this->getDuLieuBoxBlog();
        $sanPham = $this->SanPham->getAll();

        $spkhac = $this->SanPham->getSanPhamHome();

        $this->getDichVuTrangHome();

        $this->data['sanPham'] = $sanPham;

        $this->data['pathActive'] = 'trang-chu';
        $this->data['spkhac'] = $spkhac;

        return view("Site.pages.home", $this->data);
    }

    public function viewSanPham()
    {
        error_reporting(E_ALL);
        $sanpham = $this->SanPham->getsanpham();

        $this->data['sanpham'] = $sanpham;
        $this->data['pathActive'] = 'san-pham';
        $this->data['namePage'] = 'M??? ph???m d?????ng & l??m ?????p';
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'S???n ph???m'],
        ];
        $this->data["danhmucsp"] = $this->DanhMuc->findDanhMucByIdLoai(self::LOAI_DANHMUC_SANPHAM);
        $this->data["danhmucth"] = $this->DanhMuc->findDanhMucByIdLoai(self::LOAI_DANHMUC_THUONG_HIEU);
        return view("Site.pages.sanpham", $this->data);
    }

    public function getSanPham()
    {
        $sanpham = $this->SanPham->getSanPhamJoinDanhMuc();
        $data = ['sanpham' => $sanpham];
        return $data;
    }

    public function viewSanPhamChiTiet($slug)
    {
        $this->data['pathActive'] = 'san-pham';
        $this->data['namePage'] = 'S???n ph???m chi ti???t';
        $this->data['breadcrumbArray'] = [
            ['link' => '/san-pham', 'name' => 'S???n ph???m'],
            ['link' => '', 'name' => 'T??n s???n ph???m'],
        ];
        try {
            error_reporting(E_ALL);
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
        } catch (\Exception $e) {
            $this->data['spkhac'] = $this->SanPham->GetSanPhamLienQuanKhacIDDM(0);
            return view("Site.pages.sanpham-chitiet", $this->data, ['khongcosanpham' => 0]);
        }
    }


    public function viewGioHang()
    {
        $this->data['pathActive'] = 'san-pham';
        $this->data['namePage'] = 'Gi??? h??ng';
        $this->data['breadcrumbArray'] = [
            ['link' => '/san-pham', 'name' => 'S???n ph???m'],
            ['link' => '', 'name' => 'Gi??? h??ng'],
        ];

        return view("Site.pages.giohang", $this->data);
    }

    public function viewThanhToan()
    {
        $this->data['pathActive'] = 'san-pham';
        $this->data['namePage'] = 'Thanh to??n';
        $this->data['breadcrumbArray'] = [
            ['link' => '/san-pham', 'name' => 'S???n ph???m'],
            ['link' => '/gio-hang', 'name' => 'Gi??? h??ng'],
            ['link' => '', 'name' => 'Thanh to??n'],
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

        foreach ($listdanhmuc as $dm) {
            $skip = 0;
            $take = 3;
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
        $blog3 = $this->Blog->getLastWeek1();
        $blog4 = $this->Blog->getLastWeek2();
        $blognew = $this->Blog->getBlognew();

        $this->data['blog'] = $blog;
        $this->data['blog3'] = $blog3;
        $this->data['blog4'] = $blog4;
        $this->data['blognew'] = $blognew;
        $this->data['danhmuc'] = $danhmuc;
        $this->data['listdanhmuc'] = $listdanhmuc;
        $this->data['listdanhmuc2'] = $listdanhmuc2;
        $this->data['luotxem'] = $luotxem;
        $this->data['xuhuong'] = $xuhuong;
        $this->data['blognewtt'] = $blognewtt;
        $this->getDuLieuBoxBlog();

        $this->data['pathActive'] = 'bai-viet';
        $this->data['namePage'] = 'Di???n ????n l??m ?????p';
        $this->data['breadcrumbArray'] = [
            ['link' => '/bai-viet', 'name' => 'B??i vi???t'],
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
            ['link' => '/bai-viet', 'name' => 'B??i vi???t'],
            ['link' => '', 'name' => 'B??i vi???t chi ti???t'],
        ];

        return view("Site.pages.baivietchitiet", $this->data);
    }

    public function viewDanhmucBaiViet($slug)
    {
        $skip = 0;
        $take = 9;
        $danhmucct = $this->DanhMuc->getAllDanhMucchitiet($skip, $take);
        $viewdetail = $this->Blog->getBlogByslugdm($slug);
        $viewbt = $this->Blog->getblogbyslugdmbt($slug);
        $nameDanhMucbyslug = $this->DanhMuc->idDanhMucbyslug($slug);

        $this->data['danhmucct'] = $danhmucct;
        $this->data['viewdetail'] = $viewdetail;
        $this->data['viewbt'] = $viewbt;
        $this->data['nameDanhMucbyslug'] = $nameDanhMucbyslug;

        $this->data['pathActive'] = 'danh-muc-bai-viet';
        $this->data['namePage'] = $nameDanhMucbyslug[0]->name;
        $this->data['breadcrumbArray'] = [
            ['link' => '/danh-muc-bai-viet', 'name' => 'Danh m???c b??i vi???t'],
            ['link' => '', 'name' => 'Danh m???c'],
        ];

        return view("Site.pages.dmblogchitiet", $this->data);
    }

    public function viewDichVu()
    {
        $this->getDichVuTrangHome();

        $this->data['pathActive'] = 'dich-vu';
        $this->data['namePage'] = 'D???ch V???';
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'D???ch V???'],
        ];

        $this->data['dichVuAllPagination'] = $this->Dichvu->getAllPagination();

        // dd($this->data['dichVuAllPagination']);
        $danhmuc = $this->DanhMuc->getAllDanhMucDichVu();
        $this->data['danhmuc'] = $danhmuc;
        return view("Site.pages.dichvu", $this->data);

    }

    public function danhmucdichvu($slug)
    {
        $this->data['pathActive'] = 'danh-muc-dich-vu';
        $this->data['namePage'] = 'Danh M???c D???ch V???';
        $this->data['breadcrumbArray'] = [
            ['link' => '/danh-muc-dich-vu', 'name' => 'Danh M???c D???ch V???'],
            ['link' => '', 'name' => 'T??n D???ch V???'],

        ];
        $limit = 6;
        $nameDanhMucbyslug = $this->DanhMuc->idDanhMucbyslug($slug);
        $viewdetail = $this->Dichvu->getdichvuiddanhmuc($slug, $limit);
        $this->data['nameDanhMucbyslug'] = $nameDanhMucbyslug;
        $this->data['viewdetail'] = $viewdetail;
        return view("Site.pages.danhmucchitiet", $this->data);
    }

    public function Huyprofile(Request $request, $id)
    {
        $id = $request->id;
        $huy = DatLichModel::find($id);
        $huy->trangthai = 2;
        $huy->save();
        return redirect('/thong-tin-tai-khoan');
    }

    public function viewTimKiem()
    {

        $dichvu = $this->Dichvu->getAllDichVu();
        $sanpham = $this->SanPham->getsanphamtimkiem();
        $blog = $this->Blog->getAllBlog();


        $this->data['dichvu'] = $dichvu;
        $this->data['dichvu'] = $dichvu;
        $this->data['sanpham'] = $sanpham;
        $this->data['blog'] = $blog;
        $this->data['pathActive'] = 'tim-kiem';
        $this->data['namePage'] = 'T??m Ki???m';
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'T??m Ki???m'],
        ];

        if ($valueSearch = request()->key) {
            $dichVu = $this->Dichvu->search($valueSearch);
            $sanPham = $this->SanPham->searchsanpham($valueSearch);
            $blog = $this->Blog->searchblog($valueSearch);

            $this->dulieu['dichVu'] = $dichVu;
            $this->dulieu['sanPham'] = $sanPham;
            $this->dulieu['blog'] = $blog;
        }


        return view("Site.pages.timkiem", $this->data, ['dulieu' => json_encode($this->dulieu)]);
    }

    public function viewLienHe()
    {
        $coso = $this->Coso->getAll();
        $this->data['coso'] = $coso;
        $this->data['pathActive'] = 'lien-he';
        $this->data['namePage'] = 'Li??n H??? Ch??ng T??i';
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'Li??n H???'],
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
        return redirect('lien-he')->with('success', 'G???i li??n h??? th??nh c??ng !');
    }

    public function viewGioiThieu()
    {
        $this->data['pathActive'] = 'gioi-thieu';
        $this->data['namePage'] = 'Gi???i thi???u V??? Ch??ng T??i';
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'V??? Ch??ng T??i'],
        ];
        return view("Site.pages.gioithieu", $this->data);
    }

    public function viewDichVuChiTiet($slug)
    {
        $this->data['pathActive'] = 'dich-vu';
        $this->data['namePage'] = 'D???ch V???';
        $this->data['breadcrumbArray'] = [
            ['link' => '/dich-vu', 'name' => 'D???ch V???'],
            ['link' => '', 'name' => 'T??n D???ch V???'],

        ];
        try {
            $detaildichvu = $this->Dichvu->dichvudetail($slug);
            $dichvuview = $this->Dichvu->getdichvujoindanhmuc($slug);
            $dichvulienquan = $this->Dichvu->GetDichvuLienQuan($dichvuview[0]->iddm);
            $dichvukhac = $this->Dichvu->GetDichvuLienQuanKhacIDDM(0);

            $this->data['dichvulienquan'] = $dichvulienquan;
            $this->data['dichvukhac'] = $dichvukhac;
            $this->data['detaildichvu'] = $detaildichvu;
            return view("Site.pages.dichvuchitiet", $this->data);
        } catch (\Exception $exception) {
            $this->data['dichvukhac'] = $this->Dichvu->GetDichvuLienQuanKhacIDDM(0);
            return view("Site.pages.dichvuchitiet", $this->data, ["khongcodichvu", 0]);
        }
    }

    public function viewProfileUser()
    {
        $khachHang = session()->get('khachHang');

        if ($khachHang === null) {
            return redirect('/')->with('alert', 'Deleted!');
        }

        $this->data['pathActive'] = 'thong-tin-tai-khoan';
        $this->data['namePage'] = 'Th??ng tin t??i kho???n';
        $this->data['breadcrumbArray'] = [
            ['link' => '', 'name' => 'Th??ng tin t??i kho???n'],
        ];

        if ($khachHang) {
            $dataLieuTrinh = $this->LieuTrinh->findLieuTrinhByIdKh($khachHang->id);
            $this->data['dataLieuTrinh'] = $dataLieuTrinh;
            $this->data['lichSuDatLich'] = $this->getDuLieuTabLichSuDatLich($khachHang->id);
            $this->data['lichSuDatLich1'] = $this->getDuLieuTabLichSuDatLich1($khachHang->id);
            $this->data['lichSuDatLich2'] = $this->getDuLieuTabLichSuDatLich2($khachHang->id);
            $this->data['lichSuDatLich3'] = $this->getDuLieuTabLichSuDatLich3($khachHang->id);

        } else {
            $this->data['dataLieuTrinh'] = [];
        }
        $this->data['donhangcuatoi'] = $this->DonHang->DonHanCuaBanALL();
        $this->data['donhangcuatoi1'] = $this->DonHang->DonHanCuaBan(self::DONHANG_CHOXACNHAN);
        $this->data['donhangcuatoi2'] = $this->DonHang->DonHanCuaBan(self::DONHANG_DANGGIAO);
        $this->data['donhangcuatoi3'] = $this->DonHang->DonHanCuaBan(self::DONHANG_DAGIAO);
        $this->data['donhangcuatoi4'] = $this->DonHang->DonHanCuaBan(self::DONHANG_DAHUY);
        $this->data['donhangcuatoi5'] = $this->DonHang->DonHanCuaBan(self::DONHANG_TRAHANG);
        $this->data['spyeuthich'] = $this->YeuThich->getYeuThichByIdKhachHang(session()->get('khachHang')->id);
        return view("Site.pages.profile-user", $this->data);
    }

    public function getDuLieuTabLichSuDatLich($idKhachHang)
    {
        $arrayYear = $this->getArrayYearInDatLich($idKhachHang);
        $arrayDatLich = $this->getDatLichByYearArrayAndIdKhachHang($idKhachHang, $arrayYear);

        return $arrayDatLich;
    }

    public function getDuLieuTabLichSuDatLich1($idKhachHang)
    {
        $arrayYear = $this->getArrayYearInDatLich($idKhachHang);
        $arrayDatLich1 = $this->getDatLichByYearArrayAndIdKhachHang1($idKhachHang, $arrayYear);

        return $arrayDatLich1;
    }

    public function getDuLieuTabLichSuDatLich2($idKhachHang)
    {
        $arrayYear = $this->getArrayYearInDatLich($idKhachHang);
        $arrayDatLich2 = $this->getDatLichByYearArrayAndIdKhachHang2($idKhachHang, $arrayYear);

        return $arrayDatLich2;
    }

    public function getDuLieuTabLichSuDatLich3($idKhachHang)
    {
        $arrayYear = $this->getArrayYearInDatLich($idKhachHang);
        $arrayDatLich3 = $this->getDatLichByYearArrayAndIdKhachHang3($idKhachHang, $arrayYear);

        return $arrayDatLich3;
    }


    public function getArrayYearInDatLich($idKhachHang)
    {
        $listDatLich = $this->DatLich->getDatLichByIdKhachHang($idKhachHang);
        $arrayYear = array();
        foreach ($listDatLich as $datLich) {
            $year = date('Y', $datLich->thoigiandat);
            if (!in_array($year, $arrayYear)) {
                $arrayYear[] = $year;
            }
        }
        return $arrayYear;
    }

    public function getDatLichByYearArrayAndIdKhachHang($idKhachHang, $arrayYear)
    {
        $arrayDatLich = array();
        // $mytime = Carbon\::now();

        for ($i = 0; $i < count($arrayYear); $i++) {
            $thoiGian = Controller::getThoiGianTimestampDauNamVaCuoiNam($arrayYear[$i]);
            $listDatLichByTime = $this->DatLich->getDatLichByIdKhachHangAndThoiGianDat($idKhachHang, $thoiGian['startOfYear'], $thoiGian['endOfYear']);
            // $listDatLichByNhanVien = $this->DatLich->getDatLichByIdnhanvien($idKhachHang);


            foreach ($listDatLichByTime as $datLich) {
                $thoiGianDayYMD = date('Y-m-d', $datLich->thoigiandat);
                $datLich['thoiGianDayYMD'] = $thoiGianDayYMD;
                // $datLich['name'] = $listDatLichByNhanVien;
            }
            // dd($datLich['thoiGianDayYMD']);
            $dataDatLich = array(
                "year" => $arrayYear[$i],
                "arrayDatLich" => $listDatLichByTime,
                // "listDatLichByNhanVien" => $listDatLichByNhanVien,
            );

            $arrayDatLich[] = $dataDatLich;
        }

        return $arrayDatLich;
    }

    public function getDatLichByYearArrayAndIdKhachHang1($idKhachHang, $arrayYear)
    {
        $arrayDatLich1 = array();
        for ($i = 0; $i < count($arrayYear); $i++) {
            $thoiGian = Controller::getThoiGianTimestampDauNamVaCuoiNam($arrayYear[$i]);
            $listDatLichByTime = $this->DatLich->getDatLichByIdKhachHangAndThoiGianDat1($idKhachHang, $thoiGian['startOfYear'], $thoiGian['endOfYear']);

            foreach ($listDatLichByTime as $datLich) {
                $thoiGianDayYMD = date('Y-m-d', $datLich->thoigiandat);
                $datLich['thoiGianDayYMD'] = $thoiGianDayYMD;
            }

            $dataDatLich = array(
                "year" => $arrayYear[$i],
                "arrayDatLich" => $listDatLichByTime
            );
            $arrayDatLich1[] = $dataDatLich;
        }

        return $arrayDatLich1;
    }

    public function getDatLichByYearArrayAndIdKhachHang2($idKhachHang, $arrayYear)
    {
        $arrayDatLich2 = array();
        for ($i = 0; $i < count($arrayYear); $i++) {
            $thoiGian = Controller::getThoiGianTimestampDauNamVaCuoiNam($arrayYear[$i]);
            $listDatLichByTime = $this->DatLich->getDatLichByIdKhachHangAndThoiGianDat2($idKhachHang, $thoiGian['startOfYear'], $thoiGian['endOfYear']);

            foreach ($listDatLichByTime as $datLich) {
                $thoiGianDayYMD = date('Y-m-d', $datLich->thoigiandat);
                $datLich['thoiGianDayYMD'] = $thoiGianDayYMD;
            }

            $dataDatLich = array(
                "year" => $arrayYear[$i],
                "arrayDatLich" => $listDatLichByTime
            );
            $arrayDatLich2[] = $dataDatLich;
        }

        return $arrayDatLich2;
    }

    public function getDatLichByYearArrayAndIdKhachHang3($idKhachHang, $arrayYear)
    {
        $arrayDatLich3 = array();
        for ($i = 0; $i < count($arrayYear); $i++) {
            $thoiGian = Controller::getThoiGianTimestampDauNamVaCuoiNam($arrayYear[$i]);
            $listDatLichByTime = $this->DatLich->getDatLichByIdKhachHangAndThoiGianDat3($idKhachHang, $thoiGian['startOfYear'], $thoiGian['endOfYear']);

            foreach ($listDatLichByTime as $datLich) {
                $thoiGianDayYMD = date('Y-m-d', $datLich->thoigiandat);
                $datLich['thoiGianDayYMD'] = $thoiGianDayYMD;
            }

            $dataDatLich = array(
                "year" => $arrayYear[$i],
                "arrayDatLich" => $listDatLichByTime
            );
            $arrayDatLich3[] = $dataDatLich;
        }

        return $arrayDatLich3;
    }


    public function getDanhMucVaDichVuHome()
    {
        $limit = 6;
        $listDanhMuc = $this->DanhMuc->getAllDanhMucDichVu();

        $arrDichVu = array();
        foreach ($listDanhMuc as $item) {
            $dichVuByIdDanhMuc = $this->Dichvu->getDichVuByIdDanhMuc($item->id, $limit);
            $arrDichVu[] = $dichVuByIdDanhMuc;
        }


        $this->data['listDanhMuc'] = $listDanhMuc;
        $this->data['arrDichVu'] = $arrDichVu;
    }

    public function getDanhMucVaBlog()
    {
        $skip = 0;
        $task = 6;
        $limit = 6;
        $listDanhMucBlog = $this->DanhMuc->getDanhMucLimitBlog($limit);

        $arrBlog = array();
        foreach ($listDanhMucBlog as $item) {
            $BlogByIdDanhMuc = $this->Blog->getBlogByIdDanhmuc($item->id, $skip, $task);
            $arrBlog[] = $BlogByIdDanhMuc;
        }
        $this->data['listDanhMucBlog'] = $listDanhMucBlog;
        $this->data['arrBlog'] = $arrBlog;
    }

    public function getDanhMucVaDichVu()
    {
        $limit = 4;
        $limitdv = $limit + 5;
        $limitdm = $limit + 2;
        $listDanhMucDichVu1 = $this->DanhMuc->getDanhMucLimit($limitdm);
        $listDanhMuc = $this->DanhMuc->getDanhMucLimit($limit);


        $arrDichVu = array();
        foreach ($listDanhMuc as $item) {
            $dichVuByIdDanhMuc = $this->Dichvu->getDichVuByIdDanhMuc($item->id, $limitdv);
            $arrDichVu[] = $dichVuByIdDanhMuc;
        }


        $this->data['listDanhMuc'] = $listDanhMuc;
        $this->data['listDanhMucDichVu1'] = $listDanhMucDichVu1;
        $this->data['arrDichVu'] = $arrDichVu;
    }


    public function getLieuTrinhDetailByIdLieuTrinh($id)
    {
        $dataLieuTrinhChiTiet = $this->LieuTrinhChiTiet->getLieuTrinhChiTietInnerJoin($id);
        $data['dataLieuTrinhChiTiet'] = $dataLieuTrinhChiTiet;
        if ($dataLieuTrinhChiTiet !== null) {
            $data['dataLieuTrinh'] = $this->LieuTrinh->find($dataLieuTrinhChiTiet[0]->idlieutrinh);
        }
        return response()->json($data);
    }

    public function huyLieuTrinh(Request $request)
    {
        // check ???? ho??n th??nh 1 d???ch v??? s??? kh??ng ???????c hu???
        $hasHoaDon = $this->HoaDon->findHoaDonByIdLieuTrinh($request->idlieutrinh);
        if (count($hasHoaDon) > 0) {
            return response()->json([
                'success' => false,
                'titleMess' => '???? x???y ra l???i !',
                'textMess' => 'Li???u tr??nh ???? thanh to??n kh??ng th??? hu???!'
            ]);
        } else {
            if ($request->idlieutrinh) {
                $res = $this->LieuTrinh->update($request->idlieutrinh, ['trangthai' => 2]);
                if ($res) {
                    return response()->json([
                        'success' => true,
                        'titleMess' => 'Th??nh c??ng!',
                        'textMess' => '???? hu??? li???u tr??nh!'
                    ]);

                }
            }
        }

    }

    public static function findNameDichVuByIdLieuTrinh($id)
    {
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
                'titleMess' => '???? x???y ra l???i !',
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
                'titleMess' => '???? x???y ra l???i !',
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
                    $textMess = 'S??? ??i???n tho???i kh??ng h???p l???';
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
                            $textMess = 'B???n h??y ch???n khung gi??? tr?????c 10 ph??t nh??, xin c???m ??n.';
                        }
                    }
                }

                $thu = $this->getThuByNgay($request->ngay);
                $lichKhachDat = $this->Lich->getLichActive($thu, $request->idCoSo, $request->gio);
                if ($error == false) {
                    if ($lichKhachDat == null) {
                        $error = true;
                        $textMess = 'Khung gi??? b???n ch???n ???? ????ng ! H??y ch???n gi??? kh??c b???n nh?? xin c???m ??n ';
                    }
                }

                if ($error == false) {
                    $soLanKhachDatByTimeStamp = $this->DatLich->getSoLanKhachDatByTimeStamp($request->thoiGianDat);
                    if (intval($soLanKhachDatByTimeStamp) >= intval($lichKhachDat->soluongkhach)) {
                        $error = true;
                        $textMess = 'Khung gi??? b???n ch???n ???? ?????y. H??y ch???n khung gi??? kh??c b???n nh??';
                    }
                }

                if ($error == false) {
                    if ($request->idNhanVien > 0) {
                        $nhanVien = $this->NhanVien->findNhanVienByIdAndCoSo($request->idNhanVien, $request->idCoSo);
                        if ($nhanVien) {
                            // check tr???ng th??i nh??n vi??n
                            if ($nhanVien->trangthai != Controller::TRANGTHAI_NHANVIEN_HOATDONG) {
                                $error = true;
                                $ngayYMD = Carbon::createFromFormat('Y-m-d', $request->ngay)->format('d-m-Y');
                                $textMess = 'Chuy??n vi??n ??ang b???n. Vui l??ng ch???n chuy??n vi??n kh??c b???n nh?? !';
                            }

                            // check nhan vien
                            $nhanVienRanh = $this->checkNhanVienRanh($request->thoiGianDat, $nhanVien->id);
                            if (!$nhanVienRanh) {
                                $error = true;
                                $ngayYMD = Carbon::createFromFormat('Y-m-d', $request->ngay)->format('d-m-Y');
                                $textMess = 'Chuy??n vi??n b???n ch???n v???a c?? l???ch v??o ' . $ngayYMD . ' ' . $request->gio . '. H??y ch???n gi??? kh??c ho???c chuy??n vi??n kh??c b???n nh??.';
                            }
                        } else {
                            $error = true;
                            $textMess = 'Kh??ng t??m th???y nh??n vi??n';
                        }
                    } else {
                        if ($request->idNhanVien != 0) { // 0 = Spa ch???n nh??n vi??n
                            $error = true;
                            $textMess = 'Vui l??ng th??? l???i trong ??t ph??t nh?? !.';
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
                        $textMess = '?????t l???ch kh??ng th??nh c??ng vui l??ng th??? l???i';
                    } else {

                        // Ti???n h??nh ?????t l???ch
                        $datLich['typez'] = 'dat-lich';
                        event(
                            $e = new SendDatLich($datLich)
                        );
                    }
                }

                if ($error == false) {
                    $sdt = '+84' . substr($request->soDienThoai, 1, strlen($request->soDienThoai));
                    $message = $this->makeMessageCamOnDatLich($request->idCoSo, $request->ngay, $request->gio);
                    $this->freeSMSController->sendSingleMessage($sdt, $message);

                    $response = Array(
                        'success' => true,
                        'datLich' => $datLich,
                        'khachHang' => $khachHang,
                        'ngay' => $request->ngay,
                        'gio' => $request->gio,
                        'request' => $request,
                        'sdt' => $sdt,
                    );
                } else {
                    $response = Array(
                        'success' => false,
                        'titleMess' => '???? x???y ra l???i !',
                        'textMess' => $textMess,
                    );
                }

            }

            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'titleMess' => '???? x???y ra l???i !',
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
                            'titleMess' => '???? x???y ra l???i !',
                            'textMess' => 'Kh??ng t??m th???y s??? ??i???n tho???i. Vui l??ng ????ng k?? l???i'
                        );
                    }
                    session(['khachHang' => $khachHang]);
                } else {
                    $response = Array(
                        'success' => false,
                        'titleMess' => '???? x???y ra l???i !',
                        'textMess' => 'S??? ??i???n tho???i kh??ng ????ng ?????nh d???ng',
                        'request' => $request
                    );
                }
            }

            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'titleMess' => '???? x???y ra l???i !',
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
                        'titleMess' => '???? x???y ra l???i !',
                        'textMess' => $errors['mess']
                    );
                }
            }

            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'titleMess' => '???? x???y ra l???i !',
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
                            'titleMess' => '???? x???y ra l???i !',
                            'textMess' => 'M?? x??c nh???n OTP kh??ng ????ng. Vui l??ng nh???p l???i'
                        );
                    }
                } else {
                    $response = Array(
                        'success' => false,
                        'titleMess' => '???? x???y ra l???i !',
                        'textMess' => $errors['mess']
                    );
                }
            }

            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'titleMess' => '???? x???y ra l???i !',
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
            $mess = 'OTP kh??ng ????ng ?????nh d???ng';
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
                'titleMess' => '???? x???y ra l???i !',
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
        $currentTimestamp = time() * 1000; // l???y timestamp * 1000 v?? s??? d???ng b??n js
        $timeOTPNotValid = $currentTimestamp + 60000; // 60s sau
        session(['timeOTPNotValid' => $timeOTPNotValid]);

        return $timeOTPNotValid;
    }

    public function sendOTPSMS(Request $request)
    {
        try {
            if ($request->ajax()) {
                $OTP = $this->makeOTP();

                // V?? d??? sdt: 0868970582 => +84868970582
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
                'titleMess' => '???? x???y ra l???i !',
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
                                    'titleMess' => '???? x???y ra l???i !',
                                    'textMess' => 'T??i kho???n c???a b???n b??? ch??a k??ch ho???t ho???c b??? ch???n. Vui l??ng li??n h??? ????? ???????c h??? tr???'
                                );
                            }
                        } else {
                            $response = Array(
                                'success' => false,
                                'titleMess' => '???? x???y ra l???i !',
                                'textMess' => 'M???t kh???u kh??ng ch??nh x??c'
                            );
                        }
                    } else {
                        $response = Array(
                            'success' => false,
                            'titleMess' => '???? x???y ra l???i !',
                            'textMess' => 'T??i kho???n kh??ch h??ng kh??ng t???n t???i'
                        );
                    }
                } else {
                    $response = Array(
                        'success' => false,
                        'titleMess' => '???? x???y ra l???i !',
                        'textMess' => $errors['mess']
                    );
                }
            }

            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'titleMess' => '???? x???y ra l???i !',
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
                    // Sdt ch??a active ho???c ch??a t???o
                    // G???i OTP b???ng SMS
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
                'titleMess' => '???? x???y ra l???i !',
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
                'titleMess' => '???? x???y ra l???i !',
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
            $mess = 'S??? ??i???n tho???i kh??ng ????ng ?????nh d???ng';
        } else if (strlen($request->password) != 6) {
            $type = true;
            $mess = 'M???t kh???u kh??ng ????ng ?????nh d???ng';
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
    /**
     * C???p nh???t th??ng tin t??i kho???n
     */
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
                return redirect("/thong-tin-tai-khoan")->with("thongbaoprofile", "C???p nh???t th??nh c??ng");
            } else {
                $profile = [
                    'name' => $request->username,
                    'email' => $request->email,
                ];
                $this->KhachHang->update(session()->get("khachHang")->id, $profile);
                $this->UpdateSessionInFor();
                return redirect("/thong-tin-tai-khoan")->with("thatbaiprofile", "???nh kh??ng ????ng ?????nh d???ng.");
            }
        } else {
            $profile = [
                'name' => $request->username,
                'email' => $request->email,
            ];
            $this->KhachHang->update(session()->get("khachHang")->id, $profile);
            $this->UpdateSessionInFor();
            return redirect("/thong-tin-tai-khoan")->with("thongbaoprofile", "C???p nh???t th??nh c??ng");
        }

    }

    public function UpdateSessionInFor()
    {
        $infokh = $this->KhachHang->find(session()->get("khachHang")->id);
        session()->put("khachHang", $infokh);
        return true;
    }

    public function getBanner()
    {
        $listBanner = $this->Banner->getBannerHien();
        return $listBanner;
    }

    public function getDichVuUaChuongThangTruoc($skip, $take)
    {
        $date = \Carbon\Carbon::now();
        $lastMonth = $date->subMonth(1);
        $startOfMonth = $lastMonth->startOfMonth()->toDateTimeString();
        $endOfMonth = $lastMonth->endOfMonth()->toDateTimeString();
        // Get list id dich v??? s??? d???ng nhi???u nh???t trong th??ng
        $listHDCT = $this->HoaDonChiTiet->getHoaDonCTByTime($startOfMonth, $endOfMonth, $skip, $take);

        // Get list d???ch v??? theo id
        foreach ($listHDCT as $hoaDonChiTiet) {
            $hoaDonChiTiet['dichvu'] = $this->Dichvu->getDichvuAndDanhMucById($hoaDonChiTiet->idlienquan);
        }
        return $listHDCT;
    }

    public function getDichVuTrangHome()
    {
        $take = 5;
        $skip = 0;
        $listDichVu = $this->getDichVuUaChuongThangTruoc($skip, $take);
        $this->data['listDichVuUaChuong'] = $listDichVu;
        $this->data['listDichVuGiamGia'] = $this->Dichvu->getDichVuGiamGiaAndDanhMuc($take, $skip);

    }

    public function getDuLieuBoxBlog() {
        $blog      = $this->Blog->getBlog1();
        $getBlog2  = $this->Blog->getBlog2();
        $blog3     = $this->Blog->getLastWeek1();
        $blog4     = $this->Blog->getLastWeek2();

        $this->data['blog']      = $blog;
        $this->data['getBlog2']  = $getBlog2;
        $this->data['blog3']     = $blog3;
        $this->data['blog4']     = $blog4;
    }

}
