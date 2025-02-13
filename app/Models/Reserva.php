<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    
    protected $fillable = ['cliente_id', 'habitacion_id', 'fecha_entrada', 'fecha_salida', 'estado'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'habitacion_id');
    }
}
