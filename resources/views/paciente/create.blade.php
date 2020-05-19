@extends("theme.$theme.layout")

@section('titulo')
    Crear Pacientes
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
    <script src="{{asset("assets/pages/scripts/admin/select2/index.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/forms-dinamicos/index.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/preview/index.js")}}"type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function (){
            $('#foto').fileinput({
                language: 'es',
                allowedFileExtensions: ['jpg', 'jpeg', 'png'], 
                maxFileSize: 2000,
                showUpload: false,
                showClose: false,
                initialPreviewAsData: true,
                dropZoneEnabled: false,
                theme: "fas",
            });
        });
    </script>
       
   
@endsection

@section('contenido')
    <section class="content-header">
        <div class="container-fluid">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Crear Paciente</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">      
            
            <form action="{{route('paciente.store')}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Identificacion</h3>                
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body"> @include('includes.formularios.form-datosIdentificacion') </div>
                </div>

                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Demograficos</h3>                
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body"> @include('includes.formularios.form-datosDemograficos')    </div>
                </div>

                <div class="card card-danger">
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
                        <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>              
                    </div>
                </div>  
            </form>
        </div>            
    </section>
@endsection