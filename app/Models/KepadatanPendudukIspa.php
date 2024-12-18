<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KepadatanPendudukIspa extends Model
{
    use HasFactory;
    protected $fillable = ['geometry', 'kecamatan', 'kpdt_bps', 'kelas_kpdt', 'operator', 'tanggal', 'gambar'];
}
