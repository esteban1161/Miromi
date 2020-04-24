@extends("theme.$theme.layout")

@section('titulo')
    Editar Terapeuta
@endsection   

@section('styles')
    
@endsection

@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/bs-custom-file-input/bs-custom-file-input.min.js")}}"></script>

@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/file/index.js")}}" type="text/javascript"></script>       
@endsection


@section('contenido')    
<div class="row">
    <div class="col-lg-12">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Editar Perfil del Terapeuta</h3>
            </div>
            <form action="{{route('terapeuta.update', ['id' => $data->id ])}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf @method("put")
                <div class="card-body"> @include('includes.formularios.form-datosIdentificacion')    </div>
                <div class="card-body"> @include('includes.formularios.form-datosAcademicos')    </div>
                <div class="card-body"> @include('includes.formularios.form-datosConsultorios')    </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>            
                </div>    
            </form>
        </div>
    </div>
</div>

@endsection