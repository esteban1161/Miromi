!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title', 'Mirome') | Mediclic</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset("assets/$theme/dist/css/adminlte.min.css")}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!--Carga stylos dependiendo de la pagina enlasada-->
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


        </div>

        <!-- jQuery -->
        <script src="{{ asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        <!-- Jquery-Validation -->
        <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
        <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>

        <script src="{{asset("assets/js/funciones.js")}}"></script>        

        @yield('scriptsPlugins')
        
        @yield('scripts')

    </body>

</html>