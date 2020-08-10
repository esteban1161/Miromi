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
                <div class="col-sm-7">
                    <h1>Lista de Atenciones - {{$identificacion->primerNombre}} {{$identificacion->segundoNombre}} {{$identificacion->primerApellido}}</h1>
                </div>
                
                <div class="row col-sm-4 card-tolls">                 
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">
                                <i class="fas fa-clipboard-list"></i> Formatos
                            </button>
                            <div class="dropdown-menu">                                
                                @foreach ($data->formularios as $formulario)
                                    <a class="dropdown-item" href="{{route($formulario->routeCreate, ['id'=>$identificacion->id])}}">
                                        <i class="fas fa-book-medical"></i> {{$formulario->nombre}}
                                    </a>                                        
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
                <div class="col-sm-1">
                    <img width="100%" class=" img-fluid" src="{{Storage::url($identificacion->foto ?? "FotosPerfil/user.png")}}">
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
                                <th WIDTH="10%">Fecha</th>
                                <th WIDTH="40%">Motivo Consulta</th>
                                <th WIDTH="20%">Formatos</th>
                                <th WIDTH="20%">Consultorio</th>
                                <th WIDTH="10%">Info</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            @foreach ( $eventos as $evento)
                                <tr>  
                                    <td>{{$evento->formatosBase->fechaConsulta}}</td>
                                    <td>{{$evento->formatosBase->motivoConsulta}}</td>
                                    <td>{{$evento->formularios->nombre}}</td>  
                                    <td>{{$evento->formatosBase->consultorio}}</td>       

                                    <td>
                                        @if ($evento->estado == 1)
                                            <a href="{{route($evento->formularios->routeShow, ['id'=>$identificacion->id, 'idh'=>$evento->id] )}}" class="btn-accion-tabla tooltipsC" title="Mostrar este Resgistro">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        @else
                                            <a href="{{route($evento->formularios->routeEdit, ['id' => $identificacion->id, 'idh'=>$evento->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este Registro">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{route($evento->formularios->routeDestroy, ['id' => $identificacion->id, 'idh'=>$evento->id])}}" method="POST">
                                                @csrf @method("delete")
                                                {{-- <a href="" type="submit"class="btn-accion-tabla tooltipsC" title="Editar este Registro"> 
                                                    <i class="fas fa-trash-alt text-danger"></i>
                                                </a> --}}
                                               <button type="submit" class="eliminar tooltipsC" title="Eliminar este registro">
                                                    <i class="fas fa-trash-alt text-danger"></i>
                                                </button> 
                                            </form>
                                        @endif
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

