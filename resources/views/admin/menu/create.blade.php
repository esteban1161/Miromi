@extends("theme.$theme.layout")

@section('titulo')
    Sistema Menus
@endsection   

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')    
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Crear Menus</h3>
            </div>
            <div class="card-tolls">
                <a href="{{route('menu.index')}}" class="btn btn-block btn-info btn-sm">
                    <i class=""></i>Volver al Listado de menus
                </a>
            </div>
            <form action="{{route('menu.store')}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">    @include('includes.formularios.form-menu')    </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection