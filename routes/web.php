<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Web as Livewire;

use App\Http\Controllers\Web;

use App\Http\Controllers\GrapesJSController;


Route::get('redirect', function() {
    if ( Auth::user() -> role == 1 ) {
        return redirect() -> route('admin.dashboard');
    } else {
        return redirect() -> route('panel.dashboard');
    }
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invitacion-editar/{slug}',  Livewire\InvitacionEditComponent::class)-> name('invitacion-editar');

Route::get('/invitacion/{slug}',  [Web\InvitationController::class, 'show'])-> name('invitacion');

Route::get('/template/{slug}', [Web\TemplateJsonController::class, 'show'] )-> name('templates');

Route::post('/guardar-html-css/{slug}', [GrapesJSController::class, 'guardarHtmlCss']);

Route::post('/upload/assets', [Web\UploadController::class, 'uploadAssets']);

Route::post('/transporte', [Web\FormularioTransporteController::class, 'procesarFormulario']);

Route::post('/canciones', [Web\FormularioCancionController::class, 'procesarFormulario']);

Route::post('/confirmados', [Web\FormularioConfirmadosController::class, 'procesarFormulario']);



