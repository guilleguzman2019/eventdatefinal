<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Template;

class TemplateJsonController extends Controller
{
    public function show($slug)
    {
        $template = Template::where('id', $slug)->first();

        if (!$template) {
            return response()->json(['error' => 'Template not found'], 404);
        }

        return response()->json($template);
        
    }
}
