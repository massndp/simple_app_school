<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
     'kode_siswa', 'nama', 'nisn', 'kelamin', 'phone', 'tempat_lahir', 'tanggal_lahir', 'photo'
    ];
}
