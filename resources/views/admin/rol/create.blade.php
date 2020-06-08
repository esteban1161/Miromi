@extends("theme.$theme.layout")

@section('titulo')
    Crear Roles
@endsection   

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<section class="content-header">
    <div class="container-fluid">
        @include('includes.form-error')
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Crear Usuario</h1>
            </div>
            <div class="row col-sm-3 card-tolls">     
                <a href="{{route('rol.index')}}" class="btn btn-block btn-info">
                    <i class="fas fa-clipboard-list"></i> Volver al listado
                </a>      
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <form action="{{route('rol.store')}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off">
            @csrf
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Informacion del Usuario</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">    @include('includes.formularios.form-rol')    </div>
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
