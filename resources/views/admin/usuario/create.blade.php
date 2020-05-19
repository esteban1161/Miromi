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
                <h1>Crear Usuario</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <form action="{{route('usuario.store')}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off">
            @csrf
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Informacion del Usuario</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">    @include('includes.formularios.form-datosUsuario')    </div>
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