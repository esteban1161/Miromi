<h2>Historia Clinica </h2>  
<div class="row">    
    <div class="col-md-6">            
        <div class="form-group">
            <label for="nombreAcompañante">Nombre Acompañante</label>
            <input type="text" name="nombreAcompañante" class="form-control" id="nombreAcompañante"placeholder="esteban">
        </div>
        <div class="form-group">
            <label for="fechaConsulta">Fecha Consulta</label>
            <div class="input-group col-lg-12">
                <div class="input-group-prepend">
                    <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                </div>
                <input type="date" class="form-control" id="reservation" name="fechaConsulta">
            </div>
        </div>
        <div class="form-group">
            <label for="edadActual">Edad Actual</label>
            <input type="text" name="edadActual" class="form-control" id="edadActual" value="{{$edad}}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="parentescoAcompañante">Parentesco Acompañante</label>
            <input type="text" name="parentescoAcompañante" class="form-control" id="parentescoAcompañante"onclick="if(this.value=='Amigo') this.value=''" onblur="if(this.value=='') this.value='Amigo'">
        </div>
        <div class="form-group">
            <label for="horaConsulta">Hora Consulta</label>
            <div class="input-group col-lg-12">
                <div class="input-group-prepend">
                    <span class="input-group-text">            <i class="far fa-clock"></i>            </span>
                </div>
                <input type="time" class="form-control" id="reservation" name="horaConsulta">
            </div>
        </div>
        <div class="form-group">
            <label for="motivoConsulta">Motivo de Consulta</label>
            <input type="text" name="motivoConsulta" class="form-control" id="motivoConsulta" value="dolor">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="enfermedadActual">Enfermedad Actual</label>
            <textarea class="form-control" rows="3" name="enfermedadActual" id="enfermedadActual"></textarea>
                    {{-- <input type="textarea" rows="3"  cols="20" name="enfermedadActual" class="form-control" id="enfermedadActual"onkeydown="if(event.keyCode == 13) return false;"> --}}
        </div>
    </div>
</div>








