<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarNomor extends Model
{
    use HasFactory;
    protected $fillable = [
        'tahun',
        'nomor_urut',
        'nomor_keluar',
    ];
}
