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
                 <h3 class="card-title">Lista de Historias Clinicas de {{$identificacion->primerNombre}}</h3>
            </div>
            <div class="card-tolls">
                <a href="{{route('historiaC.create', ['id'=>$identificacion->id])}}" class="btn btn-block btn-info btn-sm">
                    Crear Historia Clinica
                </a>  
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Formularios
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @if (auth()->id()==1)
                            <a class="dropdown-item" href="{{route('historiaC.create', ['id'=>$identificacion->id])}}">Action</a>
                        @endif
                            <a class="dropdown-item" href="{{route('historiaC.create', ['id'=>$identificacion->id])}}">Another action</a>
                            <a class="dropdown-item" href="">Something else here</a>
                    </div>
                </div>
                <a href="{{route('paciente.index')}}" class="btn btn-block btn-warning btn-sm">
                    Lista de pacientes
            </a>      
            </div>
            <div class="card-body">
                <table id="tPacientes" class="table table-bordered table-striped">
                    <thead>
                        <tr>                            
                            <th>Fecha Consulta</th>
                            <th>Motivo Consulta</th>
                            <th>Plan Tratamiento</th>
                            <th>Informacion</th>
                        </tr>
                    </thead>
                    <tbody>                            
                        @foreach ( $eventos as $evento)
                            <tr>  
                                <td>{{$evento->historiaClinicaB->fechaConsulta}}</td>
                                <td>{{$evento->historiaClinicaB->motivoConsulta}}</td>
                                <td>{{$evento->consulta->plan}}</td>                                     
                                <td>
                                    <a href="{{route('historiaC.show', ['id'=>$identificacion->id, 'idh'=>$evento->id] )}}" class="btn-accion-tabla tooltipsC" title="Mostrar este Resgistro">
                                        <i class="fas fa-eye"></i>
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
