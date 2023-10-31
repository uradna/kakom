<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'no_urut',
        'tanggal',
        'keluar',
        'no_surat',
        'dari',
        'penerima',
        'perihal',
        'file_surat',
        'tahun',
        'bulan',
        'aktif',
    ];
}
