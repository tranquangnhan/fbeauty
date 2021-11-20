<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\SanPhamChiTiet;
use App\Repositories\GioHang\GioHangRepository;
use App\Repositories\GioHangChiTiet\GioHangChiTietRepository;
use App\Repositories\SanPham\SanPhamRepository;
use App\Repositories\SanPhamChiTiet\SanPhamChiTietRepository;
use Illuminate\Http\Request;

class GioHangController extends Controller
{
    private $SanPham;
    private $SanPhamChiTiet;
    private $GioHang;
    private $GioHangChiTiet;

    public function __construct(
        GioHangRepository $GioHang,
        GioHangChiTietRepository $GioHangChiTiet,
        SanPhamRepository $SanPham,
        SanPhamChiTietRepository $SanPhamChiTiet
    )
    {
        $this->GioHang = $GioHang;
        $this->GioHangChiTiet = $GioHangChiTiet;
        $this->SanPham = $SanPham;
        $this->SanPhamChiTiet = $SanPhamChiTiet;
    }

    public function ShowGioHang()
    {
        if (session()->has('khachHang') && session('khachHang') != '') {
            $checkgiohangByidKH = $this->GioHang->CheckKhachHangInGioHang(session('khachHang')->id);
            if ($checkgiohangByidKH == false) {
                $giohangDB = $this->GioHang->GioHangDB(session('khachHang')->id);
                $giohangchitietDB = $this->GioHangChiTiet->GioHangChiTiet($giohangDB[0]->id);
                return $giohangchitietDB;
            } else {
                return 0;
            }
        } else {
            if (session()->has('giohang') && session('giohang') != "") {
                return session('giohang');
            } else {
                return 0;
            }

        }
    }

    /**
     *return 0: Sản phẩm đã hết hàng
     *
     */
    public function ThemGioHang($id)
    {
        $getspct = $this->SanPhamChiTiet->find($id);
        $product = $this->SanPhamChiTiet->getSanPhamChiTiet($id);
        if ($product != null) {
            if (session()->has('khachHang') && session('khachHang') != '') {
                $checkgiohangByidKH = $this->GioHang->CheckKhachHangInGioHang(session('khachHang')->id);
//           check khách hàng trong DB giỏ hàng có tồn tại
                $giohangDB = $this->GioHang->GioHangDB(session('khachHang')->id);
                if ($checkgiohangByidKH == false) {
                    $checkgiohangCt = $this->GioHangChiTiet->CheckGioHangCt($giohangDB[0]->id, $id);
//                check xem giỏ hàng đả có sản phẩm hay chưa
                    if ($checkgiohangCt == false) {
                        $getgiohangCt = $this->GioHangChiTiet->GetGioHangCt($giohangDB[0]->id, $id);
                        if (($getgiohangCt[0]->soluong + 1) <= $getspct->tonkho) {
                            $gh = [
                                'soluong' => $getgiohangCt[0]->soluong + 1
                            ];
                            $this->GioHangChiTiet->update($getgiohangCt[0]->id, $gh);
                            $thongbao = [
                                'thongbao' => 'Đã thêm sản phẩm'
                            ];
                            return $thongbao;
                        } else {
                            return 0;
                        }
                    } else {
                        if ($getspct->tonkho > 0) {
                            $newGHCT1 = [
                                'idgiohang' => $giohangDB[0]->id,
                                'idsanphamchitiet' => $id,
                                'soluong' => 1
                            ];
                            $this->GioHangChiTiet->create($newGHCT1);
                            $thongbao = [
                                'thongbao' => 'Đã thêm sản phẩm'
                            ];
                            return $thongbao;

                        } else {
                            return 0;
                        }
                    }
                } else {
                    if ($getspct->tonkho >= 1) {
                        $newGH = [
                            'idkhachhang' => session('khachHang')->id
                        ];
                        $ThemGH = $this->GioHang->create($newGH);
                        $newGHCT = [
                            'idgiohang' => $ThemGH->id,
                            'idsanphamchitiet' => $id,
                            'soluong' => 1
                        ];
                        $this->GioHangChiTiet->create($newGHCT);
                        $thongbao = [
                            'thongbao' => 'Đã thêm sản phẩm'
                        ];
                        return $thongbao;
                    } else {
                        return 0;
                    }
                }
            } else {
                //Thêm sản phẩm vào lưu seession
                if (session()->has('giohang') && count(session()->get('giohang')) != 0) {
                    $giohang = session()->get('giohang');
                    for ($i = 0; $i < count($giohang); $i++) {
                        if ($giohang[$i]["id"] == $id) {
                            $giohang[$i]["soluong"]++;
                            session()->put('giohang', $giohang);
                            $check = true;
                            break;
                        } else {
                            $check = false;
                        }
                    }
                    if ($check == false) {
                        $giohang[count($giohang)] = [
                            "id" => $id,
                            "name" => $product[0]->name,
                            "ml" => $product[0]->ml,
                            "soluong" => 1,
                            "dongia" => $product[0]->dongia,
                            "img" => $product[0]->img,
                            "giamgia" => $product[0]->giamgia,
                            "tonkho" => $product[0]->tonkho
                        ];
                    }
                    session()->put('giohang', $giohang);
                    return session()->get('giohang');
                } else {
                    $giohang = session()->get('giohang', []);
                    $giohang[0] = [
                        "id" => $id,
                        "name" => $product[0]->name,
                        "ml" => $product[0]->ml,
                        "soluong" => 1,
                        "dongia" => $product[0]->dongia,
                        "img" => $product[0]->img,
                        "giamgia" => $product[0]->giamgia,
                        "tonkho" => $product[0]->tonkho
                    ];
                    session()->put('giohang', $giohang);
                    return session()->get('giohang');
                }
            }
        } else {
            return 0;
        }
    }

    public function ThemGioHangChiTiet($id, $soluong)
    {
        $getspct = $this->SanPhamChiTiet->find($id);
        $product = $this->SanPhamChiTiet->getSanPhamChiTiet($id);
        if ($product != null) {
            if (session()->has('khachHang') && session('khachHang') != '') {
                $checkgiohangByidKH = $this->GioHang->CheckKhachHangInGioHang(session('khachHang')->id);
//           check khách hàng trong DB giỏ hàng có tồn tại
                $giohangDB = $this->GioHang->GioHangDB(session('khachHang')->id);
                if ($checkgiohangByidKH == false) {
                    $checkgiohangCt = $this->GioHangChiTiet->CheckGioHangCt($giohangDB[0]->id, $id);
//                check xem giỏ hàng đả có sản phẩm hay chưa
                    if ($checkgiohangCt == false) {
                        $getgiohangCt = $this->GioHangChiTiet->GetGioHangCt($giohangDB[0]->id, $id);
                        if (($getgiohangCt[0]->soluong + $soluong) <= $getspct->tonkho) {
                            $gh = [
                                'soluong' => $getgiohangCt[0]->soluong + $soluong
                            ];
                            $this->GioHangChiTiet->update($getgiohangCt[0]->id, $gh);
                            $thongbao = [
                                'thongbao' => 'Đã thêm sản phẩm'
                            ];
                            return $thongbao;
                        } else {
                            return 0;
                        }
                    } else {
                        if ($getspct->tonkho > 0) {
                            $newGHCT1 = [
                                'idgiohang' => $giohangDB[0]->id,
                                'idsanphamchitiet' => $id,
                                'soluong' => $soluong
                            ];
                            $this->GioHangChiTiet->create($newGHCT1);
                            $thongbao = [
                                'thongbao' => 'Đã thêm sản phẩm'
                            ];
                            return $thongbao;

                        } else {
                            return 0;
                        }
                    }
                } else {
                    if ($getspct->tonkho >= 1) {
                        $newGH = [
                            'idkhachhang' => session('khachHang')->id
                        ];
                        $ThemGH = $this->GioHang->create($newGH);
                        $newGHCT = [
                            'idgiohang' => $ThemGH->id,
                            'idsanphamchitiet' => $id,
                            'soluong' => $soluong
                        ];
                        $this->GioHangChiTiet->create($newGHCT);
                        $thongbao = [
                            'thongbao' => 'Đã thêm sản phẩm'
                        ];
                        return $thongbao;
                    } else {
                        return 0;
                    }
                }
            } else {
                //Thêm sản phẩm vào lưu seession
                if (session()->has('giohang') && count(session()->get('giohang')) != 0) {
                    $giohang = session()->get('giohang');
                    for ($i = 0; $i < count($giohang); $i++) {
                        if ($giohang[$i]["id"] == $id) {
                            $giohang[$i]["soluong"] += $soluong;
                            session()->put('giohang', $giohang);
                            $check = true;
                            break;
                        } else {
                            $check = false;
                        }
                    }
                    if ($check == false) {
                        $giohang[count($giohang)] = [
                            "id" => $id,
                            "name" => $product[0]->name,
                            "ml" => $product[0]->ml,
                            "soluong" => $soluong,
                            "dongia" => $product[0]->dongia,
                            "img" => $product[0]->img,
                            "giamgia" => $product[0]->giamgia,
                            "tonkho" => $product[0]->tonkho
                        ];
                    }
                    session()->put('giohang', $giohang);
                    return session()->get('giohang');
                } else {
                    $giohang = session()->get('giohang', []);
                    $giohang[0] = [
                        "id" => $id,
                        "name" => $product[0]->name,
                        "ml" => $product[0]->ml,
                        "soluong" => $soluong,
                        "dongia" => $product[0]->dongia,
                        "img" => $product[0]->img,
                        "giamgia" => $product[0]->giamgia,
                        "tonkho" => $product[0]->tonkho
                    ];
                    session()->put('giohang', $giohang);
                    return session()->get('giohang');
                }
            }
        } else {
            return 0;
        }
    }

    public function XoaSanPhamGioHang($id)
    {
        if (session()->has('khachHang') && session('khachHang') != '') {
            $giohangDB = $this->GioHang->GioHangDB(session('khachHang')->id);
            $this->GioHangChiTiet->XoaSanPhamGioHang($giohangDB[0]->id, $id);
            return 1;
        } else {
            $giohang = session()->get("giohang");
            $mang = [];
            for ($i = 0; $i < count($giohang); $i++) {
                if ($giohang[$i]["id"] != $id) {
                    array_push($mang, $giohang[$i]);
                }
            }
            session()->forget('giohang');
            session()->get('giohang', []);
            session()->put('giohang', $mang);
            return 1;
        }
    }

    public function TangSoLuong($id)
    {
        if (session()->has('khachHang') && session('khachHang') != '') {
            $giohangDB = $this->GioHang->GioHangDB(session('khachHang')->id);
            $giohangCTDB = $this->GioHangChiTiet->GetGioHangCt($giohangDB[0]->id, $id);
            $soluong = [
                'soluong' => ($giohangCTDB[0]->soluong + 1)
            ];
            $this->GioHangChiTiet->update($giohangCTDB[0]->id, $soluong);
            return 1;
        } else {
            $giohang = session()->get('giohang');
            for ($i = 0; $i < count($giohang); $i++) {
                if ($giohang[$i]["id"] == $id) {
                    $giohang[$i]["soluong"]++;
                    session()->put('giohang', $giohang);
                }
            }
            return 1;
        }
    }

    public function GiamSoLuong($id)
    {
        if (session()->has('khachHang') && session('khachHang') != '') {
            $giohangDB = $this->GioHang->GioHangDB(session('khachHang')->id);
            $giohangCTDB = $this->GioHangChiTiet->GetGioHangCt($giohangDB[0]->id, $id);
            $soluong = [
                'soluong' => ($giohangCTDB[0]->soluong - 1)
            ];
            $this->GioHangChiTiet->update($giohangCTDB[0]->id, $soluong);
            return 1;
        } else {
            $giohang = session()->get('giohang');
            for ($i = 0; $i < count($giohang); $i++) {
                if ($giohang[$i]["id"] == $id) {
                    $giohang[$i]["soluong"]--;
                    session()->put('giohang', $giohang);
                }
            }
            return 1;
        }
    }

    public function CapNhatSoLuong($id, $soluongsanpham)
    {
        if (session()->has('khachHang') && session('khachHang') != '') {
            $giohangDB = $this->GioHang->GioHangDB(session('khachHang')->id);
            $giohangCTDB = $this->GioHangChiTiet->GetGioHangCt($giohangDB[0]->id, $id);
            $soluong = [
                'soluong' => $soluongsanpham
            ];
            $this->GioHangChiTiet->update($giohangCTDB[0]->id, $soluong);
            return 1;
        } else {
            $giohang = session()->get('giohang');
            for ($i = 0; $i < count($giohang); $i++) {
                if ($giohang[$i]["id"] == $id) {
                    $giohang[$i]["soluong"] = $soluongsanpham;
                    session()->put('giohang', $giohang);
                }
            }
            return 1;
        }
    }

    public function xoatatcasanpham()
    {
        if (session()->has('khachHang') && session('khachHang') != '') {
            $giohangDB = $this->GioHang->GioHangDB(session('khachHang')->id);
            $this->GioHangChiTiet->XoaAllSanPhamGioHang($giohangDB[0]->id);
            return 1;
        } else {

            session()->forget('giohang');
            return 1;
        }
    }

    public function InserGioHangDataSession()
    {
        if (session()->has('giohang') && count(session()->get('giohang')) != 0) {
            if (session()->has('khachHang') && session('khachHang') != '') {
                $checkgiohangByidKH = $this->GioHang->CheckKhachHangInGioHang(session('khachHang')->id);
                if ($checkgiohangByidKH == false) {
                    $giohangDB = $this->GioHang->GioHangDB(session('khachHang')->id);
                    $giohang = session()->get('giohang');
                    for ($i=0; $i<count($giohang); $i++) {
                        $checkgiohangCt = $this->GioHangChiTiet->CheckGioHangCt($giohangDB[0]->id, $giohang[$i]["id"]);
                        if ($checkgiohangCt == false){
                            $idchitiet=$this->GioHangChiTiet->GetGioHangCt($giohangDB[0]->id, $giohang[$i]["id"]);
                            $sl=[
                                'soluong'=>$giohang[$i]["soluong"]
                            ];
                            $this->GioHangChiTiet->update($idchitiet[0]->id, $sl);
                        }
                        else{
                            $giohangnew=[
                              'idgiohang'=> $giohangDB[0]->id,
                                'idsanphamchitiet'=>$giohang[$i]["id"],
                                'soluong'=>$giohang[$i]["soluong"]
                            ];
                            $this->GioHangChiTiet->create($giohangnew);
                        }
                    }
                    return 1;
                }
                else{
                    $kh=[
                      'idkhachhang'=>session('khachHang')->id
                    ];
                    $this->GioHang->create($kh);
                    $giohangDB = $this->GioHang->GioHangDB(session('khachHang')->id);
                    $giohang = session()->get('giohang');
                    for ($i=0; $i<count($giohang); $i++) {
                            $giohangnew=[
                                'idgiohang'=> $giohangDB[0]->id,
                                'idsanphamchitiet'=>$giohang[$i]["id"],
                                'soluong'=>$giohang[$i]["soluong"]
                            ];
                            $this->GioHangChiTiet->create($giohangnew);
                    }
                    return 1;
                }
            }
            else{
                return 0;
            }
        }
        else{
            return 0;
        }
    }
}
