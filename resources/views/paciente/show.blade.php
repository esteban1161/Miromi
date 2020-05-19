@extends("theme.$theme.layout")

@section('titulo')
    Ver Paciente
@endsection   

@section('styles')
    
@endsection

@section('scriptsPlugins')
    
@endsection

@section('scripts')
@endsection

@section('contenido')
    <div class="row">        
        <div class="col-lg 12">
            @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header with-border">
                    <h3 class="card-title">Informacion del Paciente</h3>
                </div >
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
@endsection 