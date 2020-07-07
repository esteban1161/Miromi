@extends("theme.$theme.layout")

@section('titulo')
    RIPS
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
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>RIPS</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="card card-info ">
            <div class="card-header">
                Rips
            </div>
        
            <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                    <thead>
                        <tr>                            
                            <th WIDTH="10%">Fecha</th>
                            <th WIDTH="40%">Motivo Consulta</th>
                            <th WIDTH="20%">Formatos</th>
                            <th WIDTH="25%">Consultorio</th>
                            <th WIDTH="5%"></th>
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
                                    {{-- <a href="{{route($evento->formularios->routeShow, ['id'=>$identificacion->id, 'idh'=>$evento->id] )}}" class="btn-accion-tabla tooltipsC" title="Mostrar este Resgistro">
                                        <i class="fas fa-eye"></i>
                                    </a> --}}
                                </td>
                            </tr>                  
                        @endforeach
                    </tbody>                    
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-footer">    
                <div class="col-lg-6">    @include('includes.boton-form-retroceder')    </div>              
            </div>
        </div>        
    </div>
</section>)
    
@endsection



