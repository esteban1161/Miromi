@extends("theme.$theme.layout")

@section('titulo')
    Editar Historia Clinica
@endsection   

@section('styles')
    <link rel="stylesheet" href="{{asset("assets/js/easy-autocomplete/dist/easy-autocomplete.min.css")}}">
    


@endsection

@section('scriptsPlugins')
    <script src="{{asset("assets/js/easy-autocomplete/dist/jquery.easy-autocomplete.min.js")}}"></script>

@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/forms-dinamicos/index2.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/textArea/index.js")}}" type="text/javascript"></script>
        
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
            <form action="{{route('historiaF.update', ['id'=>$identificacion->id, 'idh'=>$eventos->id])}}" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf @method("put")
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Historia Clinica</h3>                
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">      @include('includes.formularios.forms-HistoriasClinicas.form-datosFormatoBase2')     </div>
                </div>
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Formulas</h3>                
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">@include('includes.formularios.form-datosFormulas')</div>    
                </div>
                
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Recomendacion</h3>                
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">@include('includes.formularios.form-datosRecomendaciones') </div>
                
                </div>  
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