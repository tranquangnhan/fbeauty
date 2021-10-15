<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHangModel extends Model
{
    protected $table = 'donhangchitiet';
    protected $primaryKey = 'id';
    protected $fillable = [
        'iddonhang ',
        'idsanpham ',
        'img',
        'soluong',
        'dongiatruocgiamgia',
        'dongiasaugiamgia'

    ];
}
