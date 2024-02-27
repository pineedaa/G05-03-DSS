<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ciudad;

class Usuario extends Model
{
    public function ciudad() {
        return $this->belongsTo(Ciudad::class);
    }
}
