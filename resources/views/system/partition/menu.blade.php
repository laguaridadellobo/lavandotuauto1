<div class="sidebar" data-color="purple" data-image="
{{ url('/assets/img/sidebar-1.jpg')}}"
>
<!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

      Tip 2: you can also add an image using data-image tag
  -->

<div class="logo">
  <a href='../index.php' class="simple-text">
    Lavando tu Auto
  </a>


</div>

  <div class="sidebar-wrapper">
        <ul class="nav">

                <li >
                    <a href="{{ url('/system')}}" >
                        <i class="material-icons" >dashboard</i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li  >
                    <a href="{{ url('/system/highuser')}}" >
                        <i class="material-icons" >person</i>
                        <p>Usuarios</p>

                    </a>
                </li>
                <li  >
                    <a href="{{ url('/system/highscrubber')}}" >
                        <i class="material-icons" >person_outline</i>
                        <p>Lavadores</p>

                    </a>
                </li>
                <li>
                    <a href="{{ url('/system/enterprice')}}" >
                        <i class="material-icons">business</i>
                        <p>Empresa</p>
                    </a>
                </li>
                <!--<li>
                    <a href="{{ url('/system/washingtype')}}" >
                        <i class="material-icons">local_car_wash</i>
                        <p>Tipo de lavado</p>
                    </a>
                </li>-->

                <li>
                    <a href="{{ url('/system/promotions')}}" >
                        <i class="material-icons">attach_money</i>
                        <p>Promociones</p>
                    </a>
                </li>






        </ul>
  </div>
</div>
