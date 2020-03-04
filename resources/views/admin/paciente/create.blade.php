@extends("theme.$theme.layout")

@section('titulo')
    Crear Pacientes
@endsection   

@section('contenido')    
<div class="row">
    <div class="col-lg-12">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Crear un paciente</h3>
            </div>
            <div class="card-body">
                Aqui va el formulario
            </div>
            <div class="card-footer">
                @include('includes.boton-form-crear')
            </div>
        </div>
    </div>
</div>
@endsection