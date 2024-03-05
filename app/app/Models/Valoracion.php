<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jet;
use App\Models\Usuario;

class Valoracion extends Model
{
    use HasFactory;

    protected $table = 'valoracion';

    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }

    public function jet() {
        return $this->hasOne(Jet::class);
    }
}
