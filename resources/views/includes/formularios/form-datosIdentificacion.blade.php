<h2>Datos de Identificación</h2>  
<div class="form-group row">
    <label for="primerNombre" class="col-lg-3 col-form-label requerido">Primer Nombre</label>
        <div class="col-lg-8">
            <input type="text" name="primerNombre" class="form-control" id="primerNombre" value="{{old('primerNombre', $data->primerNombre ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="segundoNombre" class="col-lg-3 col-form-label requerido">Segundo Nombre</label>
        <div class="col-lg-8">
            <input type="text" name="segundoNombre" class="form-control" id="segundoNombre" value="{{old('segundoNombre', $data->segundoNombre ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="primerApellido" class="col-lg-3 col-form-label requerido">Primer Apellido</label>
        <div class="col-lg-8">
            <input type="text" name="primerApellido" class="form-control" id="primerApellido" value="{{old('primerApellido', $data->primerApellido ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="segundoApellido" class="col-lg-3 col-form-label requerido">Segundo Apellido</label>
        <div class="col-lg-8">
            <input type="text" name="segundoApellido" class="form-control" id="segundoApellido" value="{{old('segundoApellido', $data->segundoApellido ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="tipoDocumento" class="col-lg-3 col-form-label requerido">Tipo de Documento</label>
    <select name="tipoDocumento" id="tipoDocumento" class="col-lg-8" value="{{old('tipoDocumento', $data->tipoDocumento ?? '')}}">
        <option value="">...Selecionar Tipo Documento...</option>
        <option value="CE">Cédula de Extranjería</option>
        <option value="PA"> Pasaporte</option>
        <option value="CC">Cedula de Ciudadanía'</option>
        <option value="RC">Registro Civil</option>
        <option value="TI">Tarjeta de Identidad</option>
        <option value="AS">Adulto sin Identificación</option>
        <option value="MS">Menor sin Identificación</option>
    </select>
</div>
<div class="form-group row">
    <label for="numeroIdentificacion" class="col-lg-3 col-form-label requerido">Numero de Identificacion</label>
        <div class="col-lg-8">
            <input type="text" name="numeroIdentificacion" class="form-control" id="numeroIdentificacion" value="{{old('numeroIdentificacion', $data->numeroIdentificacion ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="sexo" class="col-lg-3 col-form-label requerido">Sexo</label>
    <select name="sexo" id="sexo" class="col-lg-8">
        <option value="">...Selecionar Sexo...</option>
        <option value="M">Masculino</option>
        <option value="F"> Femenino</option>
    </select>
</div>

<div class="form-group row">
    <label for="fechaNacimiento" class="col-lg-3 col-form-label requerido">Fecha de Nacimiento</label>
    <div class="input-group col-lg-8">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
        </div>
        <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" value="{{old('fechaNacimiento', $data->fechaNacimiento ?? '')}}">
    </div>
</div>