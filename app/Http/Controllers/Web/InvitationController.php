<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Card ;

class InvitationController extends Controller
{
    public function show($slug)
    {
        
        $invitacion = Card::where('slug', $slug)->first();
        
        if ($invitacion -> status == '0')
            {
                return abort(404);
            }

        return view('web.Invitacion', compact('invitacion'));
    }
}
