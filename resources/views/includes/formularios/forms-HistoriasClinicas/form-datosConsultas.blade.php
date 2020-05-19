<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="observacionAnálisis">Observacion y/o Analisis</label>
            <textarea class="form-control" rows="2" name="observacionAnálisis" id="observacionAnálisis" tabindex="52"></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="plan">Plan</label>
            <textarea class="form-control" rows="2" name="plan" id="plan" tabindex="53"></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <table id="tablaDiagnosticos" class="table table-condensed table-striped">
            <thead>
                <tr >
                    <th WIDTH="70%">Diagnostico</th>
                    <th WIDTH="20%">Tipo Diagnostico</th>
                    <th WIDTH="10%">Mas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td >
                       {{--  <input list="diagnostico" type="text" name="diagnostico" class="form-control" tabindex="56">
                            <datalist id="diagnostico">
                                @foreach($cie10 as $codigo => $descripcion)                
                                    <option value="{{$codigo}}">{{$descripcion}}</option>
                                @endforeach  
                            </datalist> --}}
                       <select id="cie10s_id" name="cie10s_id[]" class="form-control select2" style="width: 100%;" tabindex="54">                        
                            <option value="">...Selecionar Diagnostico...</option>
                            @foreach($cie10 as $diagnostico)
                            <option value="{{$diagnostico->id}}">
                                {{$diagnostico->codigo}} - {{$diagnostico->descripcion}}
                            </option>
                            @endforeach
                        </select> 
                    </td>
                    <td>    
                        <select name="tipoDiagnostico[]" id="tipoDiagnostico" class="form-control" tabindex="55">
                            <option value="">...Seleccionar...</option>
                            <option value="1">Impresión Diagnostica</option>
                            <option value="2">Confrimado Nuevo</option>
                            <option value="3">Confirmado Repetido</option>
                        </select>                      
                    </td>
                    <td>
                        <button id="addDiagnosticos" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>    
    <div class="col-md-6">       

        <div class="form-group">
            <label for="finalidadConsulta">Finalidad de la Consulta</label>
            <select name="finalidadConsulta" id="finalidadConsulta" class="form-control" tabindex="56">
                <option value="">...Seleccionar Finalidad de la Consulta...</option>
                <option value="1">Atención del parto(Atención del embarazo y del postparto)</option>
                <option value="2">Atención Recién Nacido</option>
                <option value="3">Atención Planificación familiar</option>
                <option value="4">Detección alteraciones de crecimiento y desarrollo en menor de 10 años</option>
                <option value="5">Detección de alteración del desarrollo joven</option>
                <option value="6">Detección de alteraciones del embarazo</option>
                <option value="7">Detección de alteraciones del adulto</option>
                <option value="8">Detección de alteracions de agudeza visual</option>
                <option value="9">Detección de Enfermedad Profesional</option>
                <option value="10">No aplica</option>
            </select>
        </div>
        <div class="form-group">
            <label for="causaExterna">Causa Externa</label>
            <select name="causaExterna" id="causaExterna" class="form-control" tabindex="58">
                <option value="">...Seleccionar Causa Externa...</option>
                <option value="1">Accidente de trabajo (Atención del embarazo y el Postparto)</option>
                <option value="2">Accidente de tránsito</option>
                <option value="3">Accidente rábico</option>
                <option value="4">Accidente ofídico</option>
                <option value="5">Otro tipo de accidente</option>
                <option value="6">Evento catatrósfico</option>
                <option value="7">Lesión por agresión</option>
                <option value="8">Lesón auto infligida</option>
                <option value="9">Sospecha de maltrato físico</option>
                <option value="10">Sospecha de abuso sexual</option>
                <option value="11">Sospecha de violencia sexual</option>
                <option value="12">Sospecha de maltrato emocional</option>
                <option value="13"> Enfermedad general</option>
                <option value="14">Enfermedad profesional</option>
                <option value="15">Otra</option>
            </select>
        </div>
        <div class="form-group">
            <label for="valorConsulta">Valor de la Consulta</label>
            <input type="text" name="valorConsulta" class="form-control" id="valorConsulta" tabindex="60">
        </div>
        
    </div>
    <div class="col-md-6">
        
        
        <div class="form-group">
            <label for="codigoConsulta">Codigo de Consulta</label>
            <input type="text" name="codigoConsulta" class="form-control" id="codigoConsulta" tabindex="57">        
        </div>        
        <div class="form-group">
            <label for="tipoUsuario">Tipo de Usuario</label>
            <select name="tipoUsuario" id="tipoUsuario" class="form-control" tabindex="59">
                <option value="">...Seleccionar Tipo de Usuario...</option>
                <option value="1">Contributivo</option>
                <option value="2">subsidiado</option>
                <option value="3">Vinculado</option>
                <option value="4">Particular</option>
                <option value="5">Otro</option>
                <option value="6">Desplazado Contributivo</option>
                <option value="7">Desplazado Subsidiado</option>
                <option value="8">Dezplazado No asegurado</option>
            </select>         
        </div>        

    </div>  
</div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="url">Archivo Adjunto</label>
            <div class="custom-file col-lg-12">
                <input type="file" class="custom-file-input" id="url" name="url">
                <label class="custom-file-label" for="url">Escojer archivo</label>
            </div>
        </div>
    </div>
</div>




















