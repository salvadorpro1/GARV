<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'name',
        'lastname',
        'reason',
        'subsidiary',
        'management',
        '_token', // Agrega este campo a la lista de fillable
    ];
}
