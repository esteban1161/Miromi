@extends("theme.$theme.layout")

@section('titulo')
    Editar Terapeuta
@endsection   

@section('styles')
    <link rel="stylesheet" href="{{ asset("assets/js/bootstrap-fileinput/css/fileinput.min.css")}}"> 

@endsection

@section('scriptsPlugins')
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
            <div class="col-sm-12">
                <h1>Editar Perfil del Terapeuta</h1>

            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">      
        
        <form action="{{route('terapeuta.update', ['id' => $data->id ])}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
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
                    <h3 class="card-title">Academicos</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body"> @include('includes.formularios.form-datosAcademicos')    </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Consultorios</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body"> @include('includes.formularios.form-datosConsultorios')    </div>
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