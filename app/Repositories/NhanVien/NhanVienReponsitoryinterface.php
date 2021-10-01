<?php


namespace App\Repositories\NhanVien;


use App\Repositories\RepositoryInterface;

interface NhanVienReponsitoryinterface extends RepositoryInterface
{
public function getNhanVien();
public function CheckEmail($email);
public function CheckSdt($sdt);
}
