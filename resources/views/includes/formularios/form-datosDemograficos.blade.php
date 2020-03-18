<h2>Datos Demográficos</h2> 
<div class="form-group row">
    <label for="paisNacimiento" class="col-lg-3 col-form-label requerido">Pais Nacimiento</label>
        <div class="col-lg-8">
            <input type="text" name="paisNacimiento" class="form-control" id="paisNacimiento" value="Colombia {{old('paisNacimiento', $data->datosDemograficos->paisNacimiento ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="ciudadNacimiento" class="col-lg-3 col-form-label requerido">Ciudad Nacimiento</label>
        <div class="col-lg-8">
            <input type="text" name="ciudadNacimiento" class="form-control" id="ciudadNacimiento" value="Bogota {{old('ciudadNacimiento', $data->datosDemograficos->ciudadNacimiento ?? '')}}" required>
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
            <input type="text" name="ocupacion" class="form-control" id="ocupacion" value="estudiante {{old('ocupacion', $data->datosDemograficos->ocupacion ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="credoReligioso" class="col-lg-3 col-form-label requerido">Credo Religioso</label>
        <div class="col-lg-8">
            <input type="text" name="credoReligioso" class="form-control" id="credoReligioso" value="Nostico {{old('credoReligioso', $data->datosDemograficos->credoReligioso ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="paisResidencia" class="col-lg-3 col-form-label requerido">Pais Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="paisResidencia" class="form-control" id="paisResidencia" value="Colombia {{old('paisResidencia', $data->datosDemograficos->paisResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="departamentoResidencia" class="col-lg-3 col-form-label requerido">Departamento Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="departamentoResidencia" class="form-control" id="departamentoResidencia" value="Cundinamarca{{old('departamentoResidencia', $data->datosDemograficos->departamentoResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="ciudadResidencia" class="col-lg-3 col-form-label requerido">Ciudad Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="ciudadResidencia" class="form-control" id="ciudadResidencia" value="Bogota{{old('ciudadResidencia', $data->datosDemograficos->ciudadResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="localidadResidencia" class="col-lg-3 col-form-label requerido">Localidad Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="localidadResidencia" class="form-control" id="localidadResidencia" value="Engativsa {{old('localidadResidencia', $data->datosDemograficos->localidadResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="direccionResidencia" class="col-lg-3 col-form-label requerido">Direccion Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="direccionResidencia" class="form-control" id="direccionResidencia" value="Calle 80 {{old('direccionResidencia', $data->datosDemograficos->direccionResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="zonaResidencia" class="col-lg-3 col-form-label requerido">Zona de residencia</label>
    <select name="zonaResidencia" id="zonaResidencia" class="col-lg-8" value="{{old('zonaResidencia', $data->datosDemograficos->zonaResidencia ?? '')}}">
        <option value="">...Selecionar Zona de Residencia...</option>
        <option value="U">Urbana</option>
        <option value="R"> Rural</option>
    </select>
</div>