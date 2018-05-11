<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ url('/src/assets/img/apple-icon.png')}}" />
	<link rel="icon" type="image/png" href="{{ url('/src/assets/img/favicon.png')}}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title','Sistem|Lavandotuauto')</title>

  	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ url('/src/assets/css/bootstrap.min.css')}}"  rel="stylesheet" />
		<link href="{{ url('/public/css/app.css')}}" rel="stylesheet">

    <!--  Material Dashboard CSS    -->
    <link href="{{ url('/src/assets/css/material-dashboard.css')}}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ url('/src/assets/css/demo_admin.css')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

	<!-- Styles for Tables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-flash-1.2.2/b-print-1.2.2/cr-1.3.2/r-2.1.0/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/src/assets/css/dropzone.css')}}">

</head>

<body>

	<div class="wrapper">
		@include('system.partition.menu')


		    <div class="main-panel">

		@include('system.partition.nav')

				@yield('content')

				<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul>
								<li>
									<a href="#">
										Inicio
									</a>
								</li>
								<li>
									<a href="#">
										Nosotros
									</a>
								</li>
								<li>
									<a href="#">
										Blog
									</a>
								</li>
								<li>
									<a href="#">
									   Contacto
									</a>
								</li>
							</ul>
						</nav>
						<p class="copyright pull-right">
							&copy; <script>document.write(new Date().getFullYear())</script> <a h>Desarrollo Escobar</a>,
						</p>
					</div>
				</footer>
			</div>
		</div>


		<div class="modal fade" id="modal_system" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="modal_system_label">Modal title</h4>
	      </div>
	      <div class="modal-body" id="modal_system_msg"> Aplicar operación</div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-info btn-simple t_action_system">Aceptar</button>
	      </div>
	    </div>
	  </div>
	</div>


	<div class="modal fade" id="modal_msg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>




</body>

<!-- Js for Tables -->

<!--   Core JS Files   -->
<script src="{{ url('/src/assets/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
<script src="{{ url('/src/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ url('/src/assets/js/material.min.js')}}"  type="text/javascript"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-flash-1.2.2/b-print-1.2.2/cr-1.3.2/r-2.1.0/datatables.min.js"></script>


<!--  Charts Plugin -->
<script src= "{{ url('/src/assets/js/chartist.min.js')}}" ></script>

<!--  Notifications Plugin    -->
<script src="{{ url('/src/assets/js/bootstrap-notify.js')}}" ></script>

<!--  Google Maps Plugin
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
-->

<!-- Material Dashboard javascript methods -->
<script src="{{ url('/src/assets/js/material-dashboard.js')}}"   ></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url('/src/assets/js/demo.js')}}"   ></script>
<!-- Dropzpne -->
<script src="{{ url('/src/assets/js/dropzone.js')}}"   ></script>




<script>

	$(document).ready(function() {
		$.extend( $.fn.dataTable.defaults, {
			"language": {
				"emptyTable":     "No hay registros",
				"lengthMenu": "Se muestran _MENU_ registros por página",
				"zeroRecords": "No hay registros con el criterio de busqueda",
				"info": "Estas viendo la página _PAGE_ de _PAGES_",
				"infoEmpty": "No hay registros",
				"infoFiltered": "(filtered from _MAX_ total records)",
				"loadingRecords": "Cargando ...",
				"processing":     "Procesando ...",
				"search":         "Buscar:",
				"paginate": {
					"first":      "Primero",
					"last":       "Anterior",
					"next":       "Siguiente",
					"previous":   "Anterior"
				},
			}
		} );


	});






</script>

@yield('js')

</html>
