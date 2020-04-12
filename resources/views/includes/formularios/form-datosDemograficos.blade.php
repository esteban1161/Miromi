<h2>Datos Demográficos</h2> 

<div class="form-group row">
    <label for="paisNacimiento" class="col-lg-3 col-form-label requerido">Pais Nacimiento</label>
    <div class="col-lg-8">
        <select id="paisNacimiento" name="paisNacimiento" class="form-control select2 " style="width: 100%;">
                <option value="">...Selecionar Pais...</option>
                @foreach($paises as $id => $nombrePais)
                <option value="{{$id}} "{{ old('paisNacimiento',  $data->demografico->paisNacimiento ?? '') == $id ? 'selected' : ' ' }}>
                    {{$nombrePais}}
                </option>
                @endforeach  
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="ciudadNacimiento" class="col-lg-3 col-form-label requerido">Ciudad Nacimiento</label>
    <div class="col-lg-8">
        <select id="ciudadNacimiento" name="ciudadNacimiento" class="form-control select2 " style="width: 100%;">
                @foreach($ciudades as $id => $nombreCiudad)
                <option value="">...Selecionar Ciudad...</option>
                <option value="{{$id}}"{{ old('ciudadNacimiento',  $data->demografico->ciudadNacimiento ?? '') == $id ? 'selected' : ' ' }}>
                    {{$nombreCiudad}}
                </option>
                @endforeach  
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="estadoCivil" class="col-lg-3 col-form-label requerido">Estado Civil</label>
    <select name="estadoCivil" id="estadoCivil" class="col-lg-8">
        <option value="">...Selecionar Estado Civil...</option>
        <option value="S" {{ old('paisNacimiento',  $data->demografico->estadoCivil ?? '') == 'S' ? 'selected' : ' ' }}>Soltero(a)</option>
        <option value="C" {{ old('paisNacimiento',  $data->demografico->estadoCivil ?? '') == 'C' ? 'selected' : ' ' }}>Casado(a)</option>
        <option value="UL" {{ old('paisNacimiento',  $data->demografico->estadoCivil ?? '') == 'UL' ? 'selected' : ' ' }}>Union Libre</option>
        <option value="V" {{ old('paisNacimiento',  $data->demografico->estadoCivil ?? '') == 'V' ? 'selected' : ' ' }}>Viudo(a)</option>
        <option value="SE" {{ old('paisNacimiento',  $data->demografico->estadoCivil ?? '') == 'SE' ? 'selected' : ' ' }}>Separado(a)</option>
    </select>
</div>
<div class="form-group row">
    <label for="escolaridad" class="col-lg-3 col-form-label requerido">Escolaridad</label>
    <select name="escolaridad" id="escolaridad" class="col-lg-8">
        <option value="">...Selecionar Escolaridad...</option>
        <option value="P" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'P' ? 'selected' : ' ' }}>Primaria</option>
        <option value="S" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'S' ? 'selected' : ' ' }}>Secundaria</option>
        <option value="T" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'T' ? 'selected' : ' ' }}>Tecnica</option>
        <option value="PR" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'PR' ? 'selected' : ' ' }}>Profesional</option>
        <option value="PO" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'PO' ? 'selected' : ' ' }}>Postgrado</option>
        <option value="O" {{ old('paisNacimiento',  $data->demografico->escolaridad ?? '') == 'O' ? 'selected' : ' ' }}>Otro</option>
    </select>
</div>
<div class="form-group row">
    <label for="ocupacion" class="col-lg-3 col-form-label requerido">Ocupacion</label>
        <div class="col-lg-8">
            <input type="text" name="ocupacion" class="form-control" id="ocupacion" value="{{old('ocupacion', $data->demografico->ocupacion ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="credoReligioso" class="col-lg-3 col-form-label requerido">Credo Religioso</label>
        <div class="col-lg-8">
            <input type="text" name="credoReligioso" class="form-control" id="credoReligioso" value="{{old('credoReligioso', $data->demografico->credoReligioso ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="paisResidencia" class="col-lg-3 col-form-label requerido">Pais Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="paisResidencia" class="form-control" id="paisResidencia" value="{{old('paisResidencia', $data->demografico->paisResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="departamentoResidencia" class="col-lg-3 col-form-label requerido">Departamento Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="departamentoResidencia" class="form-control" id="departamentoResidencia" value="{{old('departamentoResidencia', $data->demografico->departamentoResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="ciudadResidencia" class="col-lg-3 col-form-label requerido">Ciudad Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="ciudadResidencia" class="form-control" id="ciudadResidencia" value="{{old('ciudadResidencia', $data->demografico->ciudadResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="localidadResidencia" class="col-lg-3 col-form-label requerido">Localidad Residencia</label>
    <div class="col-lg-8">
        <select id="localidadResidencia" name="localidadResidencia" class="form-control select2 " style="width: 100%;">
                @foreach($localidades as $id => $localidadResidencia)
                <option value="{{$id}}" {{ old('localidadResidencia',  $data->demografico->localidadResidencia ?? '') == $id ? 'selected' : ' ' }}>
                    {{$localidadResidencia}} - {{$id}}
                </option>
                @endforeach  
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="direccionResidencia" class="col-lg-3 col-form-label requerido">Direccion Residencia</label>
        <div class="col-lg-8">
            <input type="search" name="direccionResidencia" class="form-control" id="direccionResidencia" value="{{old('direccionResidencia', $data->demografico->direccionResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="zonaResidencia" class="col-lg-3 col-form-label requerido">Zona de residencia</label>
    <select name="zonaResidencia" id="zonaResidencia" class="col-lg-8" value="{{old('zonaResidencia', $data->demografico->zonaResidencia ?? '')}}">
        <option value="">...Selecionar Zona de Residencia...</option>
        <option value="U" {{ old('zonaResidencia',  $data->demografico->zonaResidencia ?? '') == 'U' ? 'selected' : ' ' }}>Urbana</option>
        <option value="R" {{ old('zonaResidencia',  $data->demografico->zonaResidencia ?? '') == 'R' ? 'selected' : ' ' }}> Rural</option>
    </select>
</div>
