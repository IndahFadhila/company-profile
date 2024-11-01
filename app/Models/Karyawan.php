<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'karyawan';

    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'jenis_kelamin',
        'no_hp',
        'alamat',
    ];
}
