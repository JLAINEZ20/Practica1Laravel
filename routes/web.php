<?php

use Illuminate\Support\Facades\Route;
use App\Models\Usuario;
use App\Models\Cliente;
use App\Models\Habitacion;
use App\Models\Reserva;
use App\Models\Pago;
use App\Models\TipoHabitacion;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', function (User $Usuario) {
    return response()->json($Usuario);
});

Route::get('/clientes', function (Cliente $cliente) {
    return response()->json($cliente);
});


Route::get('/habitaciones', function (Habitacion $habitacion) {
    return response()->json($habitacion);
});


Route::get('/reservas', function (Reserva $reserva) {
    return response()->json([
        'reserva' => $reserva,
        'cliente' => $reserva->cliente,
        'habitacion' => $reserva->habitacion
    ]);
});


Route::get('/pagos', function (Pago $pago) {
    return response()->json([
        'pago' => $pago,
        'reserva' => $pago->reserva
    ]);
});

