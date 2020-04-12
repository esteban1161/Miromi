<h2>Consulta</h2>
<div class="form-group row">
    <label for="dxPrincipal" class="col-lg-3 col-form-label requerido">Dx Principal</label>
    <div class="col-lg-8">
        <select id="dxPrincipal" name="dxPrincipal" class="form-control select2 " style="width: 100%;">
                <option value="">...Selecionar Diagnostico...</option>
                @foreach($cie10 as $codigo => $descripcion)
                <option value="{{$codigo}} ">
                    {{$codigo}} - {{$descripcion}}
                </option>
                @endforeach  
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="tipoDiagnostico" class="col-lg-3 col-form-label requerido">Tipo Diagnostico</label>
        <div class="col-lg-8">
            <input type="text" name="tipoDiagnostico" class="form-control" id="tipoDiagnostico" required>
        </div>
</div>

<div class="form-group row">
    <label for="dxRelacionado1" class="col-lg-3 col-form-label requerido">Dx Relacionado 1</label>
    <div class="col-lg-8">
        <select id="dxRelacionado1" name="dxRelacionado1" class="form-control select2 " style="width: 100%;">
                <option value="">...Selecionar Diagnostico...</option>
                @foreach($cie10 as $codigo => $descripcion)
                <option value="{{$codigo}} ">
                    {{$codigo}} - {{$descripcion}}
                </option>
                @endforeach  
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="dxRelacionado2" class="col-lg-3 col-form-label requerido">Dx Relacionado 2</label>
    <div class="col-lg-8">
        <select id="dxRelacionado2" name="dxRelacionado2" class="form-control select2 " style="width: 100%;">
                <option value="">...Selecionar Diagnostico...</option>
                @foreach($cie10 as $codigo => $descripcion)
                <option value="{{$codigo}} ">
                    {{$codigo}} - {{$descripcion}}
                </option>
                @endforeach  
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="dxRelacionado3" class="col-lg-3 col-form-label requerido">Dx Relacionado 3</label>
    <div class="col-lg-8">
        <select id="dxRelacionado3" name="dxRelacionado3" class="form-control select2 " style="width: 100%;">
                <option value="">...Selecionar Diagnostico...</option>
                @foreach($cie10 as $codigo => $descripcion)
                <option value="{{$codigo}} ">
                    {{$codigo}} - {{$descripcion}}
                </option>
                @endforeach  
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="tipoConsulta" class="col-lg-3 col-form-label requerido">Tipo de la Consulta</label>
        <div class="col-lg-8">
            <input type="text" name="tipoConsulta" class="form-control" id="tipoConsulta" required>
        </div>
</div>
<div class="form-group row">
    <label for="finalidadConsulta" class="col-lg-3 col-form-label requerido">Finalidad de la Consulta</label>
        <div class="col-lg-8">
            <input type="text" name="finalidadConsulta" class="form-control" id="finalidadConsulta" required>
        </div>
</div>
<div class="form-group row">
    <label for="causaExterna" class="col-lg-3 col-form-label requerido">Causa Externa</label>
        <div class="col-lg-8">
            <input type="text" name="causaExterna" class="form-control" id="causaExterna" required>
        </div>
</div>
<div class="form-group row">
    <label for="valorConsulta" class="col-lg-3 col-form-label requerido">Valor de la Consulta</label>
        <div class="col-lg-8">
            <input type="text" name="valorConsulta" class="form-control" id="valorConsulta" required>
        </div>
</div>
<div class="form-group row">
    <label for="tipoUsuario" class="col-lg-3 col-form-label requerido">Tipo de Usuario</label>
        <div class="col-lg-8">
            <input type="text" name="tipoUsuario" class="form-control" id="tipoUsuario" required>
        </div>
</div>
<div class="form-group row">
    <label for="observacionAnálisis" class="col-lg-3 col-form-label requerido">Observacion y/o Analisis</label>
        <div class="col-lg-8">
            <input type="text" name="observacionAnálisis" class="form-control" id="observacionAnálisis" required>
        </div>
</div>
<div class="form-group row">
    <label for="plan" class="col-lg-3 col-form-label requerido">Plan</label>
        <div class="col-lg-8">
            <input type="text" name="plan" class="form-control" id="plan" required>
        </div>
</div>
