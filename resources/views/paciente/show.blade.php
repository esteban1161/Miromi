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
                    <h2>Datos de Identificación</h2>  
                    <div class="form-group row">
                        <label for="primerNombre" class="col-lg-3 col-form-label requerido">Primer Nombre</label>
                            <div class="col-lg-8">
                                <input type="text" name="primerNombre" class="form-control" id="primerNombre" value="{{old('primerNombre', $data->identificacion->primerNombre ?? '')}}" required readonly>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="segundoNombre" class="col-lg-3 col-form-label requerido">Segundo Nombre</label>
                            <div class="col-lg-8">
                                <input type="text" name="segundoNombre" class="form-control" id="segundoNombre" value="{{old('segundoNombre', $data->identificacion->segundoNombre ?? '')}}" required readonly>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="primerApellido" class="col-lg-3 col-form-label requerido">Primer Apellido</label>
                            <div class="col-lg-8">
                                <input type="text" name="primerApellido" class="form-control" id="primerApellido" value="{{old('primerApellido', $data->identificacion->primerApellido ?? '')}}" required readonly>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="segundoApellido" class="col-lg-3 col-form-label requerido">Segundo Apellido</label>
                            <div class="col-lg-8">
                                <input type="text" name="segundoApellido" class="form-control" id="segundoApellido" value="{{old('segundoApellido', $data->identificacion->segundoApellido ?? '')}}" required readonly>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipoDocumento" class="col-lg-3 col-form-label requerido">Tipo de Documento</label>
                        <select name="tipoDocumento" id="tipoDocumento" class="col-lg-8" onmouseover="this.disabled=true;">
                            <option value="">...Selecionar Tipo Documento...</option>
                            <option value="CC" {{ old('tipoDocumento',  $data->identificacion->tipoDocumento ?? '') == 'CC' ? 'selected' : ' ' }}>Cedula de Ciudadanía</option>
                            <option value="CE" {{ old('tipoDocumento',  $data->identificacion->tipoDocumento ?? '') == 'CE' ? 'selected' : ' ' }}>Cédula de Extranjería</option>
                            <option value="PA" {{ old('tipoDocumento',  $data->identificacion->tipoDocumento ?? '') == 'PA' ? 'selected' : ' ' }}> Pasaporte</option>
                            <option value="RC" {{ old('tipoDocumento',  $data->identificacion->tipoDocumento ?? '') == 'RC' ? 'selected' : ' ' }}>Registro Civil</option>
                            <option value="TI" {{ old('tipoDocumento',  $data->identificacion->tipoDocumento ?? '') == 'TI' ? 'selected' : ' ' }}>Tarjeta de Identidad</option>
                            <option value="AS" {{ old('tipoDocumento',  $data->identificacion->tipoDocumento ?? '') == 'AS' ? 'selected' : ' ' }}>Adulto sin Identificación</option>
                            <option value="MS" {{ old('tipoDocumento',  $data->identificacion->tipoDocumento ?? '') == 'MS' ? 'selected' : ' ' }}>Menor sin Identificación</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="numeroIdentificacion" class="col-lg-3 col-form-label requerido">Numero de Identificacion</label>
                            <div class="col-lg-8">
                                <input type="text" name="numeroIdentificacion" class="form-control" id="numeroIdentificacion" value="{{old('numeroIdentificacion', $data->identificacion->numeroIdentificacion ?? '')}}" required readonly>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="sexo" class="col-lg-3 col-form-label requerido">Sexo</label>
                        <select name="sexo" id="sexo" class="col-lg-8" onmouseover="this.disabled=true;">
                            <option value="">...Selecionar Sexo...</option>
                            <option value="M" {{ old('sexo',  $data->identificacion->sexo ?? '') == 'M' ? 'selected' : ' ' }}>Masculino</option>
                            <option value="F" {{ old('sexo',  $data->identificacion->sexo ?? '') == 'F' ? 'selected' : ' ' }}> Femenino</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="fechaNacimiento" class="col-lg-3 col-form-label requerido" >Fecha de Nacimiento</label>
                        <div class="input-group col-lg-8" readonly>
                            <div class="input-group-prepend">
                                <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                            </div>
                            <input type="date" class="form-control" id="reservation" name="fechaNacimiento" value="{{old('fechaNacimiento', $data->identificacion->fechaNacimiento ??'')}}" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 