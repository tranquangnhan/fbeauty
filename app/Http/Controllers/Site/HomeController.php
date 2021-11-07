<?php

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Repositories\SanPham\SanPhamRepository;
use App\Repositories\Blog\BlogRepository;
use Illuminate\Http\Request;
use App\Repositories\Coso\CoSoRepository;
use App\Repositories\DanhMuc\DanhMucRepository;
use App\Repositories\DichVu\DichVuRepository;
use App\Repositories\NhanVien\NhanVienRepository;
use App\Repositories\Lich\LichRepository;
use App\Repositories\DatLich\DatLichRepository;
use App\Repositories\KhachHang\KhachHangRepository;
use App\Models\Admin\KhachHangModel;
use App\Models\Admin\DatLichModel;
use Carbon\Carbon;
use App\Events\SendDatLich;
use App\Http\Requests\KhachHang;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\loginSiteRequest;

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
        SanPhamRepository $SanPham
        )
    {
        $this->Coso = $Coso;
        $this->DanhMuc = $DanhMuc;
        $this->Dichvu = $Dichvu;
        $this->NhanVien = $NhanVien;
        $this->Lich = $Lich;
        $this->DatLich = $DatLich;
        $this->KhachHang = $KhachHang;
        $this->Blog = $Blog;
        $this->SanPham = $SanPham;

        $listCoSo = $this->Coso->getAll();
        $listDanhMucDichVu = $this->getDichVuTheoDanhMuc();

        $this->data = array(
            'listCoSo' => $listCoSo,
            'listDanhMucDichVu' => $listDanhMucDichVu,
            'pathActive' => '',
        );
    }

    public function index() {
        $sanPham   = $this->SanPham->getAll();
        $blog      = $this->Blog->getBlog1();
        $blog2     = $this->Blog->getBlog2();

        $this->data['sanPham']  = $sanPham;
        $this->data['blog']     = $blog;
        $this->data['blog2']    = $blog2;
        $this->data['pathActive']     = 'trang-chu';

        return view("Site.pages.home", $this->data);
    }

    public function viewSanPham() {
        $this->data['pathActive']       = 'san-pham';
        $this->data['namePage']         = 'Sản phẩm';
        $this->data['breadcrumbArray']  = [
            ['link' => '', 'name' => 'Sản phẩm'],
        ];

        return view("Site.pages.sanpham", $this->data);
    }

    public function viewSanPhamChiTiet() {
        $this->data['pathActive']          = 'san-pham';
        $this->data['namePage']            = 'Sản phẩm chi tiết';
        $this->data['breadcrumbArray']     = [
            ['link' => '/san-pham', 'name' => 'Sản phẩm'],
            ['link' => '', 'name' => 'Tên sản phẩm'],
        ];

        return view("Site.pages.sanpham-chitiet", $this->data);
    }

    public function viewGioHang() {
        $this->data['pathActive']          = 'san-pham';
        $this->data['namePage']            = 'Giỏ hàng';
        $this->data['breadcrumbArray']     = [
            ['link' => '/san-pham', 'name' => 'Sản phẩm'],
            ['link' => '', 'name' => 'Giỏ hàng'],
        ];

        return view("Site.pages.giohang", $this->data);
    }

    public function viewThanhToan() {
        $this->data['pathActive']          = 'san-pham';
        $this->data['namePage']            = 'Thanh toán';
        $this->data['breadcrumbArray']     = [
            ['link' => '/san-pham', 'name' => 'Sản phẩm'],
            ['link' => '/gio-hang', 'name' => 'Giỏ hàng'],
            ['link' => '', 'name' => 'Thanh toán'],
        ];

        return view("Site.pages.thanhtoan", $this->data);
    }

    public function viewBaiViet() {
        $this->data['pathActive']          = 'bai-viet';
        $this->data['namePage']            = 'Bài viết';
        $this->data['breadcrumbArray']     = [
            ['link' => '/bai-viet', 'name' => 'Bài viết'],
        ];

        return view("Site.pages.baiviet", $this->data);
    }

    public function viewBaiVietChiTiet() {
        $this->data['pathActive']          = 'bai-viet';
        $this->data['namePage']            = 'Tên Bài viết';
        $this->data['breadcrumbArray']     = [
            ['link' => '/bai-viet', 'name' => 'Bài viết'],
            ['link' => '', 'name' => 'Tên Bài viết'],
        ];

        return view("Site.pages.baivietchitiet", $this->data);
    }

    public function viewDichVu() {
        $this->data['pathActive']          = 'dich-vu';
        $this->data['namePage']            = 'Dịch Vụ';
        $this->data['breadcrumbArray']     = [
            ['link' => '', 'name' => 'Dịch Vụ'],
        ];

        return view("Site.pages.dichvu", $this->data);
    }

    public function viewDichVuChiTiet() {
        $this->data['pathActive']          = 'dich-vu';
        $this->data['namePage']            = 'Dịch Vụ';
        $this->data['breadcrumbArray']     = [
            ['link' => '/dich-vu', 'name' => 'Dịch Vụ'],
            ['link' => '', 'name' => 'Tên Dịch Vụ'],

        ];

        return view("Site.pages.dichvuchitiet", $this->data);
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

    public function datLich(Request $request) {
        try {
            if ($request->ajax())
            {
                $error = false;

                if ($request->soDienThoai == '') {
                    $error = true;
                    $textMess = 'Số điện thoại không hợp lệ';
                } else {
                    $khachHang = $this->KhachHang->getBySdt($request->soDienThoai);
                    if ($khachHang == null) {
                        $khachHang = $this->createNewKhachHang($request->soDienThoai);
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
                }

                if ($error == false) {
                    $datLich = $this->createNewDatLich($request, $khachHang->id);
                    if (!$datLich) {
                        $error = true;
                        $textMess = 'Đặt lịch không thành công vui lòng thử lại';
                    } else {
                        event(
                            $e = new SendDatLich($datLich)
                        );
                    }
                }

                if ($error == false) {
                    $response = Array(
                        'success' => true,
                        'datLich' => $datLich,
                        'khachHang' => $khachHang,
                        'ngay' => $request->ngay,
                        'gio' => $request->gio,
                        'nhanVien' => $nhanVien,
                        'nhanVienRanh' => $nhanVienRanh
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

    public function newPassword(Request $request) {
        try {
            if ($request->ajax())
            {
                $errors = $this->checkLoginSiteValid($request);

                if ($errors['type'] == false) {
                    $khachHang = $this->KhachHang->checkLoginSite($request->sdt);

                    if ($khachHang) {
                        if ($khachHang->active == Controller::KHACHHANG_DA_ACTIVE) {
                            $this->updateKhachHang($khachHang->id, $request->password);
                            $response = Array (
                                'success' => true,
                                'sdt' => $request->sdt,
                                'password' => $request->password,
                                'type' => 'update'
                            );
                        } else {
                            $this->updateKhachHangActive($khachHang->id, $request->password);
                            $response = Array (
                                'success' => true,
                                'sdt' => $request->sdt,
                                'password' => $request->password,
                                'type' => 'update active'
                            );
                        }
                    } else {
                        $khachHang = $this->createKhachHangActive($request->sdt, $request->password);
                        $response = Array (
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

    public function checkOTP(Request $request) {
        try {
            if ($request->ajax())
            {
                $errors = $this->checkOTPValid($request->OTP);
                if ($errors['type'] == false) {
                    if (session('OTP') == $request->OTP) {
                        $response = Array (
                            'success' => true,
                            'OTP' => $request->OTP,
                            'SOTP' => session('OTP')
                        );

                        session()->forget('OTP');
                    } else {
                        $response = Array (
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

    public function checkOTPValid($OTP) {
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

    public function removeOTP(Request $request) {
        try {
            if ($request->ajax())
            {
                session()->forget('OTP');
                session()->forget('timeOTPNotValid');

                $response = Array (
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

    public function sendOTPSMS(Request $request) {
        try {
            if ($request->ajax())
            {
                $currentTimestamp = time() * 1000; // lấy timestamp * 1000 vì sử dụng bên js
                $timeOTPNotValid = $currentTimestamp + 60000; // 60s sau
                session(['timeOTPNotValid' => $timeOTPNotValid]);

                $OTP = random_int(100000, 999999);;
                session(['OTP' => $OTP]);

                $response = Array (
                    'success' => true,
                    'sdt' => $request->sdt,
                    'OTP' => $OTP,
                    'timeOTPNotValid' => $timeOTPNotValid
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

    public function logoutSite() {
        session()->forget('khachHang');
        return redirect()->back();
    }

    public function login(Request $request) {
        try {
            if ($request->ajax())
            {
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

    public function checkIssetUser(Request $request) {
        try {
            if ($request->ajax())
            {
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

    public function getNhanVienTam($id) {
        return  $this->NhanVien->getNhanVienByIdCoSo( $id);
    }

    public function checkNhanVienRanh($thoiGianDat, $idNhanVien) {
        $nhanVien = $this->DatLich->findDatLichCuaNhanVienTheoThoiGian($thoiGianDat, $idNhanVien);
        if (!$nhanVien) {
            $check = true;
        } else {
            $check = false;
        }
        return $check;
    }

    public function getDichVuTheoDanhMuc() {
        $listDanhMuc = $this->DanhMuc->findDanhMucByIdLoai(Controller::LOAI_DANHMUC_DICHVU);

        foreach ($listDanhMuc as $row) {
            $dichVu = $this->Dichvu->getDichVuTheoDanhMuc($row->id);
            $row->listDichVu = $dichVu;
        }

        return $listDanhMuc;
    }

    public function layDatLichCungNgay($request) {
        $allDatLich = $this->DatLich->getAllCungCoSo($request->idCoSo);

        $datLichOfDay = array();
        foreach ($allDatLich as $row) {
            $dateMounthYear = date('Y-m-d', $row->thoigiandat);
            if ($dateMounthYear == $request->ngay) {
                $datLichOfDay[] = $row;
            }
        }

        return $datLichOfDay;
    }

    public function getLimitTime() {
        $carbonNow = Carbon::now();
        $limitTime = $carbonNow->addMinute($this->limitTimeNum);
        $limitTimeFormat = $limitTime->toTimeString();
        return $limitTimeFormat;
    }

    public function getCurrentDatet() {
        $carbonNow = Carbon::now();
        $currentDate = $carbonNow->toDateString();
        return $currentDate;
    }

    public function getThuByNgay($ngay) {
        $newCarbon = new Carbon($ngay);
        $thu = $newCarbon->dayOfWeek;

        return $thu;
    }

    public function checkTrangThaiLich($thu, $idCoSo, $gio) {
        $lich = $this->Lich->getLichActive($thu, $idCoSo, $gio);
        if ($lich) {
            $active = true;
        } else {
            $active = false;
        }
        return $lich;
    }

    public function getDataKhungGio(Request $request) {
        try {
            if ($request->ajax())
            {
                $Lich = $this->Lich->getLichByThuAndCoSo($request->thu, $request->idCoSo);
                $datLichOfDay = $this->layDatLichCungNgay($request);

                // Set default = 0
                foreach ($Lich as $rowLich) {
                    $rowLich->soKhachDaDat = 0;
                    $rowLich->coNhanVien = 'true';
                }

                if ($request->idNhanVien > 0)
                {
                    $this->tinhKhungGioCoIdNhanVien($datLichOfDay, $Lich, $request);
                }
                else
                {
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

    public function tinhKhungGioCoIdNhanVien($datLichOfDay, $Lich, $request) {
        foreach ($datLichOfDay as $rowDatLichOfDate) {
            $time = date('H:i:s', $rowDatLichOfDate->thoigiandat);
            foreach ($Lich as $rowLich) {
                if ($request->idNhanVien == $rowDatLichOfDate->idnhanvien) {
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

    public function tinhKhungGioKhongCoIdNhanVien($datLichOfDay, $Lich) {
        foreach ($datLichOfDay as $rowDatLichOfDate) {
            $time = date('H:i:s', $rowDatLichOfDate->thoigiandat);
            foreach ($Lich as $rowLich) {
                if ($rowLich->gio == $time) {
                    $rowLich->soKhachDaDat++;
                }
            }
        }
    }

    public function createNewKhachHang($sdt) {
        $khachHang = new KhachHangModel;
        $khachHang->sdt = $sdt;
        $khachHang->active = Controller::KHACHHANG_CHUA_ACTIVE;
        $khachHang->save();

        return $khachHang;
    }

    public function createKhachHangActive($sdt, $password) {
        $khachHang = new KhachHangModel;
        $khachHang->sdt = $sdt;
        $khachHang->password = bcrypt($password);
        $khachHang->active = Controller::KHACHHANG_DA_ACTIVE;
        $khachHang->save();

        return $khachHang;
    }

    public function updateKhachHang($id, $password) {
        $khachHang = KhachHangModel::find($id);
        $khachHang->password = bcrypt($password);
        $khachHang->save();
    }

    public function updateKhachHangActive($id, $password) {
        $khachHang = KhachHangModel::find($id);
        $khachHang->password = bcrypt($password);
        $khachHang->active = Controller::KHACHHANG_DA_ACTIVE;
        $khachHang->save();
    }

    public function createNewDatLich($request, $idKhachHang) {
        $datLich = new DatLichModel;
        $datLich->idcoso = $request->idCoSo;
        $datLich->iddichvu = $request->listDichVu;
        $datLich->idkhachhang = $idKhachHang;
        $datLich->idnhanvien = $request->idNhanVien;
        $datLich->thoiGianDat = $request->thoiGianDat;
        $datLich->save();
        return $datLich;
    }

    public function checkLoginSiteValid($request) {
        $type = false;
        $mess = '';

        $pattern = "/((09|03|07|08|05)+([0-9]{8})\b)/";
        if (preg_match($pattern, $request->sdt) == 0) {
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
}
