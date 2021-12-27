@extends('mainlayout')

@section('contenido')

<h2>Los restos sin Autorizar son:</h2>

<table class="table table-striped table-hover">
    <thead>
        <th>Foto</th>
        <th>Nombre </th>
        <th>Especialidad </th>
        <th>Zona </th>
        <th>Email </th>
        <th>Telefono </th>
        <th>Autorizar</th>
    </thead>
    <tbody>
        @foreach ($restosSinAutorizar as $resto)
            <tr>
                <td>
                    <img src="{{ asset('storage').'/'.$resto-> foto }}" alt="" width="125px">
                </td>
                <td>{{ $resto-> nombre_restaurante }}</td>
                <td>{{ $resto-> comida }}</td>
                <td>{{ $resto-> zona }}</td>
                <td>{{ $resto-> email_restaurante }}</td>
                <td>{{ $resto-> telefono_restaurante }}</td>
                <td>
                        <a href="autorizar/si/{{ $resto-> id }}">
                            <button type="submit" class="btn btn-success autorizado">Autorizar</button>
                        </a>
                    
                    <a href= "autorizar/no/{{ $resto-> id }}">
                    <button type="button" class="btn btn-danger declinado">Declinar</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<a href="{{ url('/') }}" class="btn btn-primary btn-lg col text-center">Volver al inicio </a>

<script>

</script>

@endsection