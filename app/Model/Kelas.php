<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = ['nama', 'guru_id'];

    public function guru()
    {
        return $this->belongsTo(Guru::class)->withDefault();
    }
}

