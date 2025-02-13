<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
   
   protected $fillable = ['nombre', 'descripcion', 'precio_noche'];
}
