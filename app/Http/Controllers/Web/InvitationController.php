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

        return view('web.Invitacion', compact('invitacion'));
    }
}
