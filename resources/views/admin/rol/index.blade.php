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
            @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header with-border">
                    <h3 class="card-title">Roles</h3>                            
                </div>
                <div class="card-tolls">
                    <a href="{{route('rol.create')}}" class="btn btn-block btn-info btn-sm">
                        <i class=""></i> Crear Rol
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body p-0" >
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
            </div>

        </div>

    </div>

@endsection 