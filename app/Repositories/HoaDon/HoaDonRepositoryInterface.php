<?php


namespace App\Repositories\HoaDon;


use App\Repositories\RepositoryInterface;

interface HoaDonRepositoryInterface extends RepositoryInterface
{
    public function ShowHoaDonByIdCoso($id);

    public function findHoaDonByIdLieuTrinh($id);
}
