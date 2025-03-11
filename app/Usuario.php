<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre', 'email', 'password', 'rol', 'grupo_id']

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
