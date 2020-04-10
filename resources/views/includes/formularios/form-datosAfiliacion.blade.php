<h2>Datos de Afiliación al Sistema de Salud</h2>  <br>

<div class="form-group row">
    <label for="tipoVinculacion" class="col-lg-3 col-form-label requerido">Tipo Vinculacion al Sistema</label>
    <select name="tipoVinculacion" id="tipoVinculacion" class="col-lg-8">
        <option value="">...Selecionar Tipo Vinculacion...</option>
        <option value="1">Contrubutivo</option>
        <option value="2">Subsidiado</option>
        <option value="3">Vinculado</option>
        <option value="4">Particular</option>
        <option value="5">Otro</option>
        <option value="6">Desplazado Contributivo</option>
        <option value="7">Desplazado Subsidiado</option>
        <option value="8">Desplazado No Asegurado</option>
    </select>
</div>
<div class="form-group row">
    <label for="aseguradora" class="col-lg-3 col-form-label requerido">Aseguradora</label>
        <div class="col-lg-8">
            <input type="text" name="aseguradora" class="form-control" id="aseguradora" value="{{old('aseguradora', $data->afiliacion->aseguradora ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="responsableMedico" class="col-lg-3 col-form-label requerido">Nombre de Responsable Medico</label>
        <div class="col-lg-8">
            <input type="text" name="responsableMedico" class="form-control" id="responsableMedico" value="{{old('responsableMedico', $data->afiliacion->responsableMedico ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="parentescoResponsable" class="col-lg-3 col-form-label requerido">Parentesco de Responsable</label>
        <div class="col-lg-8">
            <input type="text" name="parentescoResponsable" class="form-control" id="parentescoResponsable" value="{{old('parentescoResponsable', $data->afiliacion->parentescoResponsable ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="telefonoResponsable" class="col-lg-3 col-form-label requerido">Telefono de Responsable</label>
        <div class="col-lg-8">
            <input type="text" name="telefonoResponsable" class="form-control" id="telefonoResponsable" value="{{old('telefonoResponsable', $data->afiliacion->telefonoResponsable ?? '')}}" required>
        </div>
</div>
