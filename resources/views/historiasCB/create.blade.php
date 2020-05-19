@extends("theme.$theme.layout")

@section('titulo')
    Crear Pacientes
@endsection   

@section('styles')
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/js/easy-autocomplete/dist/easy-autocomplete.min.css")}}">

@endsection

@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/select2/js/select2.full.min.js")}}"></script>   
    <script src="{{ asset("assets/$theme/plugins/bs-custom-file-input/bs-custom-file-input.min.js")}}"></script>
    <script src="{{asset("assets/js/easy-autocomplete/dist/jquery.easy-autocomplete.min.js")}}"></script>

    <script type="text/javascript">
        function setTextareaHeight(textareas) {
            textareas.each(function () {
                var textarea = $(this);
        
                if ( !textarea.hasClass('autoHeightDone') ) {
                    textarea.addClass('autoHeightDone');
        
                    var extraHeight = parseInt(textarea.css('padding-top')) + parseInt(textarea.css('padding-bottom')), // to set total height - padding size
                        h = textarea[0].scrollHeight - extraHeight;
        
                    // init height
                    textarea.height('auto').height(h);
        
                    textarea.bind('keyup', function() {
        
                        textarea.removeAttr('style'); // no funciona el height auto
        
                        h = textarea.get(0).scrollHeight - extraHeight;
        
                        textarea.height(h+'px'); // set new height
                    });
                }
            })
        }
        $(function(){
            setTextareaHeight($('textarea'));
        })
    </script>

@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/file/index.js")}}" type="text/javascript"></script>       
    <script src="{{asset("assets/pages/scripts/admin/select2/index.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/forms-dinamicos/index.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/autocomplete/index.js")}}" type="text/javascript"></script>
    <script type="text/javascript">
        
    </script>
    {{-- <script type="text/javascript">
        var fx = document.getElementById('fx'),
        resultado = document.getElementById('resultado');

        fx.addEventListener('input', function () {
            var error = true;
            try{
                //Si sólo tiene números y signos + - * / ( )
                if (/^[\d-+/*()]+$/.test(fx.value)) {
                    // Evaluar el resultado
                    resultado.innerText = eval(fx.value);
                    error = false;
                }
            } catch (err) { }
            if (error) // Si no se pudo calcular
                resultado.innerText = "Error";
        });
    </script> --}}
    



@endsection

@section('contenido')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Crear Historia Clinica para {{$identificacion->primerNombre}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">                   
            <form action="{{route('historiaC.store', ['id'=>$identificacion->id])}}" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <!-- Inicio Historia Clinica-->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Historia Clinica</h3>                
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosHistoriaClinicaBasica')    </div>
                    </div>
                <!-- Fin historia clinica-->
                
                <!-- Inicio Antecedentes-->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Antecedentes</h3>                
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosAntecedentes')    </div>
                    </div>                
                <!-- Fin Antecedentes-->

                <!-- Inicio Revision Sistema-->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Revision por Sistemas</h3>                
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosRevisionSistema')    </div>
                    </div>  
                <!-- Fin Revision Sistema-->

                <!-- Inicio Examen Fisico-->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Examen Fisico</h3>                
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosExamenFisico')    </div>
                    </div>  
                <!-- Fin Examen Fisico-->
                
               <!-- Inicio Consultas-->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Consulta</h3>                
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosConsultas')    </div>
                    </div>
                <!-- Fin Consultas--> 

                <!-- Inicio Botones-->
                <div class="card">
                    <div class="card-footer">    
                        <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>              
                    </div>
                </div>  
                <!-- Fin Botones-->
            </form>
        </div>
    </section>


@endsection