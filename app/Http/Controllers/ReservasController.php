<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'hola';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $idArray = [$id];
        $restauranteIngresado = DB::table('restaurantes_db')->where('id', $id)->first();
        $restosSinSelec = DB::table('restaurantes_db')
        ->where('autorizado', '=', 1)
        ->whereNotIn('id',$idArray)
        ->get();

        $datos = [
            "restauranteIngresado" => $restauranteIngresado,
            "restosSinSelec" => $restosSinSelec
        ];

        return view('body.reservar', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restoReservado = $request->post("resto");
        $diaReservado = $request->post("dia");
        $turnoReservado = $request->post("turno");
        $nombre_clienteReservado = $request->post("nombre_cliente");
        $apellido_clienteReservado = $request->post("apellido_cliente");
        $telefono_clienteReservado = $request->post("telefono_cliente");
        $email_clienteReservado = $request->post("email_cliente");

        //unifico los datos ingresados en una sola string
        $datosQuery = "'$restoReservado', '$diaReservado', '$turnoReservado', '$nombre_clienteReservado', '$apellido_clienteReservado', '$email_clienteReservado','$telefono_clienteReservado'";        
        //formulo la query
        $queryFinal = "INSERT INTO reservas (nombre_restaurante, dia, turno, nombre_cliente, apellido_cliente, email_cliente, telefono_cliente) VALUES ($datosQuery)";
        //subida a la base de datos:
        $agregar = DB::insert($queryFinal);

        $datos = [
            "restoReservado" => $restoReservado,
            "diaReservado" => $diaReservado,
            "turnoReservado" => $turnoReservado,
            "nombre_clienteReservado" => $nombre_clienteReservado,
            "apellido_clienteReservado" => $apellido_clienteReservado,
            "telefono_clienteReservado" => $telefono_clienteReservado,
            "email_clienteReservado" => $email_clienteReservado,
        ];

        return view('body.reserva_exitosa', $datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelarReservaInfo()
    {
        // Voy a usar este metodo para cancelar reservas
        $restos = DB::select("SELECT nombre_restaurante FROM reservas");

        return view('body.cancelar-reserva', compact('restos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reservaCancelada(Request $request)
    {
        $codigoReserva = $request->post("codigo");
        $restoReservado = $request->post("nombre_resto");
        $diaReservado = $request->post("dia");
        $turnoReservado = $request->post("turno");
        $nombre_clienteReservado = $request->post("nombre_cliente");
        $apellido_clienteReservado = $request->post("apellido_cliente");
        $telefono_clienteReservado = $request->post("telefono_cliente");
        $email_clienteReservado = $request->post("email_cliente");

        //unifico los datos ingresados en una sola string
    //$datosQuery = "'$codigoReserva', '$restoReservado', '$diaReservado', '$turnoReservado', '$nombre_clienteReservado', '$apellido_clienteReservado', '$telefono_clienteReservado','$email_clienteReservado'";        
        //formulo la query
    //$queryFinal = "DELETE FROM reservas WHERE (codigo = '$codigoReserva') AND (nombre_restaurante = '$restoReservado') AND (dia = '$diaReservado') AND (turno = '$turnoReservado') AND (email_cliente = '$email_clienteReservado')";
        //borrar de la base de datos:
    //1 ::::: $borrar = DB::delete($queryFinal);
        $borrar = DB::table('reservas')
                        ->where('codigo', $codigoReserva)
                        ->where('nombre_restaurante', $restoReservado)
                        ->where('dia', $diaReservado)
                        ->where('turno', $turnoReservado)
                        ->where('email_cliente', "$email_clienteReservado")
                        ->delete();



        $datos = [
            "codigoReserva" => $codigoReserva,
            "restoReservado" => $restoReservado,
            "diaReservado" => $diaReservado,
            "turnoReservado" => $turnoReservado,
            "nombre_clienteReservado" => $nombre_clienteReservado,
            "apellido_clienteReservado" => $apellido_clienteReservado,
            "telefono_clienteReservado" => $telefono_clienteReservado,
            "email_clienteReservado" => $email_clienteReservado,
        ];

        return view('body.reserva-cancelada', $datos);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
