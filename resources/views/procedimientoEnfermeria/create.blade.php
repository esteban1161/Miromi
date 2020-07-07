@extends("theme.$theme.layout")

@section('titulo')
    Histora Homeopatia
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
            <div class="col-sm-9">
                <h1>Procedimiento Enfermeria</h1>
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

        <form action="{{route('procedimientosE.store', ['id'=>$identificacion->id])}}" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <!-- Inicio Historia Clinica-->
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
                        <h3 class="card-title">Procedimiento de la Enfermeria</h3>                
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body"> @include('includes.formularios.forms-HistoriasClinicas.form-datosProcedimientos')    </div>
                </div>
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Examen Fisico</h3>                
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4>Signos Vitales</h4>
                        <div class="row">  
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="presionArterialSistolica">Presion Arterial Sistolica</label>
                                    <input type="text" name="presionArterialSistolica" class="form-control" id="presionArterialSistolica" tabindex="33">        
                                </div>
                            </div>  
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="presionArterialDiastolica">Presion Arterial Diastolica</label>
                                    <input type="text" name="presionArterialDiastolica" class="form-control" id="presionArterialDiastolica" tabindex="34">        
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="frecuenciaCardiaca">Frecuencia Cardiaca</label>
                                    <input type="text" name="frecuenciaCardiaca" class="form-control" id="frecuenciaCardiaca" tabindex="35">        
                                </div>
                            </div>  
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="frecuenciaRespiratoria">Frecuencia Respiratoria</label>
                                    <input type="text" name="frecuenciaRespiratoria" class="form-control" id="frecuenciaRespiratoria" tabindex="36">        
                                </div>
                            </div>
                        
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="temperatura">Temperatura</label>
                                    <input type="text" name="temperatura" class="form-control" id="temperatura" tabindex="37">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="saturaciónO2">Saturación Oxigeno</label>
                                    <input type="text" name="saturaciónO2" class="form-control" id="saturaciónO2" tabindex="38">  
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>  
                <!-- Inicio Botones-->
                <div class="card">
                    <div class="card-footer">    
                        <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>              
                    </div>
                </div>  
                <!-- Fin Botones-->
        </form>


    </div>
</section>
    
@endsection