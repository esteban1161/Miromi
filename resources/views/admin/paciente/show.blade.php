@extends("theme.$theme.layout")

@section('titulo')
    Ver Paciente
@endsection   

@section('styles')
    <link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css ")}}" rel="stylesheet" type="text/css">
@endsection

@section('scriptsPlugins')
    <script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">        
        <div class="col-lg 12">
            @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header with-border">
                    <h3 class="card-title">Informacion del Paciente</h3>
                </div >
                <div class="card-body">
            
                    <p>{{$identificacion->primerNombre}}</p>
                    <p>{{$identificacion->segundoNombre}}</p>
                    <p>{{$identificacion->primerApellido}}</p>
                    <p>{{$identificacion->segundoApellido}}</p>
                    <p>{{$identificacion->tipoDocumento}}</p>
                    <p>{{$identificacion->numeroIdentificacion}}</p>
                    <p>{{$identificacion->sexo}}</p>
                    <p>{{$identificacion->fechaNacimiento}}</p>

                    <p>{{$identificacion->datosDemograficos->paisNacimiento}}</p>
                    <p>{{$identificacion->datosDemograficos->ciudadNacimiento}}</p>
                    <p>{{$identificacion->datosDemograficos->estadoCivil}}</p>
                    <p>{{$identificacion->datosDemograficos->escolaridad}}</p>
                    <p>{{$identificacion->datosDemograficos->ocupacion}}</p>
                    <p>{{$identificacion->datosDemograficos->credoReligioso}}</p>
                    <p>{{$identificacion->datosDemograficos->identificacion_id}}</p> 
                    <p>{{$identificacion->datosDemograficos->paisResidencia}}</p>
                    <p>{{$identificacion->datosDemograficos->departamentoResidencia}}</p>
                    <p>{{$identificacion->datosDemograficos->ciudadResidencia}}</p>
                    <p>{{$identificacion->datosDemograficos->localidadResidencia}}</p>
                    <p>{{$identificacion->datosDemograficos->direccionResidencia}}</p>
                    <p>{{$identificacion->datosDemograficos->zonaResidencia}}</p>       
                </div>
            </div>
        </div>
    </div>
@endsection 