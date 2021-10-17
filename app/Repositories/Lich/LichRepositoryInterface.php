<?php


namespace App\Repositories\Lich;


use App\Repositories\RepositoryInterface;

interface LichRepositoryInterface extends RepositoryInterface
{
    public function getLich($id, $idthu);
    public function updateALL($id, $thu, $trangthai);
    public function deleteLichByIdCoSo($id);

}
