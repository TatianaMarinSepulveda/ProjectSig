<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    use HasFactory;
    public function Documento(){
        return $this->hasMany(Documento::class);
    }
    public function Usuario(){
        return $this->hasMany(Usuario::class);
    }
}
