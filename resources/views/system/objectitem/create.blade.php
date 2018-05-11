
@extends('home')




@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h3 class="title text-center">Agrega Objetos de Valor dentro de tu auto</h3>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-2">


                                    @if(Session::has('flash_message'))
                                              <div class="alert alert-success">
                                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                  {{ Session::get('flash_message') }}
                                              </div>
                                          @endif


                                          @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif



                                    <form action="/system/objectitem"  method="POST" enctype="multipart/form-data">

                                      {{csrf_field()}}


                                      <div class="row">
                                        <div class="col-sm-2">

                                               <div class="form-group ">
                                                   <label class="control-label">Computadora: *</label>
                                                   <input type="number"  min="0" max="10" class="form-control" name="computadora"
                                                        value="0" >
                                                   <span class="material-input"></span>
                                               </div>
                                        </div>

                                        <div class="col-sm-2">
                                                <div class="form-group ">
                                                    <label class="control-label">Bolso: *</label>
                                                    <input type="number" class="form-control" name="bolso"
                                                           value="0">
                                                    <span class="material-input"></span></div>
                                        </div>



                                        <div class="col-sm-2">
                                               <div class="form-group ">
                                                   <label class="control-label">Documentos: *</label>
                                                   <input type="number" class="form-control" name="documentos"
                                                    value="0" >
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>
                                       <div class="col-sm-2">
                                              <div class="form-group ">
                                                  <label class="control-label">Llaves: *</label>
                                                  <input type="number" class="form-control" name="llaves"
                                                         value="0" >
                                                  <span class="material-input"></span>
                                              </div>
                                       </div>
                                       <div class="col-sm-2">
                                              <div class="form-group ">
                                                  <label class="control-label">Portafolio: *</label>
                                                  <input type="number" class="form-control" name="portafolio"
                                                        value="0" >
                                                  <span class="material-input"></span>
                                              </div>
                                      </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-2">

                                               <div class="form-group ">
                                                   <label class="control-label">Mochila: *</label>
                                                   <input type="number"  min="0" max="10" class="form-control" name="mochila"
                                                          value="0">
                                                   <span class="material-input"></span>
                                               </div>
                                        </div>

                                        <div class="col-sm-2">
                                                <div class="form-group ">
                                                    <label class="control-label">Ropa: *</label>
                                                    <input type="number" class="form-control" name="ropa"
                                                           value="0">
                                                    <span class="material-input"></span></div>
                                        </div>



                                        <div class="col-sm-2">
                                               <div class="form-group ">
                                                   <label class="control-label">Reloj: *</label>
                                                   <input type="number" class="form-control" name="reloj"
                                                        value="0">
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>
                                       <div class="col-sm-2">
                                              <div class="form-group ">
                                                  <label class="control-label">Telefono: *</label>
                                                  <input type="number" class="form-control" name="telefono"
                                                      value="0" >
                                                  <span class="material-input"></span>
                                              </div>
                                       </div>
                                       <div class="col-sm-2">
                                              <div class="form-group ">
                                                  <label class="control-label">Otros: *</label>
                                                  <input type="text" class="form-control" name="otros"
                                                      value="0"  >
                                                  <span class="material-input"></span>
                                              </div>
                                      </div>



                                      </div>

                                      </div>
                                      <button type="submit" class="btn btn-success btn-lg pull-right">Registrarme Ahora</button>

                                    </form>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  @endsection
