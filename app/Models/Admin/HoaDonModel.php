<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonModel extends Model
{
    use HasFactory;
    protected $table = 'hoadon';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idkhachhang',
        'idcoso',
        'idnhanvien',
        'idthungan',
        'idlieutrinh',
        'idgiamgia',
        'tongtientruocgiamgia',
        'tongtiensaugiamgia',
        'trangthai',
        'ghichu'
    ];
}
