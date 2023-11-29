<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compra extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['total', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function publicaciones(){
        return $this->belongsToMany(Publicacion::class);
    }
}
