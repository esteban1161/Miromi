<h2>Historia Clinica </h2>  
<div class="form-group row">
    <label for="nombreAcompañante" class="col-lg-3 col-form-label requerido">Nombre Acompañante</label>
        <div class="col-lg-8">
            <input type="text" name="nombreAcompañante" class="form-control" id="nombreAcompañante" required placeholder="esteban">
        </div>
</div>
<div class="form-group row">
    <label for="parentescoAcompañante" class="col-lg-3 col-form-label requerido">Parentesco Acompañante</label>
        <div class="col-lg-8">
            <input type="text" name="parentescoAcompañante" class="form-control" id="parentescoAcompañante" required onclick="if(this.value=='Amigo') this.value=''" onblur="if(this.value=='') this.value='Amigo'">
        </div>
</div>

<div class="form-group row">
    <label for="fechaConsulta" class="col-lg-3 col-form-label requerido">Fecha Consulta</label>
    <div class="input-group col-lg-7">
        <div class="input-group-prepend">
            <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
        </div>
        <input type="date" class="form-control" id="reservation" name="fechaConsulta">
    </div>
</div>

<div class="form-group row">
    <label for="horaConsulta" class="col-lg-3 col-form-label requerido">Hora Consulta</label>
    <div class="input-group col-lg-7">
        <div class="input-group-prepend">
            <span class="input-group-text">            <i class="far fa-clock"></i>            </span>
        </div>
        <input type="time" class="form-control" id="reservation" name="horaConsulta">
    </div>
</div>

<div class="form-group row">
    <label for="edadActual" class="col-lg-3 col-form-label requerido">Edad Actual</label>
        <div class="col-lg-8">
            <input type="text" name="edadActual" class="form-control" id="edadActual" value="{{$edad}}" required>
        </div>
</div>

<div class="form-group row">
    <label for="motivoConsulta" class="col-lg-3 col-form-label requerido">Motivo de Consulta</label>
        <div class="col-lg-8">
            <input type="text" name="motivoConsulta" class="form-control" id="motivoConsulta" required  value="dolor">
        </div> 
</div>
<div class="form-grou row">
    <label for="enfermedadActual" class="col-lg-3 col-form-label requerido">Enfermedad Actual</label>
        <div class="col-lg-8">
           <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="enfermedadActual" id="enfermedadActual"></textarea>
            {{-- <input type="textarea" rows="3"  cols="20" name="enfermedadActual" class="form-control" id="enfermedadActual" required onkeydown="if(event.keyCode == 13) return false;"> --}}
        </div>
</div>