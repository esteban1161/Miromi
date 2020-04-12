<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('titulo') | Miromi</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/daterangepicker/daterangepicker.css")}}">

        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset("assets/$theme/dist/css/adminlte.min.css")}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!--Carga stylos dependiendo de la pagina enlasada-->

        
        <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/bootstrap-datePicker/css/bootstrap-datepicker3.css")}}">
        <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/bootstrap-datePicker/css/bootstrap-datepicker.standalone.css")}}">
        <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
        <!-- Languaje -->
        <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>



        @yield('styles')    

        <link rel="stylesheet" href="{{ asset("assets/css/custom.css")}}">

        
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <!-- Site wrapper -->
        <div class="wrapper">

        <!--Inicio Header-->

            @include("theme/$theme/header")

        <!--FIn Header-->
        <!--Inicio Aside-->

            @include("theme/$theme/aside")

        <!--FIn Aside-->|
            <div class="content-wrapper">
                <section class="content">
                    @yield('contenido')
                </section>
            </div>  
            
            <!--InicioFooter-->            
            @include("theme/$theme/footer")
            <!--Fin Footer-->
            {{-- Inicio Ventana Modal --}}
            @if(session()->get("roles") && count(session()->get("roles")) > 1)
            @csrf
            <div class="modal fade" id="modal-seleccionar-rol" data-rol-set="{{empty(session()->get("rol_id")) ? 'NO' : 'SI'}}" tabindex="-1" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Roles de Usuario</h4>
                        </div>
                        <div class="modal-body">
                            <p>Cuentas con mas de un Rol en la plataforma, a continuación seleccione con cual de ellos desea trabajar</p>
                            @foreach(session()->get("roles") as $key => $rol)
                                <li>
                                    <a href="#" class="asignar-rol" data-rolid="{{$rol['id']}}" data-rolnombre="{{$rol["nombre"]}}">
                                        {{$rol["nombre"]}}
                                    </a>
                                </li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{-- Fin Ventana Modal --}}
        </div>

        

        <!-- jQuery -->
        <script src="{{ asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

        <script src="{{ asset("assets/$theme/plugins/select2/js/select2.full.min.js")}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        <!-- Jquery-Validation -->
        <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
        <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>

        <script src="{{asset("assets/js/scripts.js")}}"></script>

        <script src="{{asset("assets/js/funciones.js")}}"></script>       
        
        <script>
            function funcionBoton(){
                history.go(-1);
            }
        </script>

        
        @yield('scriptsPlugins')
        
        @yield('scripts')
        
    </body>

</html>