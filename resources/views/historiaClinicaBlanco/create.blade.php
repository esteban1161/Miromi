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
        <form action="{{route('historiaB.store', ['id'=>$identificacion->id])}}" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">  
            @csrf
            <div class="card card-danger">
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
                                <select name="consultorio" id="" class="form-control"  tabindex="1">
                                    <option value="">...Seleccionar Consultorio...</option>
                                    @foreach ($terapeuta->consultorios as $consultorio)
                                        <option value="{{$consultorio->nombreConsultorio}}">{{$consultorio->nombreConsultorio}} - {{$consultorio->nitConsultorio}}</option>                                            
                                    @endforeach                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3"> 
                            <div class="form-group">
                                <label for="fechaConsulta">Fecha Consulta</label>
                                <div class="input-group col-lg-12">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                                    </div>                
                                <input type="date" class="form-control" id="fechaConsulta" name="fechaConsulta" value="{{$date}}" tabindex="1">
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
                                <input type="time" class="form-control" id="horaConsulta" name="horaConsulta" value="{{$time}}" tabindex="1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="edadActual">Edad</label>
                                <input type="text" name="edadActual" class="form-control" id="edadActual" value="{{$edad}}" tabindex="1">
                            </div>
                        </div>
                        
                    
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="motivoConsulta">Motivo de Consulta</label>
                                <input type="text" name="motivoConsulta" class="form-control" id="motivoConsulta" tabindex="1">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Formato en Blanco</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <textarea id="editor1" name="formatoBlanco" rows="10" cols="80" tabindex="1">
                    
                    </textarea>
                </div>
            </div>
            <div class="card">
                <div class="card-footer">    
                    <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>              
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
