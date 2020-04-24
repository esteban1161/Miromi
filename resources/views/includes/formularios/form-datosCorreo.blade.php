<h2>Correo(s) Electronico(s) Personal(es)</h2>  
<div class="row">
    <div class="col-md-11 row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tipoCorreo">Tipo de Correo</label>
                <input type="text" name="tipoCorreo" class="form-control" id="tipoCorreo" value="{{old('tipoCorreo', $data->correosElectronicos->tipoCorreo ?? '')}}" tabindex="11">
            </div> 
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="correoElectronico">Correo Electronico Personal</label>
                <input type="text" name="correoElectronico" class="form-control" id="correoElectronico" value="{{old('correoElectronico', $data->correosElectronicos->correoElectronico ?? '')}}" tabindex="12">
            </div>   
        </div>
    </div>
    <div class="col-md-1">
        <a href="#" class="btn-accion-tabla tooltipsC" title="Añadir Correo">
            <i class="fas fa-plus-circle"></i>
        </a>
    </div>
</div>






  



