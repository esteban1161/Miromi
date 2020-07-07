<h4>Signos Vitales</h4>
<div class="row">  
    <div class="col-md-3">
        <div class="form-group">
            <label for="presionArterialSistolica">Presion Arterial Sistolica</label>
            <input type="text" name="presionArterialSistolica" class="form-control" id="presionArterialSistolica" value="{{old('presionArterialSistolica', $eventos->examenFisico->presionArterialSistolica ?? '')}}" tabindex="33">        
        </div>
    </div>  
    <div class="col-md-3">
        <div class="form-group">
            <label for="presionArterialDiastolica">Presion Arterial Diastolica</label>
            <input type="text" name="presionArterialDiastolica" class="form-control" id="presionArterialDiastolica" value="{{old('presionArterialDiastolica', $eventos->examenFisico->presionArterialDiastolica ?? '')}}" tabindex="34">        
        </div>
    </div> 
    <div class="col-md-3">
        <div class="form-group">
            <label for="frecuenciaCardiaca">Frecuencia Cardiaca</label>
            <input type="text" name="frecuenciaCardiaca" class="form-control" id="frecuenciaCardiaca" value="{{old('frecuenciaCardiaca', $eventos->examenFisico->frecuenciaCardiaca ?? '')}}" tabindex="35">        
        </div>
    </div>  
    <div class="col-md-3">
        <div class="form-group">
            <label for="frecuenciaRespiratoria">Frecuencia Respiratoria</label>
            <input type="text" name="frecuenciaRespiratoria" class="form-control" id="frecuenciaRespiratoria" value="{{old('frecuenciaRespiratoria', $eventos->examenFisico->frecuenciaRespiratoria ?? '')}}" tabindex="36">        
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="temperatura">Temperatura</label>
            <input type="text" name="temperatura" class="form-control" id="temperatura" value="{{old('temperatura', $eventos->examenFisico->temperatura ?? '')}}" tabindex="37">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="saturaciónO2">Saturación Oxigeno</label>
            <input type="text" name="saturaciónO2" class="form-control" id="saturaciónO2" value="{{old('saturaciónO2', $eventos->examenFisico->saturaciónO2 ?? '')}}" tabindex="38">  
        </div>
    </div>
</div>
<h4>Antropometria</h4>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="peso">Peso</label>
            <input type="text" name="peso" class="form-control" id="peso" value="{{old('peso', $eventos->examenFisico->peso ?? '')}}" tabindex="39">  
        </div>
    </div>   
    <div class="col-md-4">
        <div class="form-group">
            <label for="talla">Talla</label>
            <input type="text" name="talla" class="form-control" id="fx" value="{{old('talla', $eventos->examenFisico->talla ?? '')}}" tabindex="40">  
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="masaCorporal">Indice Masa Corporal</label>
            <input type="text" name="masaCorporal" class="form-control" id="resultado" value="{{old('masaCorporal', $eventos->examenFisico->masaCorporal ?? '')}}" tabindex="41">
        </div>
    </div>   
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="aspectoGeneral">Aspecto General</label>
            <textarea class="form-control autocomplete" rows="1" name="aspectoGeneral" id="aspectoGeneral" tabindex="42">{{old('aspectoGeneral', $eventos->examenFisico->aspectoGeneral ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="cuello">Cuello</label>
            <textarea class="form-control autocomplete" rows="1" name="cuello" id="cuello" tabindex="44">{{old('cuello', $eventos->examenFisico->cuello ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="abdomen">Abdomen</label>
            <textarea class="form-control autocomplete" rows="1" name="abdomen" id="abdomen" tabindex="46">{{old('abdomen', $eventos->examenFisico->abdomen ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="pielAnexosEF">Piel y Anexos</label>
            <textarea class="form-control autocomplete" rows="1" name="pielAnexosEF" id="pielAnexosEF" tabindex="48">{{old('pielAnexosEF', $eventos->examenFisico->pielAnexosEF ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="neurológico">Neurológico</label>
            <textarea class="form-control autocomplete" rows="1" name="neurológico" id="neurológico" tabindex="50">{{old('neurológico', $eventos->examenFisico->neurológico ?? '')}}</textarea>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="otorrinolaringologico">Otorrinolaringologico</label>
            <textarea class="form-control autocomplete" rows="1" name="otorrinolaringologico" id="otorrinolaringologico" tabindex="43">{{old('otorrinolaringologico', $eventos->examenFisico->otorrinolaringologico ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="cardioPulmonarEF">Cardio Pulmonar</label>
            <textarea class="form-control autocomplete" rows="1" name="cardioPulmonarEF" id="cardioPulmonarEF" tabindex="45">{{old('cardioPulmonarEF', $eventos->examenFisico->cardioPulmonarEF ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="extremidadesEF">Extremidades</label>
            <textarea class="form-control autocomplete" rows="1" name="extremidades" id="extremidades" tabindex="47">{{old('extremidades', $eventos->examenFisico->extremidades ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="genitales">Genitales</label>
            <textarea class="form-control autocomplete" rows="1" name="genitales" id="genitales" tabindex="49">{{old('genitales', $eventos->examenFisico->genitales ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="otrosEF">Otros</label>
            <textarea class="form-control autocomplete" rows="1" name="otrosEF" id="otrosEF" tabindex="51">{{old('otrosEF', $eventos->examenFisico->otrosEF ?? '')}}</textarea>
        </div>
    </div>    
</div>
