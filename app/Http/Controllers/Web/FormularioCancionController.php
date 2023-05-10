<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Music;

class FormularioCancionController extends Controller
{
    public function procesarFormulario(Request $request)
    {
       
        $nombre = $request->input('nombrecancion');

        $autor = $request->input('autor');

        $link = $request->input('link');

        $idcard = $request->input('card_id');

        $musica = new Music;

        $musica-> name = $nombre;
        $musica-> author = $autor;
        $musica-> link = $link;

        $musica -> card_id = $idcard ;

        // Guardar el modelo en la base de datos
        $musica->save();

        return response()->json([
            'status' => 'success',
            'message' => 'La tarea se ha completado exitosamente',
            'data' => [
                // Incluir cualquier dato adicional que se desee enviar
            ]
        ]);



    }
}
