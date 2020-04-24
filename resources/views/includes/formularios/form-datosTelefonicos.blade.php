<h2>Telefono(s) Personal(es)</h2>  
<div class="row">
    <div class="col-md-11 row">
        <div class="col-md-6">
            <div class="from-group">
                <label for="tipoTelefono">Tipo de Telefono</label>
                <input list="tipoTelefono" name="tipoTelefono" type="text" class="form-control" placeholder="Escribe Tipo de Telefono" value="{{old('tipoTelefono', $data->telefonos->tipoTelefono ?? '')}}" tabindex="9">
                <datalist id="tipoTelefono">
                    <option value="Hogar"></option>
                    <option value="Celular"></option>
                    <option value="Oficina"></option>
                    <option value="Consultorio"></option>
                </datalist>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="numeroTelefono">Numero Telefono</label>
                <input type="text" name="numeroTelefono" class="form-control" id="numeroTelefono" value="{{old('numeroTelefono', $data->telefonos->numeroTelefono ?? '')}}" tabindex="10">
            </div>    
        </div>
    </div>
    <div class="col-md-1">
        <a href="#" class="btn-accion-tabla tooltipsC" title="Añadir Telefono">
            <i class="fas fa-plus-circle"></i>
        </a>
    </div>
</div>



