@extends('mainlayout')

@section('contenido')
    <h1>LA RESERVA SE COMPLETO EXITOSAMENTE</h1>

    <P>RESERVASTE EN EL RESTAURANTE: {{ $restoReservado }} </P>
    <br>
    
    <p>El dia: {{ $diaReservado }} </p>
    <br>

    <p>El turno reservado es: {{ $turnoReservado }} </p>
    <br>

    <p>La reserva esta a nombre de: {{ $nombre_clienteReservado }} {{ $apellido_clienteReservado }} </p>
    <br>

    <p>Tu celular es: {{ $telefono_clienteReservado }} </p>
    <br>

    <p>Tu email es: {{ $email_clienteReservado }} </p>
    <br>

    <a href="{{ url('/') }}" class="btn btn-primary btn-lg col text-center">Volver al inicio</a>

@endsection