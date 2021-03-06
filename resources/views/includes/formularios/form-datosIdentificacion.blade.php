<div class="row">
    <div class="col-md-12 row">
        <div class="col-md-6">
            <div class="form-group">  
                <label for="primerNombre" class="requerido">Primer Nombre</label>
                <input type="text" name="primerNombre" class="form-control" value="{{old('primerNombre', $data->identificacion->primerNombre ?? '')}}" tabindex="1" required>        
            </div>
            <div class="form-group">
                <label for="segundoNombre">Segundo Nombre</label>
                <input type="text" name="segundoNombre" class="form-control" value="{{old('segundoNombre', $data->identificacion->segundoNombre ?? '')}}" tabindex="1">
            </div>
            <div class="form-group">
                <label for="primerApellido">Primer Apellido</label>
                <input type="text" name="primerApellido" class="form-control" value="{{old('primerApellido', $data->identificacion->primerApellido ?? '')}}" tabindex="1">
            </div>
            
            <div class="form-group">
                <label for="segundoApellido">Segundo Apellido</label>
                <input type="text" name="segundoApellido" class="form-control" value="{{old('segundoApellido', $data->identificacion->segundoApellido ?? '')}}" tabindex="1">
            </div>   
            <div class="form-group">
                <label for="grupoSanguineo">Grupo Sanguineo</label>
                <input type="text" name="grupoSanguineo" class="form-control" value="{{old('grupoSanguineo', $data->identificacion->grupoSanguineo ?? '')}}" tabindex="1">
            </div>   
        </div>
        <div class="col-md-6">        
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" data-initial-preview="{{isset($data->identificacion->foto) ? Storage::url($identificacion->foto) : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Foto+Perfil"}}" accept="image/*" tabindex="1">            
            </div>
        </div>
    </div>
    <div class="col-md-12 row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tipoDocumento">Tipo de Documento</label>
                <select name="tipoDocumento" class="form-control" tabindex="1">
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
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <div class="input-group col-lg-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                    </div>
                    <input type="date" class="form-control" id="reservation" name="fechaNacimiento" value="{{old('fechaNacimiento', $data->identificacion->fechaNacimiento ??'')}}" tabindex="1">
                </div>
            </div>     
            @include('includes.formularios.form-datosTelefonicos')         
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="numeroIdentificacion">Numero de Identificacion</label>
                <input type="text" name="numeroIdentificacion" class="form-control" value="{{old('numeroIdentificacion', $data->identificacion->numeroIdentificacion ?? '')}}" tabindex="1">
            </div>   
            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select  name="sexo" class="form-control" tabindex="1">
                    <option value="">...Selecionar Sexo...</option>
                    <option value="M" {{ old('sexo',  $data->identificacion->sexo ?? '') == 'M' ? 'selected' : ' ' }}>Masculino</option>
                    <option value="F" {{ old('sexo',  $data->identificacion->sexo ?? '') == 'F' ? 'selected' : ' ' }}> Femenino</option>
                </select>
            </div>
            @include('includes.formularios.form-datosCorreo')            
        </div>
    </div>
</div>





