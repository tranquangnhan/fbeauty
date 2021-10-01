<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoSo extends Model
{
    use HasFactory;
    protected $table = 'coso';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'tinh',
        'quan',
        'huyen'
    ];
}
