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
        @include('includes.mensaje')        
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Listado de Roles</h1>
            </div>
            <div class="row col-sm-3 card-tolls">  
                <a href="{{route('rol.create')}}" class="btn btn-block btn-danger">
                    <i class="fas fa-person-booth"></i> Crear Rol
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
                <table class="table ">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $datas as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->nombre}}</td>
                                <td>
                                    <a href="{{route('rol.edit', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{route('rol.destroy', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
                                        @csrf @method("delete")
                                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                    </form> 
                                </td>        
                            </tr>                    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection 