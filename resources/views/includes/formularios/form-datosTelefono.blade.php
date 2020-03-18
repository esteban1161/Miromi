<h2>Datos Telefonicos</h2>  <br>
<div class="form-group row">
    <label for="primerNombre" class="col-lg-3 col-form-label requerido">Telefono</label>
    <div class="input-group col-lg-8">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="" im-insert="true">
    </div>
</div>
<div class="form-group row">
    <label for="tipoTelefono" class="col-lg-3 col-form-label requerido">Numero Telefonico</label>
        <div class="col-lg-8">
            <input type="text" name="tipoTelefono" class="form-control" id="tipoTelefono" value="{{old('tipoTelefono', $data->tipoTelefono ?? '')}}" required>
        </div>
</div>
<button type="submit" class="btn btn-info">Agregar Telefono</button>

<div class="form-group row">
    <label for="correoElectronico" class="col-lg-3 col-form-label requerido">Correo Electronico</label>
        <div class="col-lg-8">
            <input type="text" name="correoElectronico" class="form-control" id="correoElectronico" value="{{old('correoElectronico', $data->correoElectronico ?? '')}}" required>
        </div>
</div>
<button type="submit" class="btn btn-info">Agregar Correo Electronico</button>
