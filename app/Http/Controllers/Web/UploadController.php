<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function uploadAssets(Request $request)
    {
        if ($request->hasFile('files')) {
            $urls = [];
            $files = $request->file('files');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $path = Storage::putFileAs('grapesjs/img', $file, $filename);
                $urls[] = $path;
            }
            return $urls;
        }
    }
}
