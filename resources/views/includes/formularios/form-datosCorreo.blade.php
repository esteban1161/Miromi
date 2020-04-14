<h2>Correo(s) Electronico(s) Personal(es)</h2>  

<div class="form-group row">
    <label for="correoElectronico" class="col-lg-3 col-form-label">Correo Electronico Personal</label>
        <div class="col-lg-8">
            <input type="text" name="correoElectronico" class="form-control" id="correoElectronico" value="{{old('correoElectronico', $data->correosElectronicos->correoElectronico ?? '')}}">
        </div>
</div>    

<div class="form-group row">
    <label for="tipoCorreo" class="col-lg-3 col-form-label">Tipo de Correo</label>
        <div class="col-lg-8">
            <input type="text" name="tipoCorreo" class="form-control" id="tipoCorreo" value="{{old('tipoCorreo', $data->correosElectronicos->tipoCorreo ?? '')}}">
        </div>
</div>   

<button type="" class="btn btn-info">Agregar Correo Electronico</button>

