<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ciudad;
use App\Models\Usuario;

class Vuelo extends Model
{
    use HasFactory;

    protected $table = 'vuelo';

    public function ciudad() {
        return $this->hasMany(Ciudad::class);
    }

    public function usuario() {
        return $this->belongsToMany(Usuario::class);
    }
}
