<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sinhvien extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaSV',
        'HoTen',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'SoDT',
    ];
}
