@extends("theme.$theme.layout")

@section('titulo')
    Pacientes
@endsection   

@section('styles')
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}">
@endsection
    
@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/datatables/jquery.dataTables.js")}}"></script>
    <script src="{{ asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}"></script>
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/tablas/index.js")}}" type="text/javascript"></script>
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
                <div class="card-body">
                    <table id="tPacientes" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Primer Nombre</th>
                                <th>Segundo Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>
                                <th>Numero Identificaicon</th>
                                <th>Fecha Nacimiento</th>
                                <th>Informacion</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            @foreach ( $eventos as $evento)
                                <tr>
                                    <td>{{$evento->identificacion->primerNombre}}</td>
                                    <td>{{$evento->identificacion->segundoNombre}}</td>
                                    <td>{{$evento->identificacion->primerApellido}}</td>                                    
                                    <td>{{$evento->identificacion->segundoApellido}}</td>
                                    <td>{{$evento->identificacion->numeroIdentificacion}}</td>
                                    <td>{{$evento->identificacion->fechaNacimiento}}</td>     
                                    <td>
                                        <a href="{{route('paciente.show', ['id'=>$evento->id])}}" class="btn-accion-tabla tooltipsC" title="Mostrar este Resgistro">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('paciente.edit', ['id' => $evento->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este Registro">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="{{route('historiaC.index', ['id' => $evento->identificacion->id])}}" class="btn-accion-tabla tooltipsC" title="Ver Historias Clinicas">
                                            <i class="fas fa-address-book"></i>
                                        </a>
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
