<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //relcion con usuario
    public function usuario(){
        return $this->belongTo('App\User');
    }
}
