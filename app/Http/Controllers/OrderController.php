<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card ;


class OrderController extends Controller
{
    public function notifications(Request $request){
        $datos = $request->all();
        

        if($datos['external_reference']){

            $card = Card::find($datos['external_reference']);

            $card -> status = 1;

            $card->save();

            return redirect()->route('panel.builder',['slug' => $card -> slug]);
        }
     }
}