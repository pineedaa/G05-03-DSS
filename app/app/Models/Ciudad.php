<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aeropuerto;
use App\Models\Usuario;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudad';

    public function aeropuertos() {
        return $this->hasMany(Aeropuerto::class);
    }

    public function usuarios() {
        return $this->hasMany(Usuario::class);
    }
}
