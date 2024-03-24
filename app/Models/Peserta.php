<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'asalSekolah',
        'usernameKelompok',
        'passPeserta',
        'namaKetua',
        'emailKetua',
        'namaKedua',
        'namaKetiga',
        'jenisKonsumsi',
        'alergi',
        'buktiTransaksi',
    ];
}
