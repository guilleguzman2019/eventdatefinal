<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Confirmation ;

class FormularioConfirmadosController extends Controller
{
    public function procesarFormulario(Request $request)
    {
       
        $asiste = $request->input('asiste');

        $nombre = $request->input('nombrecompleto');

        $date = $request->input('dato');


        $idcard = $request->input('card_id');

        $confirmacion = new Confirmation;

        $confirmacion-> assitence = $asiste;
        $confirmacion-> fullname = $nombre;
        $confirmacion-> date = $date;

        $confirmacion -> card_id = $idcard ;

        // Guardar el modelo en la base de datos
        $confirmacion->save();

        return response()->json([
            'status' => 'success',
            'message' => 'La tarea se ha completado exitosamente',
            'data' => [
                // Incluir cualquier dato adicional que se desee enviar
            ]
        ]);



    }
}
