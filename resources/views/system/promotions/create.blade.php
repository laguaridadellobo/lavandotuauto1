
@extends('home')




@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h3 class="title text-center">Crear Promociones de lavado</h3>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-2">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br/><br/>
                                              </div>
                                    </div>

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



                                    <form action="/system/promotions"  method="POST" enctype="multipart/form-data">
                                      {{csrf_field()}}
                                      <div class="row">
                                        <div class="col-sm-5">

                                               <div class="form-group ">
                                                   <label class="control-label">Nombre(s): *</label>
                                                   <input type="text" class="form-control" name="name"
                                                          value="{{old('name')}}"required>
                                                   <span class="material-input"></span>
                                               </div>
                                        </div>
                                        <div class="col-sm-5">
                                                <div class="form-group ">
                                                    <label class="control-label">Costo: *</label>
                                                    <input type="number" class="form-control" name="last"
                                                        value="{{old('last')}}" required>
                                                    <span class="material-input"></span></div>
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-success btn-lg pull-right">Registrar Ahora</button>
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
