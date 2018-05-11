@extends('home')

@section('content')
	<input type="hidden" class="type_form" value="">
	<div class="content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-12">
					<div class="card">
						<div class="card-header" data-background-color="blue">
							<h4 class="title">Tipo de Lavado</h4>
							<p class="category">A continuación se muestran los  x s registrados en el sistema</p>
						</div>
						<div class="card-content">
							<div class="row">
								<div class="col-sm-12">
                  <a class="btn btn-success pull-right" href="{{route('washingtype.create')}}">Crear<i class="material-icons">face</i></a>

								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="table-responsive">


<table class="table table-striped table-bordered" cellspacing="0" width="100%">
 <thead>
   <tr>
         <th>Tipo de Lavado</th>
         <th>Auto</th>
         <th>Donde se encuentra.</th>

         <th>Acción</th>
   </tr>
 </thead>
 <tbody>
   @foreach($washingtypes as $washingtype)
       <tr>
         <th>{{ $washingtype->typewash  }}</th>
         <td>{{ $washingtype->auto  }}</td>
         <td>{{ $washingtype->location  }}</td>

         <td>
          <center><a class="btn btn-success" href="{{route('washingtype.edit',$washingtype->idt) }}">Editar</a>
           <a class="btn btn-default" href="">Eliminar</a>
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
				modalSystem("Eliminar Usuario","Estas a punto de elimar el usuario con el id "+id);
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


				var respuesta = $.ajax({
	        method: "POST",
	        url: model+"/delete",
	        data: {
	          id: id,
	        },
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
