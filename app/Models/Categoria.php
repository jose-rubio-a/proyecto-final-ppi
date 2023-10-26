<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    // protected $table = 'organizaciones';
    public $timestamps = false;

    public function publicaciones(){
        return $this->belongsToMany(Publicacion::class);
    }
}
