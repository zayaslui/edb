<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{

    protected $table = 'peliculas';

    protected $fillable = [
        'descripcion'
    ];
}
