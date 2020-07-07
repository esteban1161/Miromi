<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="observacionAnálisis">Observacion y/o Analisis</label>
            <textarea class="form-control" rows="2" name="observacionAnálisis" id="observacionAnálisis" tabindex="52">{{old('observacionAnálisis', $eventos->consulta->observacionAnálisis ?? '')}}</textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="plan">Plan</label>
            <textarea class="form-control" rows="2" name="plan" id="plan" tabindex="53">{{old('plan', $eventos->consulta->plan ?? '')}}</textarea>
        </div>
    </div>
    <div class="col-md-12">
        @include('includes.formularios.forms-HistoriasClinicas.form-datosDiagnosticos') 
    </div>    
    <div class="col-md-6">       

        <div class="form-group">
            <label for="finalidadConsulta">Finalidad de la Consulta</label>
            <select name="finalidadConsulta" id="finalidadConsulta" class="form-control" tabindex="56">
                <option value="">...Seleccionar Finalidad de la Consulta...</option>
                <option value="1" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '1' ? 'selected' : ' ' }}>Atención del parto(Atención del embarazo y del postparto)</option>
                <option value="2" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '2' ? 'selected' : ' ' }}>Atención Recién Nacido</option>
                <option value="3" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '3' ? 'selected' : ' ' }}>Atención Planificación familiar</option>
                <option value="4" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '4' ? 'selected' : ' ' }}>Detección alteraciones de crecimiento y desarrollo en menor de 10 años</option>
                <option value="5" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '5' ? 'selected' : ' ' }}>Detección de alteración del desarrollo joven</option>
                <option value="6" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '6' ? 'selected' : ' ' }}>Detección de alteraciones del embarazo</option>
                <option value="7" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '7' ? 'selected' : ' ' }}>Detección de alteraciones del adulto</option>
                <option value="8" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '8' ? 'selected' : ' ' }}>Detección de alteracions de agudeza visual</option>
                <option value="9" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '9' ? 'selected' : ' ' }}>Detección de Enfermedad Profesional</option>
                <option value="10" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '10' ? 'selected' : ' ' }}>No aplica</option>
            </select>
        </div>
        <div class="form-group">
            <label for="causaExterna">Causa Externa</label>
            <select name="causaExterna" id="causaExterna" class="form-control" tabindex="58">
                <option value="">...Seleccionar Causa Externa...</option>
                <option value="1" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '1' ? 'selected' : ' ' }}>Accidente de trabajo (Atención del embarazo y el Postparto)</option>
                <option value="2" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '2' ? 'selected' : ' ' }}>Accidente de tránsito</option>
                <option value="3" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '3' ? 'selected' : ' ' }}>Accidente rábico</option>
                <option value="4" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '4' ? 'selected' : ' ' }}>Accidente ofídico</option>
                <option value="5" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '5' ? 'selected' : ' ' }}>Otro tipo de accidente</option>
                <option value="6" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '6' ? 'selected' : ' ' }}>Evento catatrósfico</option>
                <option value="7" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '7' ? 'selected' : ' ' }}>Lesión por agresión</option>
                <option value="8" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '8' ? 'selected' : ' ' }}>Lesón auto infligida</option>
                <option value="9" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '9' ? 'selected' : ' ' }}>Sospecha de maltrato físico</option>
                <option value="10" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '10' ? 'selected' : ' ' }}>Sospecha de abuso sexual</option>
                <option value="11" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '11' ? 'selected' : ' ' }}>Sospecha de violencia sexual</option>
                <option value="12" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '12' ? 'selected' : ' ' }}>Sospecha de maltrato emocional</option>
                <option value="13" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '13' ? 'selected' : ' ' }}> Enfermedad general</option>
                <option value="14" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '14' ? 'selected' : ' ' }}>Enfermedad profesional</option>
                <option value="15" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '15' ? 'selected' : ' ' }}>Otra</option>
            </select>
        </div>
        <div class="form-group">
            <label for="valorConsulta">Valor de la Consulta</label>
            <input type="text" name="valorConsulta" class="form-control" id="valorConsulta" value="{{old('valorConsulta', $eventos->consulta->valorConsulta ?? '')}}" tabindex="60">
        </div>
        
    </div>
    <div class="col-md-6">
        
        
        <div class="form-group">
            <label for="codigoConsulta">Codigo de Consulta</label>
            <input type="text" name="codigoConsulta" class="form-control" id="codigoConsulta" value="{{old('codigoConsulta', $eventos->consulta->codigoConsulta ?? '')}}" tabindex="57">        
        </div>        
        <div class="form-group">
            <label for="tipoUsuario">Tipo de Usuario</label>
            <select name="tipoUsuario" id="tipoUsuario" class="form-control" tabindex="59">
                <option value="">...Seleccionar Tipo de Usuario...</option>
                <option value="1" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '1' ? 'selected' : ' ' }}>Contributivo</option>
                <option value="2" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '2' ? 'selected' : ' ' }}>Subsidiado</option>
                <option value="3" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '3' ? 'selected' : ' ' }}>Vinculado</option>
                <option value="4" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '4' ? 'selected' : ' ' }}>Particular</option>
                <option value="5" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '5' ? 'selected' : ' ' }}>Otro</option>
                <option value="6" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '6' ? 'selected' : ' ' }}>Desplazado Contributivo</option>
                <option value="7" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '7' ? 'selected' : ' ' }}>Desplazado Subsidiado</option>
                <option value="8" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '8' ? 'selected' : ' ' }}>Dezplazado No asegurado</option>
            </select>         
        </div>        

    </div>  
</div>
    <div class="col-md-12">
        <table id="tablaAdjuntos" class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>Adjuntar Archivos</th>
                    <th>Mas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="file" name="url[]" >                        
                    </td>
                    <td><button id="addAdjuntos" name="adicional" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button></td>
                </tr>
            </tbody> 
        </table><br><br>
        
    </div>
</div>




















