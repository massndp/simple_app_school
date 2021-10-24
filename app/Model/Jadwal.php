<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'kelas_id', 'hari_id', 'mapel_id', 'guru_id', 'ruang_id', 'jam_mulai', 'jam_selesai'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class)->withDefault();
    }

    public function hari()
    {
        return $this->belongsTo(Hari::class)->withDefault();
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class)->withDefault();
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class)->withDefault();
    }

    public function ruang()
    {
        return $this->belongsTo(Ruang::class)->withDefault();
    }
}
