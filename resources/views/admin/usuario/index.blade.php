@extends("theme.$theme.layout")

@section('titulo')
    Pacientes
@endsection   
@section('contenido')

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lista Usuarios</h3>
                </div>
                <div class="card-tolls">
                    <a href="{{route('usuario.create')}}" class="btn btn-block btn-info btn-sm">
                        <i class=""></i> Crear Usuario
                    </a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap  table-striped">
                        <thead>                  
                            <tr>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th class="width70"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $datas as $data)
                                <tr>
                                    <td>{{$data->usuario}}</td>
                                    <td>{{$data->nombre}}</td>
                                    <td>{{$data->email}}</td>        
                                    <td>
                                        @foreach ($data->roles as $rol)
                                            {{$loop->last ? $rol->nombre : $rol->nombre . ', '}} 
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
    </div>


@endsection
