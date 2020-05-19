<div class="row">
    <div class="col-md-12 row">        
        <div class="col-md-6">
            <div class="form-group">
                <label for="paisNacimiento">Pais Nacimiento</label>
                <select id="paisNacimiento" name="paisNacimiento" class="form-control select2" style="width: 100%;" tabindex="13">
                    <option value="">...Selecionar Pais...</option>
                    @foreach($paises as $id => $nombrePais)
                    <option value="{{$id}} "{{ old('paisNacimiento',  $data->demografico->paisNacimiento ?? '') == $id ? 'selected' : ' ' }}>
                        {{$nombrePais}}
                    </option>
                    @endforeach  
                </select>
            </div>
            <div class="form-group">
                <label for="estadoCivil">Estado Civil</label>
                <select name="estadoCivil" id="estadoCivil" class="form-control" tabindex="15">
                    <option value="">...Selecionar Estado Civil...</option>
                    <option value="S" {{ old('paisNacimiento',  $data->demografico->estadoCivil ?? '') == 'S' ? 'selected' : ' ' }}>Soltero(a)</option>
                    <option value="C" {{ old('paisNacimiento',  $data->demografico->estadoCivil ?? '') == 'C' ? 'selected' : ' ' }}>Casado(a)</option>
                    <option value="UL" {{ old('paisNacimiento',  $data->demografico->estadoCivil ?? '') == 'UL' ? 'selected' : ' ' }}>Union Libre</option>
                    <option value="V" {{ old('paisNacimiento',  $data->demografico->estadoCivil ?? '') == 'V' ? 'selected' : ' ' }}>Viudo(a)</option>
                    <option value="SE" {{ old('paisNacimiento',  $data->demografico->estadoCivil ?? '') == 'SE' ? 'selected' : ' ' }}>Separado(a)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ocupacion">Ocupacion</label>                    
                <input type="text" name="ocupacion" class="form-control" id="ocupacion" value="{{old('ocupacion', $data->demografico->ocupacion ?? '')}}" tabindex="17">
            </div>
            <div class="form-group">
                <label for="paisResidencia">Pais Residencia</label>
                <input type="text" name="paisResidencia" class="form-control" id="paisResidencia" value="{{old('paisResidencia', $data->demografico->paisResidencia ?? '')}}" tabindex="19">
            </div>
            <div class="form-group">
                <label for="ciudadResidencia">Ciudad Residencia</label>
                <input type="text" name="ciudadResidencia" class="form-control" id="ciudadResidencia" value="{{old('ciudadResidencia', $data->demografico->ciudadResidencia ?? '')}}" tabindex="21">
            </div>
            <div class="form-group">
                <label for="direccionResidencia">Direccion Residencia</label>        
                <input type="search" name="direccionResidencia" class="form-control" id="direccionResidencia" value="{{old('direccionResidencia', $data->demografico->direccionResidencia ?? '')}}" tabindex="23">
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="ciudadNacimiento">Ciudad Nacimiento</label>
                <select id="ciudadNacimiento" name="ciudadNacimiento" class=" select2 form-control" tabindex="14">
                    <option value="">...Selecionar Ciudad...</option>    
                    @foreach($ciudades as $id => $nombreCiudad)                
                        <option value="{{$id}}"{{ old('ciudadNacimiento',  $data->demografico->ciudadNacimiento ?? '') == $id ? 'selected' : ' ' }}>
                            {{$nombreCiudad}}
                        </option>
                    @endforeach  
                </select>
            </div>
            <div class="form-group">
                <label for="escolaridad">Escolaridad</label>
                <select name="escolaridad" id="escolaridad" class="form-control" tabindex="16">
                    <option value="">...Selecionar Escolaridad...</option>
                    <option value="P" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'P' ? 'selected' : ' ' }}>Primaria</option>
                    <option value="S" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'S' ? 'selected' : ' ' }}>Secundaria</option>
                    <option value="T" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'T' ? 'selected' : ' ' }}>Tecnica</option>
                    <option value="PR" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'PR' ? 'selected' : ' ' }}>Profesional</option>
                    <option value="PO" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'PO' ? 'selected' : ' ' }}>Postgrado</option>
                    <option value="O" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'O' ? 'selected' : ' ' }}>Otro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="credoReligioso">Credo Religioso</label>
                <input type="text" name="credoReligioso" class="form-control" id="credoReligioso" value="{{old('credoReligioso', $data->demografico->credoReligioso ?? '')}}" tabindex="18">
            </div>
            <div class="form-group">
                <label for="departamentoResidencia">Departamento Residencia</label>
                <input type="text" name="departamentoResidencia" class="form-control" id="departamentoResidencia" value="{{old('departamentoResidencia', $data->demografico->departamentoResidencia ?? '')}}" tabindex="20">
            </div>
            <div class="form-group">
                <label for="localidadResidencia">Localidad Residencia</label>                
                <select id="localidadResidencia" name="localidadResidencia" class="form-control select2 " style="width: 100%;" tabindex="22">
                    <option value="">...Selecionar Localidad...</option>
                    @foreach($localidades as $id => $localidadResidencia)
                    <option value="{{$id}}" {{ old('localidadResidencia',  $data->demografico->localidadResidencia ?? '') == $id ? 'selected' : ' ' }} >
                        {{$localidadResidencia}} - {{$id}}
                    </option>
                    @endforeach  
                </select>
            </div>
            <div class="form-group">
                <label for="zonaResidencia">Zona de residencia</label>
                <select name="zonaResidencia" id="zonaResidencia" class="form-control" tabindex="24">
                    <option value="">...Selecionar Zona de Residencia...</option>
                    <option value="U" {{ old('zonaResidencia',  $data->demografico->zonaResidencia ?? '') == 'U' ? 'selected' : ' ' }}>Urbana</option>
                    <option value="R" {{ old('zonaResidencia',  $data->demografico->zonaResidencia ?? '') == 'R' ? 'selected' : ' ' }}> Rural</option>
                </select>
            </div>

        </div>
    </div>
    <div class="col-md-1">

    </div>
</div>









