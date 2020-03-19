<h2>Datos de Contacto y Consultorios</h2>  

<div class="form-group row">
    <label for="nombreConsultorio" class="col-lg-3 col-form-label requerido">Nombre del Consultorio</label>
        <div class="col-lg-8">
            <input type="text" name="nombreConsultorio" class="form-control" id="nombreConsultorio" value="{{old('nombreConsultorio', $data->datosDemograficos->nombreConsultorio ?? '')}}" required>
        </div>
</div>    
<div class="form-group row">
    <label for="telefonoConsultorio" class="col-lg-3 col-form-label requerido">Telefono del Consultorio</label>
        <div class="col-lg-8">
            <input type="text" name="telefonoConsultorio" class="form-control" id="telefonoConsultorio" value="{{old('telefonoConsultorio', $data->datosDemograficos->telefonoConsultorio ?? '')}}" required>
        </div>
</div>        
<button type="submit" class="btn btn-info">Agregar Telefono</button>
<div class="form-group row">
    <label for="direccionConsultorio" class="col-lg-3 col-form-label requerido">Direccion del Consultorio</label>
        <div class="col-lg-8">
            <input type="text" name="direccionConsultorio" class="form-control" id="direccionConsultorio" value="{{old('direccionConsultorio', $data->datosDemograficos->direccionConsultorio ?? '')}}" required>
        </div>
</div>      
<div class="form-group row">
    <label for="correoElectronicoConsultorio" class="col-lg-3 col-form-label requerido">Correo Electronico del Consultorio</label>
        <div class="col-lg-8">
            <input type="text" name="correoElectronicoConsultorio" class="form-control" id="correoElectronicoConsultorio" value="{{old('correoElectronicoConsultorio', $data->datosDemograficos->correoElectronicoConsultorio ?? '')}}" required>
        </div>
</div>     
<button type="submit" class="btn btn-info">Agregar Correo</button>
<div class="form-group row">
    <label for="paginaWebConsultorio" class="col-lg-3 col-form-label requerido">Pagina Web del Consultorio</label>
        <div class="col-lg-8">
            <input type="text" name="paginaWebConsultorio" class="form-control" id="paginaWebConsultorio" value="{{old('paginaWebConsultorio', $data->datosDemograficos->paginaWebConsultorio ?? '')}}" required>
        </div>
</div>    
<div class="form-group row">
    <label for="codigoSecretaria" class="col-lg-3 col-form-label requerido">Codigo de inscripcion a la Secretaria de Salud</label>
        <div class="col-lg-8">
            <input type="text" name="codigoSecretaria" class="form-control" id="codigoSecretaria" value="{{old('codigoSecretaria', $data->datosDemograficos->codigoSecretaria ?? '')}}" required>
        </div>
</div>    
<button type="submit" class="btn btn-info">Agregar Otro Consultorio</button>