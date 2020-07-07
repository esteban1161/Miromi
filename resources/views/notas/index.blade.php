@extends("theme.$theme.layout")

@section('titulo')
    Notas
@endsection   

@section('styles')
@endsection
    
@section('scriptsPlugins')
@endsection

@section('scripts')
@endsection

@section('contenido')

<section class="content-header">
    <div class="container-fluid">
        @include('includes.mensaje')      
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Lista Notas</h1>
            </div>
            <div class="row col-sm-3 card-tolls">           
                <a href="{{route('notas.create')}}" class="btn btn-block btn-danger">
                    <i class="fas fa-user-plus"></i> Crear Notas
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
                            <th>Fecha de Nota</th>
                            <th>Titulo de la Nota</th>
                            <th>Informacion</th>
                        </tr>
                    </thead>
                    <tbody>                            
                        @foreach ( $eventos as $evento)
                            <tr>
                                <td>{{$evento->created_at}}</td>
                                <td>{{$evento->notas->titulo}}</td>
                                <td>
                                    <a href="{{route('notas.edit', ['id' => $evento->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este Registro">
                                        <i class="fas fa-pencil-alt"></i>
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