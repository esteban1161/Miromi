<h2>Datos de Identificación</h2>  

<div class="row">
    <div class="col-md-11 row">
        <div class="col-md-6">
            
            <div class="text-center">
                <img width="260px" class=" img-fluid" src="{{Storage::url($data->identificacion->foto ?? 'user.png')}}"
                    alt="User profile picture">
            </div> 
            <div class="form-group">
                <label for="foto">Foto</label>
                <div class="custom-file">                    
                    <input type="file" class="custom-file-input" id="foto" name="foto">
                    <label class="custom-file-label" for="foto">Escojer Foto</label>
                </div>                
            </div>
            <div class="form-group">
                <label for="tipoDocumento">Tipo de Documento</label>
                <select onkeyup="saltar(event,'numeroIdentificacion')" name="tipoDocumento" id="tipoDocumento" class="form-control" tabindex="5">
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
                    <input onkeyup="saltar(event,'fechaNacimiento')" type="date" class="form-control" id="reservation" name="fechaNacimiento" value="{{old('fechaNacimiento', $data->identificacion->fechaNacimiento ??'')}}" tabindex="8">
                </div>
            </div>     
            @include('includes.formularios.form-datosCorreo')  
           
        </div>

        <div class="col-md-6">        
            <div class="form-group">  
                <label for="primerNombre">Primer Nombre</label>
                <input onkeyup="saltar(event,'segundoNombre')" type="text" name="primerNombre" class="form-control" id="primerNombre" value="{{old('primerNombre', $data->identificacion->primerNombre ?? '')}}" tabindex="1">        
            </div>
            <div class="form-group">
                <label for="primerApellido">Primer Apellido</label>
                <input onkeyup="saltar(event,'segundoApellido')" type="text" name="primerApellido" class="form-control" id="primerApellido" value="{{old('primerApellido', $data->identificacion->primerApellido ?? '')}}" tabindex="3">
            </div>
            <div class="form-group">
                <label for="segundoNombre">Segundo Nombre</label>
                <input onkeyup="saltar(event,'primerApellido')" type="text" name="segundoNombre" class="form-control" id="segundoNombre" value="{{old('segundoNombre', $data->identificacion->segundoNombre ?? '')}}" tabindex="2">
            </div>
            <div class="form-group">
                <label for="segundoApellido">Segundo Apellido</label>
                <input onkeyup="saltar(event,'primerApellido')" type="text" name="segundoApellido" class="form-control" id="segundoApellido" value="{{old('segundoApellido', $data->identificacion->segundoApellido ?? '')}}" tabindex="2">
            </div>   
            <div class="form-group">
                <label for="numeroIdentificacion">Numero de Identificacion</label>
                <input onkeyup="saltar(event,'sexo')" type="text" name="numeroIdentificacion" class="form-control" id="numeroIdentificacion" value="{{old('numeroIdentificacion', $data->identificacion->numeroIdentificacion ?? '')}}" tabindex="6">
            </div>   
            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select  onkeyup="saltar(event,'fechaNacimiento')" name="sexo" id="sexo" class="form-control" tabindex="7">
                    <option value="">...Selecionar Sexo...</option>
                    <option value="M" {{ old('sexo',  $data->identificacion->sexo ?? '') == 'M' ? 'selected' : ' ' }}>Masculino</option>
                    <option value="F" {{ old('sexo',  $data->identificacion->sexo ?? '') == 'F' ? 'selected' : ' ' }}> Femenino</option>
                </select>
            </div>
            @include('includes.formularios.form-datosTelefonicos')
            
        </div>
    </div>
</div>





