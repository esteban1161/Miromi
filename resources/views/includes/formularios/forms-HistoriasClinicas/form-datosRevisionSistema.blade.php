<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="cabeza">Cabeza</label>
            <textarea class="form-control autocomplete" rows="1" name="cabeza" tabindex="23">{{old('cabeza', $eventos->revisionSistema->cabeza ?? '')}}</textarea>
        </div>      
        <div class="form-group">
            <label for="cardioPulmonarRS">Cardio/Pulmonar</label>
            <textarea class="form-control autocomplete" rows="1" name="cardioPulmonarRS" tabindex="25">{{old('cardioPulmonarRS', $eventos->revisionSistema->cardioPulmonarRS ?? '')}}</textarea>
        </div>    
        <div class="form-group">
            <label for="urinario">Urinario</label>
            <textarea class="form-control autocomplete" rows="1" name="urinario" tabindex="27">{{old('urinario', $eventos->revisionSistema->urinario ?? '')}}</textarea>
        </div>  
        <div class="form-group">
            <label for="extremidadesRS">Extremidades</label>
            <textarea class="form-control autocomplete" rows="1" name="extremidadesRS" tabindex="29">{{old('extremidadesRS', $eventos->revisionSistema->extremidadesRS ?? '')}}</textarea>
        </div>     
        <div class="form-group">
            <label for="psiquismo">Psiquismo</label>
            <textarea class="form-control autocomplete" rows="1" name="psiquismo" tabindex="31">{{old('psiquismo', $eventos->revisionSistema->psiquismo ?? '')}}</textarea>
        </div> 

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="organosSentidos">Organos de los Sentidos</label>
            <textarea class="form-control autocomplete" rows="1" name="organosSentidos" tabindex="24">{{old('organosSentidos', $eventos->revisionSistema->organosSentidos ?? '')}}</textarea>
        </div> 
        <div class="form-group">
            <label for="digestivo">Digestivo</label>
            <textarea class="form-control autocomplete" rows="1" name="digestivo" tabindex="26">{{old('digestivo', $eventos->revisionSistema->digestivo ?? '')}}</textarea>
        </div>    
        <div class="form-group">
            <label for="genital">Genital</label>
            <textarea class="form-control autocomplete" rows="1" name="genital" tabindex="28">{{old('genital', $eventos->revisionSistema->genital ?? '')}}</textarea>
        </div>      
        <div class="form-group">
            <label for="pielAnexosRS">Piel y Anexos</label>
            <textarea class="form-control autocomplete" rows="1" name="pielAnexosRS" tabindex="30">{{old('pielAnexosRS', $eventos->revisionSistema->pielAnexosRS ?? '')}}</textarea>
        </div>  
        <div class="form-group">
            <label for="endocrinologico">Endocrinologico</label>
            <textarea class="form-control autocomplete" rows="1" name="endocrinologico" tabindex="32">{{old('endocrinologico', $eventos->revisionSistema->endocrinologico ?? '')}}</textarea>
        </div>  
    </div>
</div>