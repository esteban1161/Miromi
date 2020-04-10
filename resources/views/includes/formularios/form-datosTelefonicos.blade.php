<h2>Datos Telefonicos</h2>  
                        
<div class="form-group row">
    <label for="numeroTelefono" class="col-lg-3 col-form-label requerido">Numero Telefono</label>
        <div class="col-lg-8">
            <input type="text" name="numeroTelefono" class="form-control" id="numeroTelefono" value="{{old('numeroTelefono', $data->telefonos->numeroTelefono ?? '')}}" required>
        </div>
</div>    

<div class="form-group row">
    <label for="tipoTelefono" class="col-lg-3 col-form-label requerido">Tipo de Telefono</label>
        <div class="col-lg-8">
            <input type="text" name="tipoTelefono" class="form-control" id="tipoTelefono" value="{{old('tipoTelefono', $data->telefonos->tipoTelefono ?? '')}}" required>
        </div>
</div>    

<button type="" class="btn btn-info">Agregar Telefono</button>