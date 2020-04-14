@extends("theme.$theme.layout")

@section('titulo')
    Crear Pacientes
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
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Crear un paciente</h3>
            </div>
            <form action="{{route('historiaC.store', ['id'=>$identificacion->id])}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off">
                @csrf
                <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosHistoriaClinicaBasica')    </div>
                <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosAntecedentes')    </div>
                <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosRevisionSistema')    </div>
                <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosExamenFisico')    </div>
                <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosConsultas')    </div>
                

                
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>            
                </div>    
            </form>
        </div>
    </div>
</div>

@endsection