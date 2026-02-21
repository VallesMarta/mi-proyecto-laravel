<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{   
    protected $fillable = ['ciudad','imagen', 'precio', 'duracion', 'descripcion', 'enlace'];
    protected $guarded = ['id'];
}
