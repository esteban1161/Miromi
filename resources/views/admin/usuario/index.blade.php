@extends("theme.$theme.layout")

@section('titulo')
    Pacientes
@endsection   
@section('contenido')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-lg-9">
                <h1 class="card-title">Lista Usuarios</h1>
            </div>
            <div class="col-lg-3">
                <div class="card-tolls">
                    <a href="{{route('usuario.create')}}" class="btn btn-block btn-danger btn-sm">
                        <i class="fas fa-user-plus"></i> Crear Usuario
                    </a>
                </div>
            </div>        
        </div><!-- /.container-fluid -->
        @include('includes.mensaje')        
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">              
            </div>            
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap  table-striped">
                    <thead>                  
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>                            
                            <th>Roles</th>
                            <th>Formularios</th>
                            <th>Terapeutas</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $datas as $data)
                            <tr>
                                <td>{{$data->usuario}}</td>
                                <td>{{$data->nombre}}</td>                                
                                <td>
                                    @foreach ($data->roles as $rol)
                                        {{$loop->last ? $rol->nombre : $rol->nombre . ', '}} 
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($data->formularios as $formulario)
                                        {{$loop->last ? $formulario->nombre : $formulario->nombre.', '}}                                        
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($data->usuarios as $usuario)
                                        {{$loop->last ? $usuario->nombre : $formulario->usuario.', '}}                                        
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('usuario.edit', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{route('usuario.destroy', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
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
