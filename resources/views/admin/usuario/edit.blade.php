@extends("theme.$theme.layout")

@section('titulo')
    Sistema Usuarios
@endsection   

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/usuario/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')    

<section class="content-header">
    <div class="container-fluid">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Editar Usuario</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <form action="{{route('usuario.update', ['id' => $data->id])}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off">
            @csrf @method("put")
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Editar Informacion del Usuario</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">    @include('includes.formularios.form-datosUsuario')    </div>
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