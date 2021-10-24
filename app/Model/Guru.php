<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
       'mapel_id', 'kode_guru', 'nama', 'nip', 'kelamin', 'phone', 'tempat_lahir', 'tanggal_lahir', 'photo'
    ];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class)->withDefault();
    }
}
