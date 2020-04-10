<h2>Historia Clinica </h2>  
<div class="form-group row">
    <label for="nombreAcompañante" class="col-lg-3 col-form-label requerido">Nombre Acompañante</label>
        <div class="col-lg-8">
            <input type="text" name="nombreAcompañante" class="form-control" id="nombreAcompañante" value="{{old('nombreAcompañante', $data->nombreAcompañante ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="parentescoAcompañante" class="col-lg-3 col-form-label requerido">Parentesco Acompañante</label>
        <div class="col-lg-8">
            <input type="text" name="parentescoAcompañante" class="form-control" id="parentescoAcompañante" value="{{old('parentescoAcompañante', $data->parentescoAcompañante ?? '')}}" required>
        </div>
</div>

<div class="form-group">
    <label for="fechaConsulta" class="col-lg-3 col-form-label requerido">Fecha Consulta</label>
    <div class="input-group col-lg-8">
        <div class="input-group-prepend">
            <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
        </div>
        <input type="date" class="form-control" id="reservation" name="fechaConsulta" value="{{old('fechaConsulta', $data->identificacion->fechaConsulta ??'')}}" >
    </div>
</div>


<div class="form-group row">
    <label for="horaConsulta" class="col-lg-3 col-form-label requerido">Hora Consulta</label>
        <div class="col-lg-8">
            <input type="text" name="horaConsulta" class="form-control" id="horaConsulta" value="{{old('horaConsulta', $data->horaConsulta ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="edadActual" class="col-lg-3 col-form-label requerido">Edad Actual</label>
        <div class="col-lg-8">
            <input type="text" name="edadActual" class="form-control" id="edadActual" value="{{old('edadActual', $data->edadActual ?? '')}}" required>
        </div>
</div>

<div class="form-group row">
    <label for="motivoConsulta" class="col-lg-3 col-form-label requerido">Motivo de Consulta</label>
        <div class="col-lg-8">
            <input type="text" name="motivoConsulta" class="form-control" id="motivoConsulta" value="{{old('motivoConsulta', $data->motivoConsulta ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="enfermedadActual" class="col-lg-3 col-form-label requerido">Enfermedad Actual</label>
        <div class="col-lg-8">
            <input type="text" name="enfermedadActual" class="form-control" id="enfermedadActual" value="{{old('enfermedadActual', $data->enfermedadActual ?? '')}}" required>
        </div>
</div>