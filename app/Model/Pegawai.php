<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = [
        'kode_pegawai', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'photo'
    ];
}
