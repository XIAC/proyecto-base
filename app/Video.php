<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // relacion de uno a muchos COMENTARIO
    public function comentarios(){
        return  $this->hasMany('App\Comentario');
    }
    // relacion de muchos a uno 
    public function usuario(){
        return $this->belongsTo('App\User','user_id');
    }

}
