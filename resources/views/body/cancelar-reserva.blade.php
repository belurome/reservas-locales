@extends('mainlayout')

@section('contenido')
    <h2>Para cancelar la reserva por favor complete:</h2>
<br><br>

    <form action="" method="POST">
    @csrf

    <label for="codigo">Ingrese numero de reserva:</label>
    <input type="number" name="codigo" required>
    <br><br>

    <label for="nombre_resto">Seleccione el restaurante de la reserva: </label>
    <select name="nombre_resto" id="nombre_resto" required>
    @foreach ($restos as $resto)
        <option value="{{ $resto -> nombre_restaurante }}"> {{ $resto -> nombre_restaurante }} </option>
    @endforeach
    </select>
    <br><br>

    <label for="dia">Seleccione el dia de su reserva</label>
    <input type="date" name="dia" id="dia">
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

    <button type="submit" class="btn btn-danger">Cancelar la reserva</button>
    </form>
<br><br>


    <a href="{{ url('/') }}" class="btn btn-primary btn-lg col text-center">Volver al inicio</a>

@endsection