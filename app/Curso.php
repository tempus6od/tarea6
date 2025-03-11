<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['clave','nombre', 'caratula', 'contenido', 'kit_id'];

    public function kit()
    {
        return $this->belongsTo(Kit::class);
    }

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class);
    }
}
