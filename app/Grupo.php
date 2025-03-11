<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['nombre'];

    public function estudiantes()
    {
        return $this->hasMany(Usuario::class);
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }
}
