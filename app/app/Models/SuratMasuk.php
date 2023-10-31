<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'no_urut',
        'tanggal',
        'masuk',
        'no_surat',
        'pengirim',
        'perihal',
        'status_disposisi',
        'isi_disposisi',
        'file_surat',
        'file_disposisi',
        'tahun',
        'bulan',
        'aktif',
        'penerima_disposisi',
    ];
}
