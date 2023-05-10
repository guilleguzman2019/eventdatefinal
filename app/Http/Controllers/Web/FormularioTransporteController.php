<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Transfer ;

class FormularioTransporteController extends Controller
{
    public function procesarFormulario(Request $request)
    {
       
        $nombre = $request->input('nombre');

        $cantidad = $request->input('cantidadpersonas');

        $idcard = $request->input('card_id');

        $transfer = new Transfer;

        $transfer-> fullname = $nombre;
        $transfer-> numberOfplaces = $cantidad;

        $transfer -> card_id = $idcard ;

        // Guardar el modelo en la base de datos
        $transfer->save();



    }
}
