<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tenbv',
        'img',
        'slug',
        'iddm',
        'noidung',
        'trangthai'
    ];
}
