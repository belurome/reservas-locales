@extends('mainlayout')
<br><br>
<br><br>
<br><br>
@section('contenido')
    

    <h2 class>Hacé tu reserva</h2>

<br><br>

<form action="" method="POST">
    @csrf
    <label class= "label" for="resto">Restaurante</label>
    <select name="resto" id="resto" required>
        <option selected value="{{ $restauranteIngresado -> nombre_restaurante }}"> {{ $restauranteIngresado -> nombre_restaurante }} </option>
        @foreach ($restosSinSelec as $restosSinSelec)
            <option value="{{ $restosSinSelec -> nombre_restaurante }}"> {{ $restosSinSelec -> nombre_restaurante }} </option>
        @endforeach
    </select>
<br><br>

    <label for="dia">Seleccione el dia</label>
    <input type="date" name="dia" id="dia" required>
<br><br>

    <label for="turno">Seleccione turno</label>
    <select name="turno" id="turno" required>
        <option value="Manana"> Manana </option>
        <option value="Noche"> Noche </option>
    </select>
<br><br>

<label for="nombre_cliente">Nombre:</label>
<input type="text" name="nombre_cliente" required>
<br><br>

<label for="apellido_cliente">Apellido:</label>
<input type="text" name="apellido_cliente" required>
<br><br>

<label for="telefono_cliente">Telefono:</label>
<input type="text" name="telefono_cliente" placeholder="11 1234-5678" required value="11 1234-5678">
<br><br>

<label for="email_cliente">Email:</label>
<input type="email" name="email_cliente" required>
<br><br>

    <button type="submit" class="btn btn-primary btn-lg col text-center">Reservar!</button>
    </form>

    <a href="{{ url('/') }}" class="btn btn-primary btn-lg col text-center">Volver al inicio</a>

    @endsection