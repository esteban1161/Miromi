<h2>Consulta</h2>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="dxPrincipal">Dx Principal</label>
            <select id="dxPrincipal" name="dxPrincipal" class="form-control select2 " style="width: 100%;">
                <option value="">...Selecionar Diagnostico...</option>
                @foreach($cie10 as $codigo => $descripcion)
                <option value="{{$codigo}} ">
                    {{$codigo}} - {{$descripcion}}
                </option>
                @endforeach  
            </select>
        </div>
        <div class="form-group">
            <label for="dxRelacionado1">Dx Relacionado 1</label>
            <select id="dxRelacionado1" name="dxRelacionado1" class="form-control select2 " style="width: 100%;">
                <option value="">...Selecionar Diagnostico...</option>
                @foreach($cie10 as $codigo => $descripcion)
                <option value="{{$codigo}} ">
                    {{$codigo}} - {{$descripcion}}
                </option>
                @endforeach  
            </select>
        </div>
        <div class="form-group">
            <label for="dxRelacionado3">Dx Relacionado 3</label>
            <select id="dxRelacionado3" name="dxRelacionado3" class="form-control select2 " style="width: 100%;">
                <option value="">...Selecionar Diagnostico...</option>
                @foreach($cie10 as $codigo => $descripcion)
                <option value="{{$codigo}} ">
                    {{$codigo}} - {{$descripcion}}
                </option>
                @endforeach  
            </select>
        </div>
        <div class="form-group">
            <label for="finalidadConsulta">Finalidad de la Consulta</label>
            <input type="text" name="finalidadConsulta" class="form-control" id="finalidadConsulta">
        </div>
        <div class="form-group">
            <label for="valorConsulta">Valor de la Consulta</label>
            <input type="text" name="valorConsulta" class="form-control" id="valorConsulta">
        </div>
        <div class="form-group">
            <label for="observacionAnálisis">Observacion y/o Analisis</label>
            <input type="text" name="observacionAnálisis" class="form-control" id="observacionAnálisis">
        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="tipoDiagnostico">Tipo Diagnostico</label>
            <input type="text" name="tipoDiagnostico" class="form-control" id="tipoDiagnostico">                
        </div>
        <div class="form-group">
            <label for="dxRelacionado2">Dx Relacionado 2</label>
            <select id="dxRelacionado2" name="dxRelacionado2" class="form-control select2 " style="width: 100%;">
                <option value="">...Selecionar Diagnostico...</option>
                @foreach($cie10 as $codigo => $descripcion)
                <option value="{{$codigo}} ">
                    {{$codigo}} - {{$descripcion}}
                </option>
                @endforeach  
            </select>    
        </div>
        <div class="form-group">
            <label for="tipoConsulta">Tipo de la Consulta</label>
            <input type="text" name="tipoConsulta" class="form-control" id="tipoConsulta">        
        </div>
        <div class="form-group">
            <label for="causaExterna">Causa Externa</label>
             <input type="text" name="causaExterna" class="form-control" id="causaExterna">
        </div>
        <div class="form-group">
            <label for="tipoUsuario">Tipo de Usuario</label>
            <input type="text" name="tipoUsuario" class="form-control" id="tipoUsuario">
        </div>
        <div class="form-group">
            <label for="plan">Plan</label>
            <input type="text" name="plan" class="form-control" id="plan">
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




















