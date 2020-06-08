@extends("theme.$theme.layout")

@section('titulo')
    Sistema Usuarios
@endsection   

@section('styles')
@endsection    

@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/ckeditor/ckeditor.js")}}"></script>
@endsection

@section('scripts')
    <script src="{{ asset("assets/pages/scripts/admin/editor/index.js")}}"></script>    
    <script src="{{ asset("assets/pages/scripts/admin/autocomplete/index.js")}}"></script>    
@endsection

@section('contenido')   

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>{{$identificacion->primerNombre}} {{$identificacion->segundoNombre}} {{$identificacion->primerApellido}} {{$identificacion->segundoApellido}} - {{$identificacion->tipoDocumento}} - {{$identificacion->numeroIdentificacion}}</h1>
            </div>
            <div class="col-sm-3">        
                <a href="{{route('listaAtenciones.index', ['id' => $identificacion->id])}}" class="btn btn-block btn-warning">
                    <i class="fas fa-clipboard-list"></i> Lista de Atenciones
                </a>
            </div>   
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Historia Clinica</h3>                
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="consultorio">Consultorio</label>
                            <input class="form-control" id="consultorio" name="consultorio" type="text" value="{{old('consultorio', $eventos->formatosBase->consultorio ?? '')}}" readonly>

                        </div>
                    </div>
                    <div class="col-md-3"> 
                        <div class="form-group">
                            <label for="fechaConsulta">Fecha Consulta</label>
                            <div class="input-group col-lg-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                                </div>                
                            <input type="date" class="form-control" id="fechaConsulta" name="fechaConsulta" value="{{old('fechaConsulta', $eventos->formatosBase->fechaConsulta ?? '')}}" tabindex="3" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="horaConsulta">Hora Consulta</label>
                            <div class="input-group col-lg-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">            <i class="far fa-clock"></i>            </span>
                                </div>
                            <input type="time" class="form-control" id="horaConsulta" name="horaConsulta" value="{{old('horaConsulta', $eventos->formatosBase->horaConsulta ?? '')}}" tabindex="4" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="edadActual">Edad</label>
                            <input type="text" name="edadActual" class="form-control" id="edadActual" value="{{old('edadActual', $eventos->formatosBase->edadActual ?? '')}}" tabindex="5" readonly>
                        </div>
                    </div>                
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="motivoConsulta">Motivo de Consulta</label>
                            <input type="text" name="motivoConsulta" class="form-control" id="motivoConsulta" value="{{old('motivoConsulta', $eventos->formatosBase->motivoConsulta ?? '')}}" tabindex="6" readonly>
                        </div>
                    </div>
                </div>                
            </div>
        </div>        
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Historia Clinica</h3>                
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <textarea id="editor1" name="formatoBlanco" rows="10" cols="80" readonly>
                    {{old('formatoBlanco', $eventos->historiaBlanco->formatoBlanco ?? '')}}
                </textarea>
            </div>
        </div>
        <div class="card">
            <div class="card-footer">    
                <div class="col-lg-6">    @include('includes.boton-form-retroceder')    </div>              
            </div>
        </div>        
    </div>
</section>

@endsection
