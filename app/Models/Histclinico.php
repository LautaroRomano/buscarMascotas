<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histclinico extends Model
{
    use HasFactory;

    protected $fillable = [
        'Mascota_id',
        'veterinario',
        'detalle',
        'proxvisita',
    ];
}
