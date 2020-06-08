@extends("theme.$theme.layout")

@section('titulo')
    Sistema Menus
@endsection   

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')    
<section class="content-header">
    <div class="container-fluid">
        @include('includes.form-error')
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Editar Menu</h1>
            </div>
            <div class="row col-sm-3 card-tolls">     
                <a href="{{route('menu.index')}}" class="btn btn-block btn-warning">
                    <i class="fas fa-clipboard-list"></i> Volver al Listado de Menus
                </a>    
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <form action="{{route('menu.update', ['id' => $data->id])}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off">
            @csrf  @method("put")
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Informacion del Menu</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">    @include('includes.formularios.form-menu')    </div>
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