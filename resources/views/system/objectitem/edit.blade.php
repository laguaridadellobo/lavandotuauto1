
@extends('home')




@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h3 class="title text-center">Editar Objetos de valor{{$highuser->name}}</h3>
                        </div>
                        <div class="card-content">


                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-2">
                                    <form action="/system/objectitem/{{ $highuser->id}}"  method="post" >

                                      {{csrf_field()}}
                                      {{ method_field('PUT') }}
                                      <div class="row">
                                        <div class="col-sm-2">

                                               <div class="form-group ">
                                                   <label class="control-label">Computadora: *</label>
                                                   <input type="number"  min="0" max="10" class="form-control" name="computadora"
                                                        value="{{$highuser->computer}}" required >
                                                   <span class="material-input"></span>
                                               </div>
                                        </div>

                                        <div class="col-sm-2">
                                                <div class="form-group ">
                                                    <label class="control-label">Bolso: *</label>
                                                    <input type="number" class="form-control" name="bolso"
                                                           value="{{$highuser->purse}}" required>
                                                    <span class="material-input"></span></div>
                                        </div>



                                        <div class="col-sm-2">
                                               <div class="form-group ">
                                                   <label class="control-label">Documentos: *</label>
                                                   <input type="number" class="form-control" name="documentos"
                                                    value="{{$highuser->documents}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>
                                       <div class="col-sm-2">
                                              <div class="form-group ">
                                                  <label class="control-label">Llaves: *</label>
                                                  <input type="number" class="form-control" name="llaves"
                                                         value="{{$highuser->keys}}" required>
                                                  <span class="material-input"></span>
                                              </div>
                                       </div>
                                       <div class="col-sm-2">
                                              <div class="form-group ">
                                                  <label class="control-label">Portafolio: *</label>
                                                  <input type="number" class="form-control" name="portafolio"
                                                        value="{{$highuser->suitcase}}" required>
                                                  <span class="material-input"></span>
                                              </div>
                                      </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-2">

                                               <div class="form-group ">
                                                   <label class="control-label">Mochila: *</label>
                                                   <input type="number"  min="0" max="10" class="form-control" name="mochila"
                                                          value="{{$highuser->bag}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                        </div>

                                        <div class="col-sm-2">
                                                <div class="form-group ">
                                                    <label class="control-label">Ropa: *</label>
                                                    <input type="number" class="form-control" name="ropa"
                                                          value="{{$highuser->ropa}}" required>
                                                    <span class="material-input"></span></div>
                                        </div>



                                        <div class="col-sm-2">
                                               <div class="form-group ">
                                                   <label class="control-label">Reloj: *</label>
                                                   <input type="number" class="form-control" name="reloj"
                                                        value="{{$highuser->watch}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>
                                       <div class="col-sm-2">
                                              <div class="form-group ">
                                                  <label class="control-label">Telefono: *</label>
                                                  <input type="number" class="form-control" name="telefono"
                                                      value="{{$highuser->phone}}" required >
                                                  <span class="material-input"></span>
                                              </div>
                                       </div>
                                       <div class="col-sm-2">
                                              <div class="form-group ">
                                                  <label class="control-label">Otros: *</label>
                                                  <input type="text" class="form-control" name="otros"
                                                    value="{{$highuser->other}}" required>
                                                  <span class="material-input"></span>
                                              </div>
                                      </div>



                                      </div>

                                      </div>
                                      <button type="submit" class="btn btn-success btn-lg pull-right">Actualizar</button>












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
