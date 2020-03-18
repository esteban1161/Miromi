@extends("theme.$theme.layout")

@section('titulo')
    Pacientes
@endsection   
@section('contenido')

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lista Pacientes</h3>
                </div>
                <div class="card-tolls">
                    <a href="{{route('paciente.create')}}" class="btn btn-block btn-info btn-sm">
                        <i class=""></i> Crear Paciente
                    </a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap  table-striped">
                        <thead>                  
                            <tr>
                                <th>Primer Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Numero Identificaicon</th>
                                <th>Fecha Nacimiento</th>
                                <th>Sexo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $identificacion as $identidad)
                                <tr>
                                    <td>{{$identidad->primerNombre}}</td>
                                    <td>{{$identidad->primerApellido}}</td>
                                    <td>{{$identidad->numeroIdentificacion}}</td>
                                    <td>{{$identidad->fechaNacimiento}}</td>
                                    <td>{{$identidad->sexo}}</td>     
                                    <td>
                                        <a href="{{route('paciente.show', ['id'=>$identidad->id])}}" class="btn-accion-tabla tooltipsC" title="Mostrar este Resgistro">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('paciente.edit', ['id' => $identidad->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este Registro">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                      {{--   <form action="{{route('paciente.destroy', ['id' => $dato->id])}}" class="d-inline form-eliminar" method="POST">
                                            @csrf @method("delete")
                                            <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                                <i class="fas fa-trash-alt text-danger"></i>
                                            </button>
                                        </form> --}}
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
