<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ciudad;
use App\Models\Vuelo;
use App\Models\Valoracion;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    public function ciudad() {
        return $this->belongsTo(Ciudad::class);
    }

    public function vuelo() {
        return $this->belongsToMany(Vuelo::class);
    }

    public function valoracion() {
        return $this->hasMany(Valoracion::class);
    }
}
