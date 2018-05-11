@extends('home')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h3 class="title text-center">Subir foto de usuario: {{$type}}</h3>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-2">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <br/><br/>
                                        <p><b>Ultimo paso subir una foto de perfil </b>o si deseas la puedes agregar despues en configuracion de perfil </p>
                                    </div>
                                </div>


<div class="row">
  <div class="col-sm-12">
    <form  action="{{ route(''.$model.'.uploadimage') }}" class="dropzone" id="myDropzone" method="post" enctype="multipart/form-data">
      <input type="hidden" name="entity_id" value="{{$id}}">

      <input type="hidden" name="model" value="App\{{$model}}">
      <!-- <input type="hidden" name="gallery" value="true"> -->
    {{csrf_field()}}
    </form>
  <a class="btn btn-success btn-lg pull-right" href="/system/{{$ruta}}">Salvar</a>
  </div>
</div>
  @endsection
