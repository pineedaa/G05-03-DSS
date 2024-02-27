<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aeropuerto;
use App\Models\Usuario;

class Ciudad extends Model
{
    public function aeropuerto() {
        return $this->hasMany(Aeropuerto::class);
    }

    public function usuario() {
        return $this->hasMany(Usuario::class);
    }
}
