<?php


namespace App\Repositories\NhanVien;


use App\Repositories\RepositoryInterface;

interface NhanVienRepositoryInterface extends RepositoryInterface
{
public function getNhanVien();
public function CheckEmail($email);
public function CheckSdt($sdt);

}
