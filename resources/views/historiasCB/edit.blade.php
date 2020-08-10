@extends("theme.$theme.layout")

@section('titulo')
    Editar Historia Clinica
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

@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/file/index.js")}}" type="text/javascript"></script>       
    <script src="{{asset("assets/pages/scripts/admin/select2/index.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/forms-dinamicos/index.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/forms-dinamicos/index2.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/textArea/index.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/autocomplete/index.js")}}" type="text/javascript"></script>        
        
@endsection

@section('contenido')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-9">
                    <h1>{{$identificacion->primerNombre}} {{$identificacion->segundoNombre}} {{$identificacion->primerApellido}} {{$identificacion->segundoApellido}} - {{$identificacion->tipoDocumento}} - {{$identificacion->numeroIdentificacion}}</h1>
                </div>
                <div class="col-sm-3">        
                    <a href="{{route('listaAtenciones.index', ['id' => $identificacion->id])}}" class="btn btn-block btn-warning">
                        <i class="fas fa-clipboard-list"></i> Lista de Atenciones
                    </a>
                </div>   
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">                   
            <form action="{{route('historiaC.update', ['id'=>$identificacion->id, 'idh'=>$eventos->id])}}" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf @method("put")
                <!-- Inicio Historia Clinica-->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Historia Clinica</h3>                
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosFormatoBase')    </div>
                    </div>
                <!-- Fin historia clinica-->
                
                <!-- Inicio Antecedentes-->
                    <div class="card card-success">
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
                    <div class="card card-success">
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
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Examen Fisico</h3>                
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosExamenFisico')    </div>
                    </div>  
                <!-- Fin Examen Fisico-->
                
                <!-- Inicio Formulas-->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Formulas</h3>                
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body"> @include('includes.formularios.form-datosFormulas')    </div>
                </div>
                <!-- Fin Formulas--> 

                <!-- Inicio Recomendaciones-->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Recomendaciones</h3>                
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body"> @include('includes.formularios.form-datosRecomendaciones')    </div>
                </div>
                <!-- Fin Recomendaciones--> 

               <!-- Inicio Consultas-->
                    <div class="card card-success">
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
                        <div class="col-lg-6">    @include('includes.boton-form-crear2')    </div>              
                    </div>
                </div>  
                <!-- Fin Botones-->
            </form>
        </div>
    </section>


@endsection