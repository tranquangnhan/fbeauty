<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = 'sanpham';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idcoso',
        'iddanhmuc',
        'name',
        'slug',
        'img',
        'mota',
        'noidung',
        'trangthai',
    ];
}
