<h2>Datos de Identificación</h2>  
<div class="form-group row">
    <label for="primerNombre" class="col-lg-3 col-form-label requerido">Primer Nombre</label>
        <div class="col-lg-8">
            <input type="text" name="primerNombre" class="form-control" id="primerNombre" value="{{old('primerNombre', $data->identificacion->primerNombre ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="segundoNombre" class="col-lg-3 col-form-label requerido">Segundo Nombre</label>
        <div class="col-lg-8">
            <input type="text" name="segundoNombre" class="form-control" id="segundoNombre" value="{{old('segundoNombre', $data->identificacion->segundoNombre ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="primerApellido" class="col-lg-3 col-form-label requerido">Primer Apellido</label>
        <div class="col-lg-8">
            <input type="text" name="primerApellido" class="form-control" id="primerApellido" value="{{old('primerApellido', $data->identificacion->primerApellido ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="segundoApellido" class="col-lg-3 col-form-label requerido">Segundo Apellido</label>
        <div class="col-lg-8">
            <input type="text" name="segundoApellido" class="form-control" id="segundoApellido" value="{{old('segundoApellido', $data->identificacion->segundoApellido ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="tipoDocumento" class="col-lg-3 col-form-label requerido">Tipo de Documento</label>
    <select name="tipoDocumento" id="tipoDocumento" class="col-lg-8" >
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
            <input type="text" name="numeroIdentificacion" class="form-control" id="numeroIdentificacion" value="{{old('numeroIdentificacion', $data->identificacion->numeroIdentificacion ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="sexo" class="col-lg-3 col-form-label requerido">Sexo</label>
    <select name="sexo" id="sexo" class="col-lg-8">
        <option value="">...Selecionar Sexo...</option>
        <option value="M" {{ old('sexo',  $data->identificacion->sexo ?? '') == 'M' ? 'selected' : ' ' }}>Masculino</option>
        <option value="F" {{ old('sexo',  $data->identificacion->sexo ?? '') == 'F' ? 'selected' : ' ' }}> Femenino</option>
    </select>
</div>

<div class="form-group">
    <label for="fechaNacimiento" class="col-lg-3 col-form-label requerido">Fecha de Nacimiento</label>
    <div class="input-group col-lg-8">
        <div class="input-group-prepend">
            <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
        </div>
        <input type="date" class="form-control" id="reservation" name="fechaNacimiento" value="{{old('fechaNacimiento', $data->identificacion->fechaNacimiento ??'')}}" >
    </div>
</div>