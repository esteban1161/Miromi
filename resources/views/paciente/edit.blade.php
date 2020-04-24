@extends("theme.$theme.layout")

@section('titulo')
    Editar Pacientes
@endsection   

@section('styles')
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
@endsection

@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/select2/js/select2.full.min.js")}}"></script>   
    <script src="{{ asset("assets/$theme/plugins/bs-custom-file-input/bs-custom-file-input.min.js")}}"></script>

@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/tablas/index.js")}}" type="text/javascript"></script>   
    <script src="{{asset("assets/pages/scripts/admin/file/index.js")}}" type="text/javascript"></script>       

@endsection


@section('contenido')    
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-success">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-9">
                        <h3 class="card-title">Editar Paciente</h3>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-tolls">
                            <a href="{{route('paciente.index')}}" class="btn btn-block btn-primary btn-xs">
                                <i class="fas fa-clipboard-list"></i>Listado de Pacientes
                            </a>
                        </div>
                    </div>                    
                </div>
            </div>
            <form action="{{route('paciente.update', ['id' => $data->id ])}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf @method("put")
                <div class="card-body"> @include('includes.formularios.form-datosIdentificacion')    </div>
                <div class="card-body"> @include('includes.formularios.form-datosDemograficos')    </div>
                <div class="card-body"> @include('includes.formularios.form-datosAfiliacion')    </div>                
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">    @include('includes.boton-form-editar')    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection