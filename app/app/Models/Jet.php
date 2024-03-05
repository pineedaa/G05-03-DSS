<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ciudad;
use App\Models\Usuario;

class Jet extends Model
{
    use HasFactory;

    protected $table = 'jet';

    public function ciudad() {
        return $this->hasOne(Ciudad::class);
    }
}
