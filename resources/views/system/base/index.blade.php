@extends('home')

@section('content')
	<input type="hidden" class="type_form" value="">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				@if(session('msg'))

					<div class="alert alert-success">
<div class="container-fluid">
  <div class="alert-icon">
	<i class="material-icons">check</i>
  </div>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true"><i class="material-icons">clear</i></span>
  </button>
  <b>Alerta:</b> {{session('msg') }}
</div>
</div>
				@endif
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

				<div class="col-md-12">
					<div class="card">
						<div class="card-header" data-background-color="blue">
							<h4 class="title">{{$type}}s</h4>
							<p class="category">A continuación se muestran los {{$type}}s registrados en el sistema</p>
						</div>
						<div class="card-content">
							<div class="row">
								<div class="col-sm-12">
                  <a class="btn btn-success pull-right" href="{{route(''.$model.'.create')}}">Crear<i class="material-icons">face</i></a>

								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="table-responsive">


<table class="table table-striped table-bordered" cellspacing="0" width="100%">
 <thead>
   <tr>
		 @foreach($columns as $id => $value)
		<th>{{ $id }}</th>
		 @endforeach
         <th>Acción</th>
   </tr>
 </thead>
 <tbody>
   @foreach($data as $entity)
       <tr>
				 @foreach($columns as $id => $value)
 					<td>{{ $entity->$value }}</td>
 					@endforeach

					<td class="">
									<a class="btn btn-success" href="/system/{{$model}}/{{ $entity->id }}/edit">Editar</a>
									<button type="button" id_element="{{$entity->id}}"
									rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs detele_r">
									<i class="fa fa-times"></i>
									</button>
         </td>

       </tr>
  @endforeach


 </tbody>
</table>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('js')

	<script>

	$(document).ready(function() {

		$('.table').DataTable();

	});

	</script>

	<script>

		$(document).ready(function() {

			var type = $('.type_form').val();


			$('.detele_r').click( function(event){
				var element = $(this);
				var id = element.attr('id_element');
				deleteOfModel(id,element);
			});



			//Functions
			function deleteOfModel(id,element){
				modalSystem("Eliminar Usuario","Estas a punto de eliminar el usuario con el id: "+id);
				$('.t_action_system').click(function(){
						$('#modal_system').modal('hide');
						Ajax_delete(type,id);
						element.parents('tr').remove();
				});
			}


			function modalSystem(title="Alerta",msg="Terminar la operación"){
					$('#modal_system_label').text(title);
					$('#modal_system_msg').text(msg);
					$('#modal_system').modal();
			}

			function Ajax_delete(model,id){


				var token = '{{ csrf_token() }}';
	    		$.ajax({
	        url: model+"{{$model}}/"+id,
	        type: 'POST',
	        data: {_method: 'delete', _token :token},



	        success: function (resp) {

				console.log("Todo ok");

	        },

	        error: function( req, status, err ) {

				console.log(req.responseText);

	        },

	      });
			}

		}); //end

	</script>

@endsection
