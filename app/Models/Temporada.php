<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'archivo_ubicacion', 'archivo_nombre'];

    public function publicacions(){
        return $this->belongsToMany(Publicacion::class);
    }
}
