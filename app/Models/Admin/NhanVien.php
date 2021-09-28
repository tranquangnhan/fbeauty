<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    protected $table = 'nhanvien';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idcoso',
        'iddichvu',
        'email',
        'password',
        'role',
        'active',
        'name',
        'img',
        'namsinh',
        'gioitinh',
        'sdt',
        'avatar',
        'trangthai',
        'remember_token'
    ];
}
