<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $fillable = ['numero', 'tipo_id', 'estado'];

    public function tipo()
    {
        return $this->belongsTo(TipoHabitacion::class, 'tipo_id');
    }
}
