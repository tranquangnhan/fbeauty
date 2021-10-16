<?php


namespace App\Repositories\Lich;


use App\Models\Admin\Lich;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class LichRepository extends BaseRepository implements LichRepositoryInterface
{

    public function getModel()
    {
        return Lich::class;
    }

    public function getLich($id, $idthu)
    {
        return $this->model->select('*')
            ->where('idcoso', '=', $id)
            ->where('thutrongtuan', '=', $idthu)
            ->get();
    }

    public function updateALL($id, $thu, $trangthai){
        return DB::table('lich')->where('idcoso', $id)
            ->where('thutrongtuan', $thu)
            ->update(array('trangthai' => $trangthai));

    }

    public function deleteLichByIdCoSo($id){
        return DB::table('lich')->where('idcoso', $id)->delete();
    }

}
