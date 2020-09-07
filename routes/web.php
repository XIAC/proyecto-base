<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Video;

Route::get('/', function () {
    // $videos=Video::all();
    // foreach($videos as $video){
    //     echo $video->titulo.'<br/>';
    //     // quiero ver el email del usuario
    //     echo $video->usuario->email.'<br/>';
    //     // echo $video->comentarios[0]->contenido;
    //     foreach($video->comentarios as $comentario){
    //         echo $comentario->contenido.'<br/>';
    //     }
    //     echo '<hr/>';
    // }

    // die();
    return view('layout.app');
});
// Rutas para el video
// devolver la vista
Route::get('/form-video', 'VideoController@formularioVideo');
// guardar el video
Route::post('/guardar-video', 'VideoController@guardarVideo');
