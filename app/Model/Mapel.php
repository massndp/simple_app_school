<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';

    protected $fillable = [
        'kode', 'nama'
    ];
}
