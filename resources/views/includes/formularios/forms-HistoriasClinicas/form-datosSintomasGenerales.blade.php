<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="sueno">Sueño</label>
            <textarea class="form-control autocomplete" rows="1" name="sueno" tabindex="31">{{old('sueno', $eventos->sintomasGenerales->sueno ?? '')}}</textarea>
        </div> 
        <div class="form-group">
            <label for="sedApetito">Sed y Apetito</label>
            <textarea class="form-control autocomplete" rows="1" name="sedApetito" tabindex="31">{{old('sedApetito', $eventos->sintomasGenerales->sedApetito ?? '')}}</textarea>
        </div> 
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="temperatura">Temperatura</label>
            <textarea class="form-control autocomplete" rows="1" name="temperatura" tabindex="31">{{old('temperatura', $eventos->sintomasGenerales->temperatura ?? '')}}</textarea>
        </div> 
        <div class="form-group">
            <label for="vitalidad">Vitalidad</label>
            <textarea class="form-control autocomplete" rows="1" name="vitalidad" tabindex="31">{{old('vitalidad', $eventos->sintomasGenerales->vitalidad ?? '')}}</textarea>
        </div> 
    </div>

</div>