<?php


namespace App\Repositories\KhachHang;


use App\Repositories\RepositoryInterface;

interface KhachHangRepositoryInterface extends RepositoryInterface
{
public function getModel();
public function CheckEmail($email);
public function CheckSdt($sdt);
}
