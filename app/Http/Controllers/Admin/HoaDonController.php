<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\CoSo\CoSoRepository;
use App\Repositories\CoSo\CoSoRepositoryInterface;
use App\Repositories\DichVu\DichVuRepositoryInterface;
use App\Repositories\GiamGia\GiamGiaRepository;
use App\Repositories\HoaDon\HoaDonRepositoryInterface;
use App\Repositories\HoaDonChiTiet\HoaDonChiTietRepositoryInterface;
use App\Repositories\KhachHang\KhachHangRepository;
use App\Repositories\LieuTrinh\LieuTrinhRepository;
use App\Repositories\LieuTrinhChiTiet\LieuTrinhChiTietRepository;
use App\Repositories\NhanVien\NhanVienRepositoryInterface;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    private $nhanvien;
    private $coso;
    private $dichvu;
    private $hoadon;
    private $hoadonchitiet;
    private $khachhang;
    private $giamgia;
    private $LieuTrinh;
    private $LieuTrinhChiTiet;
    public function __construct(
        GiamGiaRepository $giamgia,
        KhachHangRepository $khachhang,
        HoaDonRepositoryInterface $hoadon,
        HoaDonChiTietRepositoryInterface $hoadonchitiet,
        NhanVienRepositoryInterface $nhanvien,
        CoSoRepository $coso,
        DichVuRepositoryInterface $dichvu,
        LieuTrinhRepository $LieuTrinh,
        LieuTrinhChiTietRepository $LieuTrinhChiTiet
    ) {
        $this->nhanvien = $nhanvien;
        $this->coso = $coso;
        $this->dichvu = $dichvu;
        $this->hoadon = $hoadon;
        $this->hoadonchitiet = $hoadonchitiet;
        $this->khachhang = $khachhang;
        $this->giamgia = $giamgia;
        $this->LieuTrinh = $LieuTrinh;
        $this->LieuTrinhChiTiet = $LieuTrinhChiTiet;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoadon = $this->hoadon->ShowHoaDonByIdCoso(session()->get('coso'));
        $coso = $this->coso->find(session()->get('coso'));
        return view("Admin.HoaDon.index", ['hoadon' => $hoadon, 'coso' => $coso]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
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
        error_reporting(0);
        $hd = $this->hoadon->find($id);
        $coso = $this->coso->find($hd->idcoso);
        $customer = $this->khachhang->find($hd->idkhachhang);
        $ThuNgan = $this->nhanvien->find($hd->idthungan);
        $idlieutrinh = $hd->idlieutrinh;
        $TenNhanVien = $this->nhanvien->find($hd->idnhanvien);
        $hdct = $this->hoadonchitiet->getHoaDonCTByIdHoaDon($id);

        return view("Admin.HoaDon.edit", ['customer' => $customer, 'hoadon' => $hd, 'coso' => $coso, 'hdct' => $hdct, 'thungan' => $ThuNgan, 'TenNhanVien' => $TenNhanVien, 'idlieutrinh' => $idlieutrinh]);
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
        //
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

    /**
     *Giảm giá
     */
    public function getGiamGiaToHoaDon($idgiamgia)
    {
        $data = $this->giamgia->find($idgiamgia);
        return $data;
    }

    public function ApDungGiamGia($id, $code, $tien)
    {
        $checkCode = $this->giamgia->CheckCODE($code);
        if ($checkCode == false) {
            $giamgia = $this->giamgia->GetGiamGiaByCODE($code);
            if ($tien >= $giamgia[0]["max"]) {
                $ma = ['idgiamgia' => $giamgia[0]["id"]];
                $today = date('Y-m-d');
                if (strtotime($today) < $giamgia[0]["ngayhethan"] && $giamgia[0]["ngaytao"] < strtotime($today)) {
                    $this->hoadon->update($id, $ma);
                    return true;
                } else {
                    $thongbao = [
                        "thongbao" => 'Mã giảm giá đã hết hạn'
                    ];
                    return $thongbao;
                }
            } else {
                $thongbao = [
                    "thongbao" => 'Giá hóa đơn không đủ điều kiện'
                ];

                return $thongbao;
            }
        } else {
            $thongbao = [
                "thongbao" => 'Không có mã này'
            ];
            return $thongbao;
        }
    }

    public function CapNhatGia($id, $tien, $tongtien)
    {
        $tong = [
            'tongtientruocgiamgia' => $tien,
            'tongtiensaugiamgia' => $tongtien
        ];
        $this->hoadon->update($id, $tong);
        return true;
    }

    public function XoaHoaDonChiTiet($id, $idhdct)
    {
        $this->hoadonchitiet->delete($idhdct);
        $thongbao = [
            "thongbao" => 'Xóa thành công'
        ];
        return $thongbao;
    }

    public function addHoaDonByIdLieuTrinh($id)
    {

        $lieuTrinh =  $this->LieuTrinh->find($id);
        $lieuTrinhChiTiet = $this->LieuTrinhChiTiet->getLieuTrinhChiTietInnerJoin($id);
        $findHoaDon = $this->hoadon->findHoaDonByIdLieuTrinh($id);

        if(count($findHoaDon) === 0){

            $tongtien = 0;
            for ($i = 0; $i < count($lieuTrinhChiTiet); $i++) {
                $tongtien += $lieuTrinhChiTiet[$i]->dongia;
            }
            $dataHoaDon = [
                'idkhachhang' => $lieuTrinh->idkhachhang,
                'idcoso' => session()->get('coso'),
                'idnhanvien' => $lieuTrinh->idnhanvien,
                'idthungan' => $lieuTrinh->idnhanvien,
                'idlieutrinh' => $lieuTrinh->id,
                'tongtientruocgiamgia' => $tongtien,
                'tongtiensaugiamgia' => $tongtien,
                'trangthai' => Controller::TRANGTHAI_HOADON_CHUA_THANH_TOAN,
                'ghichu' => $lieuTrinh->ghichu
            ];

            $hoaDon = $this->hoadon->create($dataHoaDon);

            if ($hoaDon) {
                for ($i = 0; $i < count($lieuTrinhChiTiet); $i++) {
                    $dataHoaDonChiTiet = [
                        'idhoadon' => $hoaDon->id,
                        'idlienquan' => $lieuTrinhChiTiet[$i]->iddichvu,
                        'type' => 0,
                        'soluong' => 1,
                        'dongiatruocgiamgia' => $lieuTrinhChiTiet[$i]->dongia,
                        'dongiasaugiamgia' => $lieuTrinhChiTiet[$i]->dongia,
                    ];
                    $this->hoadonchitiet->create($dataHoaDonChiTiet);
                }
                return redirect('/quantri/hoadonchitiet/' . $hoaDon->id);
            }

        }else{
            return $this->handleError('Liệu trình đã tồn tại trong hoá đơn');
        }
    }

    public function trangthaithanhtoan($id){
        $hoadon=$this->hoadon->find($id);
        if ($hoadon->trangthai == 0){
            $tt=[
                "trangthai"=>Controller::TRANGTHAI_HOADON_DA_THANH_TOAN
            ];
            $this->hoadon->update($id, $tt);
        }
        else{
            $tt=[
                "trangthai"=>Controller::TRANGTHAI_HOADON_CHUA_THANH_TOAN
            ];
            $this->hoadon->update($id, $tt);
        }
        return redirect(route("hoadon.index"));
    }
}
