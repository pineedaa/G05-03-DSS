<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aeropuerto;

class Ciudad extends Model
{
    function Ciudad() {
        return $this->hasMany(Aeropuerto::class);
    }
}
