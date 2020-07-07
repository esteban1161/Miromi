<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="memoria">Memoria (Aprendizaje y Lógica)</label>
            <textarea class="form-control autocomplete" rows="1" name="memoria" tabindex="31">{{old('memoria', $eventos->sintomasMentales->memoria ?? '')}}</textarea>
        </div> 
        <div class="form-group">
            <label for="emociones">Afecto y Emociones</label>
            <textarea class="form-control autocomplete" rows="1" name="emociones" tabindex="31">{{old('emociones', $eventos->sintomasMentales->emociones ?? '')}}</textarea>
        </div> 
        <div class="form-group">
            <label for="relacionamiento">Relacionamiento y Expresión del Afecto</label>
            <textarea class="form-control autocomplete" rows="1" name="relacionamiento" tabindex="31">{{old('relacionamiento', $eventos->sintomasMentales->relacionamiento ?? '')}}</textarea>
        </div> 
        <div class="form-group">
            <label for="comportamiento">Comportamiento Frente a la Accion</label>
            <textarea class="form-control autocomplete" rows="1" name="comportamiento" tabindex="31">{{old('comportamiento', $eventos->sintomasMentales->comportamiento ?? '')}}</textarea>
        </div> 
        <div class="form-group">
            <label for="otrosMentales">Otros</label>
            <textarea class="form-control autocomplete" rows="1" name="otrosMentales" tabindex="31">{{old('otrosMentales', $eventos->sintomasMentales->otrosMentales ?? '')}}</textarea>
        </div> 
    </div>
</div>