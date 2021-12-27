@extends('mainlayout')

<br> <br>
<br> <br>
<br> <br>
@section('contenido')
 

<h2 class >Complete la información para agregar su restaurante</h2>

<br>
<br>
<br>


    <div class="col-lg-8 col-xl-7">

<form class= "form" action="store" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="" required>
    <br><br>

    <label for="especialidad">Especialidad:</label>
    
    <select name="especialidad" id="" required>
        <option selected disabled>Selecciona la especialidad</option>
        @foreach ($comidas as $comida)
            <option value="{{ $comida -> comida }}"> {{ $comida -> comida }} </option>
        @endforeach
    </select>
    <br><br>

    <label for="zona">Zona:</label>
    <select name="zona" id="zona" required>
        <option selected disabled >Seleccionar zona, chequear el value de cada opcion</option>
        @foreach ($zonas as $zona)
            <option value="{{ $zona -> zona }}"> {{ $zona -> zona }} </option>
        @endforeach
    </select>
    <br><br>

    <label for="telefono">Telefono:</label>
    <input class="" type="text" name="telefono" id="" placeholder="11 1234-5678" required>
    <br><br>

    <label for="correo">Correo:</label>
    <input class="" type="email" name="correo" id="" placeholder="correo@x.com" required>
    <br><br>

    <label for="foto">Agregar foto </label>
    <input class="" name="foto" id="foto" type="file">

    <br><br>
    <button type="submit" class="btn btn-success">Agregar!</button>
</form>

<br><br><br>


<a href="{{ url('/') }}" class="btn btn-primary btn-lg col text-center">Volver al inicio</a>


@endsection

