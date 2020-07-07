@extends("theme.$theme.layout")

@section('titulo')
    Auxiliar - Pacientes
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
        @include('includes.mensaje')      
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Auxiliar - Lista Pacientes Terapeuta: --- </h1>
            </div>
            <div class="row col-sm-3 card-tolls">           
                <a href="{{route('auxiliar.create')}}" class="btn btn-block btn-danger">
                    <i class="fas fa-user-plus"></i> Crear Paciente
                </a>
            </div>                
        </div><!-- /.container-fluid -->
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="card card-info ">
            <div class="card-header">
                
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
                        </tr>
                    </thead>
                    <tbody>   
                        @foreach ($eventos as $evento)
                        <tr>
                            <td>{{$evento->identificacion->primerNombre}}</td>
                            <td>{{$evento->identificacion->segundoNombre}}</td>
                            <td>{{$evento->identificacion->primerApellido}}</td>                                    
                            <td>{{$evento->identificacion->segundoApellido}}</td>
                            <td>{{$evento->identificacion->numeroIdentificacion}}</td>
                            <td>{{$evento->identificacion->fechaNacimiento}}</td>     
                            
                        </tr>         
                            
                        @endforeach                         
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>

@endsection



