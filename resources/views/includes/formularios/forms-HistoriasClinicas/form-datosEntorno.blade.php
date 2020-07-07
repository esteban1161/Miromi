<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="convivencia">Con Quienes Vive</label>
            <textarea class="form-control autocomplete" rows="1" name="convivencia" tabindex="31">{{old('convivencia', $eventos->entornoSocial->convivencia ?? '')}}</textarea>
        </div> 
        <div class="form-group">
            <label for="cronologia">Cronologia Entre Hermanos</label>
            <textarea class="form-control autocomplete" rows="1" name="cronologia" tabindex="31">{{old('cronologia', $eventos->entornoSocial->cronologia ?? '')}}</textarea>
        </div> 
        <div class="form-group">
            <label for="recreacion">Actividades de Recreacion</label>
            <textarea class="form-control autocomplete" rows="1" name="recreacion" tabindex="31">{{old('recreacion', $eventos->entornoSocial->recreacion ?? '')}}</textarea>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="cuidadores">Cuidadores</label>
            <textarea class="form-control autocomplete" rows="1" name="cuidadores" tabindex="31">{{old('cuidadores', $eventos->entornoSocial->cuidadores ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="hermanos">Lugar y Numeros Entre Hermanos</label>
            <textarea class="form-control autocomplete" rows="1" name="hermanos" tabindex="31">{{old('hermanos', $eventos->entornoSocial->hermanos ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="biopatografia">Biopatografia (Eventos de Vida Significativos)</label>
            <textarea class="form-control autocomplete" rows="1" name="biopatografia" tabindex="31">{{old('biopatografia', $eventos->entornoSocial->biopatografia ?? '')}}</textarea>
        </div>
    </div>
</div>