<div class="row"> 
    <div class="form-group col-md-6">
        <label for="fechaProcedimiento">Fecha del Procedimiento</label>
        <div class="input-group col-lg-12">
            <div class="input-group-prepend">
                <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
            </div>
            <input type="date" class="form-control" id="reservation" name="fechaProcedimiento">
        </div>
    </div>               
    <div class="form-group col-md-6">  
        <label for="nombreProcedimiento" class="requerido">Nombre del Procedimiento</label>
        <input type="text" name="nombreProcedimiento" class="form-control" id="nombreProcedimiento" >        
    </div>
    <div class="form-group col-md-12">
        <label for="descripcionProcedimiento">Descripcion del Procedimiento</label>
        <textarea class="form-control" rows="2" name="descripcionProcedimiento" id="descripcionProcedimiento" tabindex="1"></textarea>
    </div>
    <div class="form-group col-md-12">
        <label for="observaciones">Observaciones</label>
        <textarea class="form-control" rows="2" name="observaciones" id="observaciones" tabindex="1"></textarea>
    </div>
    <div class="form-group col-md-12">
        <label for="complicaciones">Complicaciones</label>
        <textarea class="form-control" rows="2" name="complicaciones" id="complicaciones" tabindex="1"></textarea>
    </div>
    <div class="form-group col-md-6">  
        <label for="insumos" class="requerido">Insumos</label>
        <input type="text" name="insumos" class="form-control" id="insumos" >        
    </div>
    <div class="form-group col-md-6">
        <label for="otrosProcedimientos">Otros Procedimientos</label>
        <textarea class="form-control" rows="1" name="otrosProcedimientos" id="otrosProcedimientos" tabindex="1"></textarea>
    </div>
    
</div>