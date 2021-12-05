<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tieude',
        'noidung',
        'img',
        'iddm',
        'AnHien'
    ];
}
