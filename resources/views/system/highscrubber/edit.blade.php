
@extends('home')




@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h3 class="title text-center">Editar Lavador {{$highuser->name}}</h3>
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
                        <div class="card-content">


                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-2">
                                  <div class="row">

                                    <div class="col-md-4">
                                      <div class="card card-profile">
                                        <div class="card-avatar">
                                          <a href="#pablo">
                                            <img class="img" src="/public/images/{{$highuser->photo}}" />
                                          </a>
                                        </div>

                                        <div class="content">
                                          <h4 class="card-title">{{$highuser->name}} {{$highuser->last}} </h4>

                                        </div>
                                      </div>
                                    </div>


                                        <div class="col-sm-3">
                                          <form action="{{ route('Scrubber.uploadimage') }}" class="dropzone" id="myDropzone" method="post" enctype="multipart/form-data">
                                          <input type="hidden" name="entity_id" value="{{$highuser->id}}">
                                          <input type="hidden" name="model" value="App\Scrubber">
                                          <!-- <input type="hidden" name="gallery" value="true"> -->
                                        {{csrf_field()}}
                                          </form>
                                        </div>
                                  </div>



                                    <form action="/system/highscrubber/{{ $highuser->id}}"  method="post" >

                                      {{csrf_field()}}
                                      {{ method_field('PUT') }}
                                      <div class="row">


                                        <div class="col-sm-3">
                                               <div class="form-group ">
                                                   <label class="control-label">Nombre(s): *</label>
                                                   <input type="text" class="form-control" name="name"
                                                          value="{{$highuser->name}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                        </div>

                                        <div class="col-sm-3">
                                                <div class="form-group ">
                                                    <label class="control-label">Apellido(s): *</label>
                                                    <input type="text" class="form-control" name="last"
                                                           value="{{$highuser->last}}" required>
                                                    <span class="material-input"></span></div>
                                        </div>



                                        <div class="col-sm-3">
                                               <div class="form-group ">
                                                   <label class="control-label">E-mail: *</label>
                                                   <input type="email" class="form-control" name="mail" readonly="readonly"
                                                          value="{{$highuser->mail}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>


                                      </div>
                                      <div class="row">
                                        <div class="col-sm-3">
                                               <div class="form-group ">
                                                   <label class="control-label">Telefono: *</label>
                                                   <input type="text" class="form-control" name="phone"
                                                          value="{{$highuser->phone}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>
                                       <div class="col-sm-3">
                                              <div class="form-group ">
                                                  <label class="control-label">Contraseña: *</label>
                                                  <input type="password" class="form-control" name="pass"
                                                         value="{{$highuser->pass}}" required>
                                                  <span class="material-input"></span>
                                              </div>
                                      </div>



                                      </div>
                                      <button type="submit" class="btn btn-success btn-lg pull-right">Actualizar Ahora</button>














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
