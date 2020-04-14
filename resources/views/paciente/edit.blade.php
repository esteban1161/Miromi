@extends("theme.$theme.layout")

@section('titulo')
    Editar Pacientes
@endsection   

@section('styles')
@endsection

@section('scriptsPlugins')
@endsection

@section('scripts')
@endsection


@section('contenido')    
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Editar Paciente</h3>
            </div>
            <div class="card-tolls">
                <a href="{{route('paciente.index')}}" class="btn btn-block btn-info btn-sm">
                    <i class=""></i>Volver al Listado de Pacientes
                </a>
            </div>
            <form action="{{route('paciente.update', ['id' => $data->id ])}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off">
                @csrf @method("put")
                <div class="card-body"> @include('includes.formularios.form-datosIdentificacion')    </div>
                <div class="card-body"> @include('includes.formularios.form-datosDemograficos')    </div>
                <div class="card-body"> @include('includes.formularios.form-datosAfiliacion')    </div>
                <div class="card-body"> @include('includes.formularios.form-datosTelefonicos')    </div> 
                <div class="card-body"> @include('includes.formularios.form-datosCorreo')    </div> 
                
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">    @include('includes.boton-form-editar')    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection