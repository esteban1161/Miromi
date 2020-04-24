<h2>Datos de Afiliación al Sistema de Salud</h2>  <br>

<div class="row">
    <div class="col-md-11 row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tipoVinculacion">Tipo Vinculacion al Sistema</label>
                <select name="tipoVinculacion" id="tipoVinculacion" class="form-control" tabindex="25">
                    <option value="">...Selecionar Tipo Vinculacion...</option>
                    <option value="1" {{ old('tipoVinculacion',  $data->afiliacion->tipoVinculacion ?? '') == '1' ? 'selected' : ' ' }}>Contrubutivo</option>
                    <option value="2" {{ old('tipoVinculacion',  $data->afiliacion->tipoVinculacion ?? '') == '2' ? 'selected' : ' ' }}>Subsidiado</option>
                    <option value="3" {{ old('tipoVinculacion',  $data->afiliacion->tipoVinculacion ?? '') == '3' ? 'selected' : ' ' }}>Vinculado</option>
                    <option value="4" {{ old('tipoVinculacion',  $data->afiliacion->tipoVinculacion ?? '') == '4' ? 'selected' : ' ' }}>Particular</option>
                    <option value="5" {{ old('tipoVinculacion',  $data->afiliacion->tipoVinculacion ?? '') == '5' ? 'selected' : ' ' }}>Otro</option>
                    <option value="6" {{ old('tipoVinculacion',  $data->afiliacion->tipoVinculacion ?? '') == '6' ? 'selected' : ' ' }}>Desplazado Contributivo</option>
                    <option value="7" {{ old('tipoVinculacion',  $data->afiliacion->tipoVinculacion ?? '') == '7' ? 'selected' : ' ' }}>Desplazado Subsidiado</option>
                    <option value="8" {{ old('tipoVinculacion',  $data->afiliacion->tipoVinculacion ?? '') == '8' ? 'selected' : ' ' }}>Desplazado No Asegurado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="responsableMedico">Nombre de Responsable Medico</label>
                <input type="text" name="responsableMedico" class="form-control" id="responsableMedico" value="{{old('responsableMedico', $data->afiliacion->responsableMedico ?? '')}}" tabindex="27">
            </div>
            <div class="form-group">
                <label for="telefonoResponsable">Telefono de Responsable</label>
                <input type="text" name="telefonoResponsable" class="form-control" id="telefonoResponsable" value="{{old('telefonoResponsable', $data->afiliacion->telefonoResponsable ?? '')}}" tabindex="29">
            </div>            

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="aseguradora">Aseguradora</label>
                <input type="text" name="aseguradora" class="form-control" id="aseguradora" value="{{old('aseguradora', $data->afiliacion->aseguradora ?? '')}}" tabindex="26">
            </div>
            <div class="form-group">
                <label for="parentescoResponsable">Parentesco de Responsable</label>
                <input type="text" name="parentescoResponsable" class="form-control" id="parentescoResponsable" value="{{old('parentescoResponsable', $data->afiliacion->parentescoResponsable ?? '')}}" tabindex="28">
            </div>

        </div>
    </div>
    <div class="col-md-1">

    </div>
</div>






