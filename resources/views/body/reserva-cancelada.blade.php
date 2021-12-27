@extends('mainlayout')

@section('contenido')

<h1> MUCHAS GRACIAS {{ $nombre_clienteReservado }} {{ $apellido_clienteReservado }}</h1>
<h3>La reserva numero {{$codigoReserva}}, en el restaurante {{$restoReservado}} el dia {{$diaReservado}} a la {{$turnoReservado}} fue cancelada EXITOSAMENTE </h3>

<a href="{{ url('/') }}" class="btn btn-primary btn-lg col text-center">Volver al inicio</a>

@endsection