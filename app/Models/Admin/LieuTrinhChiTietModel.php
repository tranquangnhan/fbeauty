<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LieuTrinhChiTietModel extends Model
{
    use HasFactory;
    protected $table = 'lieutrinhchitiet';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idlieutrinh',
        'iddichvu',
        'idnhanvien',
        'ghichu',
        'ngay',
        'trangthai',
        'imgkhachhang'
    ];
}
