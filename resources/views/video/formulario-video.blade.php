@extends('layout.app')
@section('contenido')
<div class="container">
  <div class="row">
    <form action="{{action('VideoController@guardarVideo')}}" method="POST" enctype="multipart/form-data">
        {!!csrf_field()!!}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2>Formulario Video</h2>
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese  titulo">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control" id="descripcion" name="descripcion">
            </textarea>
        </div>
        <div class="form-group">
            <label for="video">Video</label>
            <input type="file" class="form-control" id="ruta_video" name="ruta_video">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>
@endsection