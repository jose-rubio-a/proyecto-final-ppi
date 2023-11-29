<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publicacion extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nombre', 'descripcion', 'precio', 'user_id', 'archivo_ubicacion', 'archivo_nombre'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function temporadas(){
        return $this->belongsToMany(Temporada::class);
    }

    public function compras(){
        return $this->belongsToMany(Compra::class);
    }
}
