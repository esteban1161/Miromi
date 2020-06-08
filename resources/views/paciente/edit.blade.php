@extends("theme.$theme.layout")

@section('titulo')
    Editar Pacientes
@endsection   

@section('styles')
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/js/bootstrap-fileinput/css/fileinput.min.css")}}"> 
@endsection

@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/select2/js/select2.full.min.js")}}"></script>   
    <script src="{{ asset("assets/$theme/plugins/bs-custom-file-input/bs-custom-file-input.min.js")}}"></script>
    <script src="{{ asset("assets/js/bootstrap-fileinput/js/fileinput.min.js")}}"></script>
    <script src="{{ asset("assets/js/bootstrap-fileinput/js/locales/es.js")}}"></script>
    <script src="{{ asset("assets/js/bootstrap-fileinput/themes/fas/theme.min.js")}}"></script>

@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/file/index.js")}}" type="text/javascript"></script>       
    <script src="{{asset("assets/pages/scripts/admin/forms-dinamicos/index.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/imagenPerfil/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')    

<section class="content-header">
    <div class="container-fluid">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Editar Paciente</h1>
            </div>
            <div class="row col-sm-3 card-tolls">  
                <a href="{{route('paciente.index')}}" class="btn btn-block btn-warning">
                    <i class="fas fa-clipboard-list"></i> Lista de pacientes
                </a>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">      
        
        <form action="{{route('paciente.update', ['id' => $data->id ])}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf @method("put")
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Identificacion</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body"> @include('includes.formularios.form-datosIdentificacion') </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Demograficos</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body"> @include('includes.formularios.form-datosDemograficos')    </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Afiliacion</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body"> @include('includes.formularios.form-datosAfiliacion')    </div>
            </div>

            <div class="card">
                <div class="card-footer">    
                    <div class="col-lg-6">    @include('includes.boton-form-editar')    </div>              
                </div>
            </div>  
        </form>
    </div>            
</section>
@endsection