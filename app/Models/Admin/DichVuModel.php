<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DichVuModel extends Model
{
    use HasFactory;
    protected $table = 'dichvu';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tendv',
        'slug',
        'img',
        'giamgia',
        'iddm',
        'motangan',
        'dongia',
        'noidung',
        'trangthai'
    ];
}
