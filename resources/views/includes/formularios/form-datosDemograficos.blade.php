<h2>Datos Demográficos</h2> 

<div class="form-group row">
    <label for="paisNacimiento" class="col-lg-3 col-form-label requerido">Pais Nacimiento</label>
    <div class="col-lg-8">
        <select id="paisNacimiento" name="paisNacimiento" class="form-control select2 " style="width: 100%;">
                @foreach($paises as $id => $nombrePais)
                <option value="{{$id}}" 
                        {{-- {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : ' ')  : 
                        (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : ' ')}} --}}>
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
                <option value="{{$id}}" 
                        {{-- {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : ' ')  : 
                        (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : ' ')}} --}}>
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
        <option value="S">Soltero(a)</option>
        <option value="C">Casado(a)</option>
        <option value="UL">Union Libre</option>
        <option value="V">Viudo(a)</option>
        <option value="SE">Separado(a)</option>
    </select>
</div>
<div class="form-group row">
    <label for="escolaridad" class="col-lg-3 col-form-label requerido">Escolaridad</label>
    <select name="escolaridad" id="escolaridad" class="col-lg-8">
        <option value="">...Selecionar Escolaridad...</option>
        <option value="P">Primaria</option>
        <option value="S">Secundaria</option>
        <option value="T">Tecnica</option>
        <option value="PR">Profesional</option>
        <option value="PO">Postgrado</option>
        <option value="O">Otro</option>
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
                <option value="{{$id}}" 
                        {{-- {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : ' ')  : 
                        (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : ' ')}} --}}>
                    {{$localidadResidencia}} - {{$id}}
                </option>
                @endforeach  
        </select>
    </div>
</div>



<div class="form-group row">
    <label for="direccionResidencia" class="col-lg-3 col-form-label requerido">Direccion Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="direccionResidencia" class="form-control" id="direccionResidencia" value="{{old('direccionResidencia', $data->demografico->direccionResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="zonaResidencia" class="col-lg-3 col-form-label requerido">Zona de residencia</label>
    <select name="zonaResidencia" id="zonaResidencia" class="col-lg-8" value="{{old('zonaResidencia', $data->demografico->zonaResidencia ?? '')}}">
        <option value="">...Selecionar Zona de Residencia...</option>
        <option value="U">Urbana</option>
        <option value="R"> Rural</option>
    </select>
</div>
