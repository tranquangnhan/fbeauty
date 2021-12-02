<?php

use App\Http\Controllers\Admin\CoSoController;
use App\Http\Controllers\Admin\DangNhapAdminController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\DonHangController;

use App\Http\Controllers\Admin\DichVuController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DonHangchitietController;
use App\Http\Controllers\Admin\GiamGiaController;
use App\Http\Controllers\Admin\HoaDonChiTietController;
use App\Http\Controllers\Admin\HoaDonController;
use App\Http\Controllers\Admin\KhachHangController;
use App\Http\Controllers\Admin\LichController;
use App\Http\Controllers\Admin\LieuTrinhController;
use App\Http\Controllers\Admin\SanPhamController;
use App\Http\Controllers\Admin\NhanVienController;
use App\Http\Controllers\Admin\SanPhamChiTietController;
use App\Http\Controllers\Admin\ThongkeController;
use App\Http\Controllers\Admin\DatLichController;
use App\Http\Controllers\Admin\DatLichRemakeController;
use App\Http\Controllers\Admin\LienHeController;

use App\Http\Controllers\Site\GioHangController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\YeuThichController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
/**
 * Backend
 *
 */
Route::get('/quantri/login', [DangNhapAdminController::class, 'index']);
Route::post('/quantri/login', [DangNhapAdminController::class, 'checkin']);
Route::get('/quantri/logout', [DangNhapAdminController::class, 'logout']);
Route::group(['prefix' => 'quantri', 'middleware' => 'phanquyen'], function () {
    Route::get('/getDoanhThuByDay/{day}', [ThongkeController::class, "getHoaDonByDayAjax"]);
    Route::get('/getDoanhThuHoaDonVaDonHang/{type}/{numData}/{date}', [ThongkeController::class, "getDoanhThuHoaDonVaDonHangAjax"]);
    Route::get('/', [ThongkeController::class, "index"]);
    Route::resource('danhmuc', DanhMucController::class);
    Route::resource('sanpham', SanPhamController::class);

    Route::resource('dichvu', DichVuController::class);
    Route::resource('khachhang', KhachHangController::class);
    Route::resource('blog', BlogController::class);

    Route::get('/sanpham/detail/{id}/create', [SanPhamChiTietController::class, 'createDetailProduct']);
    Route::post('/sanpham/detail/{id}/del', [SanPhamChiTietController::class, 'destroy']);
    Route::post('/sanpham/detail/{id}/store', [SanPhamChiTietController::class, 'postDetailProduct']);

    Route::get('/sanpham/detail/{id}/edit', [SanPhamChiTietController::class, 'editDetailProduct']);
    Route::post('/sanpham/detail/{id}/edit', [SanPhamChiTietController::class, 'updateDetailProduct']);

    Route::resource('nhanvien', NhanVienController::class);
    Route::post('nhanvien/uploadKH/{id}', [NhanVienController::class, 'upImgKhachHang']);
    Route::get('nhanvien/kiemtraemail/{name}', [NhanVienController::class, "CheckEmailTonTai"]);
    Route::get('nhanvien/kiemtrasdt/{name}', [NhanVienController::class, "CheckSdtTonTai"]);
    Route::get("nhanvien/xoaImgKH/{id}/phantu/{idAnh}", [NhanVienController::class, "XoaImgKH"]);
    Route::get("nhanvien/imgcustomer/pictures", [NhanVienController::class, "AllImgKH"]);

    Route::resource('hoadon', HoaDonController::class);
    Route::get('hoadon/trangthaithanhtoan/{id}', [HoaDonController::class, "trangthaithanhtoan"]);
    Route::resource('hoadonchitiet', HoaDonChiTietController::class);

    Route::resource('datlich', DatLichController::class);
    Route::resource('lich', LichController::class);
    Route::get('lich/{id}/thungay/{idthu}', [LichController::class, 'showlich']);
    Route::get('lich/uplich/{id}', [LichController::class, 'UpLich']);
    Route::get('lich/uplichAll/{id}', [LichController::class, 'uplichAll']);
    Route::post('lich/updateTime/{id}', [LichController::class, 'updateTime']);
    // quản lý cơ sở
    Route::resource('coso', CoSoController::class);
    Route::post('coso/select-delivery', [CoSoController::class,'select_delivery']);
    Route::post('coso/{id}/edit/select-delivery', [CoSoController::class,'select_delivery1']);
    Route::get('coso/changecoso/{id}', [CoSoController::class,'changeCoSo']);

    Route::resource('donhang', DonHangController::class);
    Route::resource('donhangchitiet', DonHangController::class);
    Route::get('/donhangchitiet/detail/{id}/edit', [DonHangchitietController::class, 'editDetailDonHang']);
    Route::post('/donhangchitiet/detail/{id}/edit', [DonHangchitietController::class, 'updateDetailDonHang']);
    // quản lý giảm giá
    Route::resource('giamgia', GiamGiaController::class);

    Route::resource('lieutrinh', LieuTrinhController::class);

    Route::resource('lienhe', LienHeController::class);

    Route::put('editnamedv', [LieuTrinhController::class,'editNameDv']);
    Route::post('editimglieutrinh', [LieuTrinhController::class,'editImgLieuTrinh']);

    Route::get('khachhang/detail/{id}', [KhachHangController::class, 'detailKhachHang']);
    Route::post('khachhang/themlieutrinh/{id}/store', [KhachHangController::class, 'storeLieuTrinh']);
    Route::delete('khachhang/xoalieutrinh/{id}/delete', [KhachHangController::class, 'delLieuTrinh']);

    Route::get('khachhang/lieutrinh/{id}/edit', [LieuTrinhController::class, 'editLieuTrinhChiTiet']);
    Route::patch('khachhang/lieutrinh/{id}/update', [KhachHangController::class, 'updateLieuTrinh']);

    Route::resource('datlichremake', DatLichRemakeController::class);
    Route::get('changeStatusDatLich/{id}/{status}', [DatLichRemakeController::class, "changeStatusDatLich"]);
    Route::get('getDuLieuDatLichChoCalendar/{ngay}', [DatLichRemakeController::class, "getDuLieuDatLichChoCalendar"]);

    /**
     *1: Lấy DỊch vụ đến Hóa đơn
     * 2: Lấy Sp chi tiết đến hóa Đơn
     * 3: Lấy hóa đơn chi tiết
     * 4: lấy sản phẩm chi tiết
     * 5: Lấy dịch vụ
     * 6: Lấy giảm giá
     * 7: Xét điều kiện giảm giá
     * 8:Cập nhật giá
     * 9:Xóa
     * 10:Thêm sản phẩm vào hóa đơn chi tiết
     * 11:Thêm dịch vụ vào hóa đơn chi tiết
     * 12: Cập nhật số lượng
     */
    Route::get('/getDichVu', [DichVuController::class, 'getDichVuToHoaDon']);
    Route::get('/getSanPham', [SanPhamChiTietController::class, 'getSanPhamToHoaDon']);
    Route::get('hoadon/{id}/edit/getHoaDonChiTiet', [HoaDonChiTietController::class, 'getHoaDonChiTiet']);
    Route::get('hoadon/{id}/edit/sanphamchitiet/{idsp}', [SanPhamChiTietController::class, 'getSanPhamChiTietToHoaDon']);
    Route::get('hoadon/{id}/edit/dichvu/{idsp}', [DichVuController::class, 'getDichVuByIdToHoaDon']);
    Route::get('/getgiamgia/{idgiamgia}', [HoaDonController::class, 'getGiamGiaToHoaDon']);
    Route::get('hoadon/{id}/edit/discount/{name}/thanhtien/{tien}', [HoaDonController::class, 'ApDungGiamGia']);
    Route::get('hoadon/{id}/edit/capnhatgia/{tien}/tongtien/{tongtien}', [HoaDonController::class, 'CapNhatGia']);
    Route::get('hoadon/{id}/edit/xoahoadonchitiet/{idhdct}', [HoaDonController::class, 'XoaHoaDonChiTiet']);
    Route::get('hoadon/{id}/edit/themsanpham/{idsp}', [HoaDonChiTietController::class, 'ThemSanPhamVaoHoaDon']);
    Route::get('hoadon/{id}/edit/themdichvu/{iddv}', [HoaDonChiTietController::class, 'ThemDichVuVaoHoaDon']);
    Route::get('hoadon/{id}/edit/capnhatsoluong/{idhdct}/soluong/{soluong}', [HoaDonChiTietController::class, 'CapNhatSoLuong']);
    Route::get('hoadon/{id}/edit/huygiamgia/{tien}', [HoaDonChiTietController::class, 'HuyGiamGia']);
    // nhan add hoá đơn by id liệu trình
    Route::get('hoadon/addhoadonbylieutrinh/{id}/store', [HoaDonController::class, 'addHoaDonByIdLieuTrinh']);
});

Route::group(['prefix' => '/'], function () {
    Route::get('', [HomeController::class, "index"]);
    Route::get('trang-chu', [HomeController::class, "index"]);
    Route::get('san-pham', [HomeController::class, "viewSanPham"]);
    Route::get('san-pham/soluong/{id}', [HomeController::class, "getSanPham"]);
    Route::get('san-pham/chi-tiet/{id}', [HomeController::class, "viewSanPhamChiTiet"]);
    Route::get('san-pham/checkyeuthich/{id}', [YeuThichController::class, "getSanPhamYeuThich"]);
    Route::get('getyeuthichsps', [YeuThichController::class, "getAllSPYeuThich"]);
    Route::get('addyeuthichsp/{id}', [YeuThichController::class, "AddSanPhamYeuThich"]);

    Route::get('gio-hang', [HomeController::class, "viewGioHang"]);
    Route::get('thanh-toan', [HomeController::class, "viewThanhToan"]);
    Route::get('bai-viet', [HomeController::class, "viewBaiViet"]);
    Route::get('bai-viet/{id}', [HomeController::class, "viewBaiVietChiTiet"]);
    Route::get('dich-vu', [HomeController::class, "viewDichVu"]);
    Route::get('tim-kiem', [HomeController::class, "viewTimKiem"]);
    Route::get('lien-he', [HomeController::class, "viewLienHe"]);
    Route::get('gioi-thieu', [HomeController::class, "viewGioiThieu"]);
    Route::get('thong-tin-tai-khoan', [HomeController::class, "viewProfileUser"]);

    Route::get('dich-vu/{slug}', [HomeController::class, "viewDichVuChiTiet"]);
    Route::get('danh-muc/{slug}', [HomeController::class, "viewDanhMucgetDichvu"]);
    Route::get('nhanviencuacoso/{id}', [HomeController::class, "getNhanVienByIdCoSo"]);
    Route::get('getDataKhungGio', [HomeController::class, "getDataKhungGio"]);
    Route::post('datLich', [HomeController::class, "datLich"]);
    Route::post('site-login', [HomeController::class, "login"]);
    Route::get('site-logout', [HomeController::class, "logoutSite"]);
    Route::post('sendOTPSMS', [HomeController::class, "sendOTPSMS"]);
    Route::get('removeOTP', [HomeController::class, "removeOTP"]);
    Route::post('checkOTP', [HomeController::class, "checkOTP"]);
    Route::post('getBlogsPagi', [HomeController::class, "getBlogsPagi"]);
    Route::post('skipCreatePassword', [HomeController::class, "skipCreatePassword"]);
    Route::post('newPassword', [HomeController::class, "newPassword"]);
    Route::post('checkIssetUser', [HomeController::class, "checkIssetUser"]);
    /**
     *Gio hang
     */
    Route::get('showdonhangandgiohang', [GioHangController::class, "ShowGioHang"]);
    Route::get('themsanphamgiohang/{id}', [GioHangController::class, "ThemGioHang"]);
    Route::get('xoasanphamgiohang/{id}', [GioHangController::class, "XoaSanPhamGioHang"]);
    Route::get('tangsoluong/{id}', [GioHangController::class, 'TangSoLuong']);
    Route::get('giamsoluong/{id}', [GioHangController::class, 'GiamSoLuong']);
    Route::get('idsanphamchitiet/{id}/soluong/{soluong}', [GioHangController::class, 'CapNhatSoLuong']);
    Route::get('/themsanphamgiohangchitiet/{idsanpham}/soluongsanpham/{nhapsoluong}', [GioHangController::class, 'ThemGioHangChiTiet']);
    Route::get('xoatatcasanpham', [GioHangController::class, 'xoatatcasanpham']);
    Route::get('insergiohangdatawherelogin', [GioHangController::class, 'InserGioHangDataSession']);
    Route::get('CheckGiamGia/{name}/tongthangtoan/{gia}', [GiamGiaController::class, 'CheckGiamGia']);


    Route::post('storeLienHe', 'App\Http\Controllers\Site\HomeController@storeLienHe');
    Route::get('/capnhatgiasession/{gia}', [GioHangController::class, 'capnhatgiasession']);
    Route::get('/capnhatgiamgiasession/{gia}', [GiamGiaController::class, 'capnhatgiamgiasession']);
    /**
     *Thanh toán
     */
    Route::post("/vnpay_php/vnpay_create_payment", [GioHangController::class, 'vnpayments']);
    Route::post('/thanh-toan-don-hang', [GioHangController::class, "thanhtoandonhang"]);
    Route::get("/thanh-toan-hoa-don", [GioHangController::class, 'returnPay']);

     /**
     *Liệu trình
     */
    Route::get('lieutrinhchitiet/{id}/get', [HomeController::class, 'getLieuTrinhDetailByIdLieuTrinh']);
    /**
    *Hủy đơn
     */
    Route::get("huydonhang/{id}", [GioHangController::class, "HuyDonHang"]);
    /**
    *Update profile
     */
    Route::post("updateprofile", [HomeController::class, "updateprofile"]);

});

