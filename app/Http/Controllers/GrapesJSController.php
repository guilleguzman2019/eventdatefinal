<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Card ;

class GrapesJSController extends Controller
{

    public function guardarHtmlCss(Request $request, $slug)
    {

        $html = $request->input('html');
        $css = $request->input('css');

        $card = Card::where('slug', $slug)->first();
        if (!$card) {
            // Si la tarjeta no existe, puedes crear una nueva
            $card = new Card();
        }
    
        // Actualiza los campos html y css de la tarjeta
        $card->html = $html;
        $card->css = $css;
        $card->save();
        
        // Aquí puedes agregar código que se ejecute en caso de que la operación se haya completado con éxito
        return response()->json(['mensaje' => 'El HTML y CSS se han guardado correctamente en la tarjeta ' . $slug . '.']);

    }

    
}
