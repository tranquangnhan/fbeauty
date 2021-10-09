<?php


namespace App\Repositories\DonHang;


interface DonHangRepositoryInterface
{
    public function getAll();

    public function where($id);

    public function find($id);

    public function create($attributes = []);

    public function update($id,$attributes = []);

    public function delete($id);
}
