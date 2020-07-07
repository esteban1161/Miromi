@extends("theme.$theme.layout")

@section('titulo')
    Crear Notas
@endsection   

@section('styles')
@endsection
    
@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/ckeditor/ckeditor.js")}}"></script>

@endsection

@section('scripts')
    <script src="{{ asset("assets/pages/scripts/admin/editor/index.js")}}"></script>    
@endsection

@section('contenido')

<section class="content-header">
    <div class="container-fluid">
        @include('includes.mensaje')      
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Editar una Nota</h1>
            </div>
            <div class="row col-sm-3 card-tolls">           
                <a href="{{route('notas.index')}}" class="btn btn-block btn-warning">
                    <i class="fas fa-clipboard-list"></i> Lista de Notas
                </a>
            </div>                
        </div><!-- /.container-fluid -->
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <form action="{{route('notas.update', ['id' => $data->id ])}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf @method("put")
            <div class="card card-success">  
                <div class="card-header">
                    <h3 class="card-title">Nota</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body"> @include('includes.formularios.form-datosNotas') </div>
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