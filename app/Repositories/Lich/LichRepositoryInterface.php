<?php


namespace App\Repositories\Lich;
use App\Repositories\RepositoryInterface;
interface LichRepositoryInterface extends RepositoryInterface
{
    public function getModel();
    public function getLichByThuAndCoSo($thu, $idCoSo);
    public function getLichActive($thu, $idCoSo, $gio);
}
