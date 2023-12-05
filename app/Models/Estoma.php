<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoma extends Model {
    use HasFactory;
    protected $table = "estoma";

    protected $fillable = ['estomia',
        'bolsa',
        'data',
    ];

    protected $casts = [
        'data' => 'date',
    ];

}
