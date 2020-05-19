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

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1>Lista de Atenciones a {{$identificacion->primerNombre}}</h1>
                </div>
                <div class="row col-sm-4 card-tolls">                 
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">
                                <i class="fas fa-clipboard-list"></i> Formatos
                            </button>
                            <div class="dropdown-menu">                                
                                @foreach ($data->formularios as $formulario)
                                    <a class="dropdown-item" href="{{route($formulario->route, ['id'=>$identificacion->id])}}">
                                        <i class="fas fa-book-medical"></i> {{$formulario->nombre}}</a>                                        
                                @endforeach
                            </div>                   
                        </div>                               
                        <div>        
                            <a href="{{route('paciente.index')}}" class="btn btn-block btn-warning">
                                <i class="fas fa-clipboard-list"></i> Lista de pacientes
                            </a>
                        </div>                            
                    </div> 
                </div>                             
            </div><!-- /.container-fluid -->
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info"> 
                <div class="card-header">                
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
    </section>
@endsection

