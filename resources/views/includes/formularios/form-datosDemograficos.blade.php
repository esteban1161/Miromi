<div class="row">
    <div class="col-md-12 row">        
        <div class="col-md-6">
            <div class="form-group">
                <label for="paisNacimiento">Pais Nacimiento</label>
                <input name="paisNacimiento" list="paisL" type="text"  id="paisN" style="text-transform:uppercase;" class="form-control" value="{{old('paisNacimiento', $data->demografico->paisNacimiento ?? '')}}" tabindex="4">
                <datalist id="paisL">
                    @foreach($paises as $pais) 
                        <option value="{{ $pais->id }} - {{ $pais->nombrePais }}"></option> 
                    @endforeach
                </datalist>
            </div>
            <div class="form-group">
                <label for="estadoCivil">Estado Civil</label>
                <select name="estadoCivil" id="estadoCivil" class="form-control" tabindex="4">
                    <option value="">...Selecionar Estado Civil...</option>
                    <option value="S" {{ old('estadoCivil',  $data->demografico->estadoCivil ?? '') == 'S' ? 'selected' : ' ' }}>Soltero(a)</option>
                    <option value="C" {{ old('estadoCivil',  $data->demografico->estadoCivil ?? '') == 'C' ? 'selected' : ' ' }}>Casado(a)</option>
                    <option value="UL" {{ old('estadoCivil',  $data->demografico->estadoCivil ?? '') == 'UL' ? 'selected' : ' ' }}>Union Libre</option>
                    <option value="V" {{ old('estadoCivil',  $data->demografico->estadoCivil ?? '') == 'V' ? 'selected' : ' ' }}>Viudo(a)</option>
                    <option value="SE" {{ old('estadoCivil',  $data->demografico->estadoCivil ?? '') == 'SE' ? 'selected' : ' ' }}>Separado(a)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ocupacion">Ocupacion</label>                    
                <input type="text" name="ocupacion" class="form-control" id="ocupacion" value="{{old('ocupacion', $data->demografico->ocupacion ?? '')}}" tabindex="4">
            </div>

            <div class="form-group">
                <label for="direccionResidencia">Direccion Residencia</label>        
                <input type="search" name="direccionResidencia" class="form-control" id="direccionResidencia" value="{{old('direccionResidencia', $data->demografico->direccionResidencia ?? '')}}" tabindex="4">
            </div>

            <div class="form-group">                
                <label for="paisResidencia">Pais Residencia</label>
                <input name="paisResidencia"  type="text"  id="paisR" class="form-control autocompleteR" style="text-transform:uppercase;" value="{{old('paisResidencia', $data->demografico->paisResidencia ?? '')}}" tabindex="4">
            </div>

            <div class="form-group">
                <label for="ciudadResidencia">Ciudad Residencia</label>
                <input name="ciudadResidencia" id="ciudadR" type="text" class="form-control" value="{{old('ciudadResidencia', $data->demografico->ciudadResidencia ?? '')}}" tabindex="4">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">                
                <label for="ciudadNacimiento">Ciudad Nacimiento</label>
                <input name="ciudadNacimiento" list="ciudadN" type="text" class="form-control" value="{{old('ciudadNacimiento', $data->demografico->ciudadNacimiento ?? '')}}" tabindex="4">
            </div>
            <div class="form-group">
                <label for="escolaridad">Escolaridad</label>
                <select name="escolaridad" id="escolaridad" class="form-control" tabindex="4">
                    <option value="">...Selecionar Escolaridad...</option>
                    <option value="P" {{ old('escolaridad',  $data->demografico->escolaridad ?? '') == 'P' ? 'selected' : ' ' }}>Primaria</option>
                    <option value="S" {{ old('escolaridad',  $data->demografico->escolaridad ?? '') == 'S' ? 'selected' : ' ' }}>Secundaria</option>
                    <option value="T" {{ old('escolaridad',  $data->demografico->escolaridad ?? '') == 'T' ? 'selected' : ' ' }}>Tecnica</option>
                    <option value="PR" {{ old('escolaridad',  $data->demografico->escolaridad ?? '') == 'PR' ? 'selected' : ' ' }}>Profesional</option>
                    <option value="PO" {{ old('escolaridad',  $data->demografico->escolaridad ?? '') == 'PO' ? 'selected' : ' ' }}>Postgrado</option>
                    <option value="O" {{ old('escolaridad',  $data->demografico->escolaridad ?? '') == 'O' ? 'selected' : ' ' }}>Otro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="credoReligioso">Credo Religioso</label>
                <input type="text" name="credoReligioso" class="form-control" id="credoReligioso" value="{{old('credoReligioso', $data->demografico->credoReligioso ?? '')}}" tabindex="4">
            </div>

            <div class="form-group">
                <label for="localidadResidencia">Localidad Residencia</label>                
                <input type="text" name="localidadResidencia" class="form-control" id="localidadR" value="{{old('localidadResidencia', $data->demografico->localidadResidencia ?? '')}}" tabindex="4">
            </div>

            <div class="form-group">
                <label for="departamentoResidencia">Departamento Residencia</label>
                <input type="text" name="departamentoResidencia" class="form-control" id="departamentoR" value="{{old('departamentoResidencia', $data->demografico->departamentoResidencia ?? '')}}" tabindex="4">
            </div>           
            
            <div class="form-group">
                <label for="zonaResidencia">Zona de residencia</label>
                <select name="zonaResidencia" id="zonaResidencia" class="form-control" tabindex="4">
                    <option value="">...Selecionar Zona de Residencia...</option>
                    <option value="U" {{ old('zonaResidencia',  $data->demografico->zonaResidencia ?? '') == 'U' ? 'selected' : ' ' }}>Urbana</option>
                    <option value="R" {{ old('zonaResidencia',  $data->demografico->zonaResidencia ?? '') == 'R' ? 'selected' : ' ' }}> Rural</option>
                </select>
            </div>
        </div>
    </div>
</div>









