<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
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
        $video_file= $request->file('ruta_video');
        if($video_file){
            $ruta_video= $video_file->getClientOriginalName();
            \Storage::disk('videos')->put($ruta_video, \File::get($video_file));
            $video->ruta_video=$ruta_video;
        }
        $video->save();
         return redirect()->action('VideoController@formularioVideo');
    }
    public function mostrarVideo(){
        $videos = Video::orderBy('id','desc')->paginate(5);
        return view('welcome', array(
            'videos' => $videos
        ));
    }
    public function getVideo($archivoNombre){
        $archivo= Storage::disk('videos')->get($archivoNombre);
        return new Response($archivo, 200);
    }
}
