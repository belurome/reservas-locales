@extends('mainlayout')

@section('contenido')
    <h2>El restaurante {{$nombre}} se agrego exitosamente!</h2>

    <img src="{{asset('storage')}}/{{$foto}}" alt="" width="250px" height="250px">
    <br>

    <h3>Para confirmar los datos ingresados son: </h3>

    <p>La especialidad es: {{$especialidad}}</p>
    <p>La zona es: {{$zona}}</p>
    <p>El telefono es: {{$telefono}}</p>
    <p>El correo es: {{$correo}}</p>

    <p>Aguarde a que el restaurante sea autorizado para verlo en la pagina principal!</p>
    <p>Cualquier consulta a crear@mail.com</p>


    <a href="{{ url('/') }}" class="btn btn-primary btn-lg col text-center">Volver al inicio</a>
@endsection