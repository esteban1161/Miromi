@extends("theme.$theme.layout")

@section('titulo')
    Crear Roles
@endsection   

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">        
        <div class="col-lg 12">      
            @include('includes.form-error')
            @include('includes.mensaje')       
            <div class="card card-danger">
                <div class="card-header with-border">
                    <h3 class="card-title">Crear Rol</h3>                    
                </div>
                <div class="card-tolls pull-right">
                    <a href="{{route('rol.index')}}" class="btn btn-block btn-info btn-sm">
                        <i class=""></i> Volver al listado
                    </a>
                </div>
                <form action="{{route('rol.store')}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off">
                    @csrf
                        <div class="card-body">    @include('includes.formularios.form-rol')    </div>
                        <div class="card-footer">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection 
