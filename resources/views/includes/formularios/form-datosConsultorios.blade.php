<h2>Datos de Contacto y Consultorios</h2>  

<div class="row">
    <div class="col-md-11 row">   

        <div class="col-md-6">
            <div class="form-group">
                <label for="nombreConsultorio">Nombre del Consultorio</label>
                <input type="text" name="nombreConsultorio" class="form-control" id="nombreConsultorio" value="{{old('nombreConsultorio', $data->consultorio->nombreConsultorio ?? '')}}" tabindex="16">
            </div>    
            {{-- <div class="from-group">
                <label for="tipoTelefono">Tipo de Telefono</label>
                <input list="tipoTelefono" name="tipoTelefono" type="text" class="form-control" placeholder="Escribe Tipo de Telefono" value="{{old('tipoTelefono', $data->telefonos->tipoTelefono ?? '')}}" tabindex="18">
                <datalist id="tipoTelefono">
                    <option value="Hogar"></option>
                    <option value="Calular"></option>
                    <option value="Oficina"></option>
                    <option value="Consultorio"></option>
                </datalist>
            </div>
            <div class="from-group">
                <label for="tipoTelefono">Tipo de Telefono</label>
                <input list="tipoTelefono" name="tipoTelefono" type="text" class="form-control" placeholder="Escribe Tipo de Telefono" value="{{old('tipoTelefono', $data->telefonos->tipoTelefono ?? '')}}" tabindex="20">
                <datalist id="tipoTelefono">
                    <option value="Hogar"></option>
                    <option value="Calular"></option>
                    <option value="Oficina"></option>
                    <option value="Consultorio"></option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="tipoCorreo">Tipo de Correo</label>
                <input type="text" name="tipoCorreo" class="form-control" id="tipoCorreo" value="{{old('tipoCorreo', $data->correosElectronicos->tipoCorreo ?? '')}}" tabindex="22">
            </div>   
            <div class="form-group">
                <label for="paginaWebConsultorio">Pagina Web del Consultorio</label>
                <input type="text" name="paginaWebConsultorio" class="form-control" id="paginaWebConsultorio" value="{{old('paginaWebConsultorio', $data->consultorio->paginaWebConsultorio ?? '')}}" tabindex="24">
            </div> --}}   
        </div>   
        <div class="col-md-6">
            <div class="form-group">
                <label for="direccionConsultorio">Direccion del Consultorio</label>
                <input type="text" name="direccionConsultorio" class="form-control" id="direccionConsultorio" value="{{old('direccionConsultorio', $data->consultorio->direccionConsultorio ?? '')}}" tabindex="17">
            </div>     
            {{-- <div class="form-group">
                <label for="numeroTelefono">Numero Telefono del Consultorio</label>
                <input type="text" name="numeroTelefono" class="form-control" id="numeroTelefono" value="{{old('numeroTelefono', $data->telefonos->numeroTelefono ?? '')}}" tabindex="19">
            </div>    
            <div class="form-group">
                <label for="numeroTelefono">Numero Telefono del Consultorio</label>
                <input type="text" name="numeroTelefono" class="form-control" id="numeroTelefono" value="{{old('numeroTelefono', $data->telefonos->numeroTelefono ?? '')}}" tabindex="21">
            </div>   
            <div class="form-group">
                <label for="correoElectronico">Correo Electronico del Consultorio</label>
                <input type="text" name="correoElectronico" class="form-control" id="correoElectronico" value="{{old('correoElectronico', $data->correosElectronicos->correoElectronico ?? '')}}" tabindex="23">
            </div>    
            <div class="form-group">
                <label for="codigoSecretaria">Codigo de inscripcion a la Secretaria de Salud</label>
                <input type="text" name="codigoSecretaria" class="form-control" id="codigoSecretaria" value="{{old('codigoSecretaria', $data->consultorio->codigoSecretaria ?? '')}}" tabindex="25">
            </div>     --}}
        </div>

    </div>
    <div class="col-md-1">        
        <a href="#" class="btn-accion-tabla tooltipsC" title="Añadir Telefono">
            <i class="fas fa-plus-circle"></i>
        </a>
        <a href="#" class="btn-accion-tabla tooltipsC" title="Añadir Correo">
            <i class="fas fa-plus-circle"></i>
        </a>
    </div>

</div>


 

<button type="submit" class="btn btn-info">Agregar Otro Consultorio</button>