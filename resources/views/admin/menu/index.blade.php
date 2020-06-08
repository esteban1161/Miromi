@extends("theme.$theme.layout")

@section('titulo')
    Sistema Menus
@endsection   

@section('styles')
    <link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css ")}}" rel="stylesheet" type="text/css">
@endsection

@section('scriptsPlugins')
    <script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

@section('contenido')
<section class="content-header">
    <div class="container-fluid">
        @include('includes.mensaje')        
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Menus</h1>
            </div>
            <div class="row col-sm-3 card-tolls">  
                <a href="{{route('menu.create')}}" class="btn btn-block btn-danger">
                    <i class="fas fa-th-list"></i> Crear Menu
                </a>     
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">     

            </div>
            <div class="card-body">
                <div class="dd" id="nestable">
                    <ol>
                        @foreach ( $menus as $key => $item)
                            @if ($item["menu_id"] != 0)
                                @break                                    
                            @endif
                            @include("admin.menu.menu-item", ["item" => $item])              
                        @endforeach   
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 