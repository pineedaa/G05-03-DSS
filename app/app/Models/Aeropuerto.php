<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ciudad;

class Aeropuerto extends Model
{
    use HasFactory;

    protected $table = 'aeropuerto';

    public function ciudad() {
        return $this->belongsTo(Ciudad::class);
    }
}
