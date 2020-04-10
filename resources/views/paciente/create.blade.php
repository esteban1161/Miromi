@extends("theme.$theme.layout")

@section('titulo')
    Crear Pacientes
@endsection   

@section('styles')
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
@endsection

@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/select2/js/select2.full.min.js")}}"></script>
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/paciente/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')    
<div class="row">
    <div class="col-lg-12">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Crear un paciente</h3>
            </div>
            <form action="{{route('paciente.store')}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off">
                @csrf
                <div class="card-body"> @include('includes.formularios.form-datosIdentificacion')    </div>
                <div class="card-body"> @include('includes.formularios.form-datosDemograficos')    </div>
                <div class="card-body"> @include('includes.formularios.form-datosAfiliacion')    </div>
                <div class="card-body"> @include('includes.formularios.form-datosTelefonicos')    </div>  {{-- Control de añadir mas campos de telefono --}}
                <div class="card-body"> @include('includes.formularios.form-datosCorreo')    </div> 

                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>            
                </div>    
            </form>
        </div>
    </div>
</div>

@endsection