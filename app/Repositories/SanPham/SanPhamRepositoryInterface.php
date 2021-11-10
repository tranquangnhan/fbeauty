<?php


namespace App\Repositories\SanPham;
use App\Repositories\RepositoryInterface;
interface SanPhamRepositoryInterface extends RepositoryInterface
{
  public function getSanPhamJoinDanhMuc($soluong);
  public function DemSanPham();
//  public function FilterByDM($soluong, $data);
}
