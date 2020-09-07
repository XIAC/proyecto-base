<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class VideoController extends Controller
{
    //
    public function formularioVideo(){
        return view('video.formulario-video');
    }
    public function guardarVideo(Request $request){
        $validarDato= $this->validate( $request,[
            'titulo' => 'required',
            'descripcion' => 'required'
        ]);
        $video = new Video();
        $video->user_id = '1';
        $video->titulo = $request->input('titulo');
        $video->descripcion = $request->input('descripcion');
        $video->ruta_video = 'http.....';
        $video->save();
        // return redirect()->route('/')->with(array(
        //     'message' => 'El video se ha subido correctamente'
        //  ));

    }

}
