<div class="row">    
    
    <div class="col-md-5">
        <div class="form-group">
            <label for="consultorio">Consultorio</label>
            <select name="consultorio" id="" class="form-control" tabindex="1">
                <option value="">...Seleccionar Consultorio...</option>
                @foreach ($terapeuta->consultorios as $consultorio)
                    <option value="{{$consultorio->nombreConsultorio}}">{{$consultorio->nombreConsultorio}} - {{$consultorio->nitConsultorio}}</option>                                            
                @endforeach                
            </select>
        </div>
    </div>
    <div class="col-md-3"> 
        <div class="form-group">
            <label for="fechaConsulta">Fecha Consulta</label>
            <div class="input-group col-lg-12">
                <div class="input-group-prepend">
                    <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                </div>                
            <input type="date" class="form-control" id="fechaConsulta" name="fechaConsulta" value="{{$date}}" tabindex="1">
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="horaConsulta">Hora Consulta</label>
            <div class="input-group col-lg-12">
                <div class="input-group-prepend">
                    <span class="input-group-text">            <i class="far fa-clock"></i>            </span>
                </div>
            <input type="time" class="form-control" id="horaConsulta" name="horaConsulta" value="{{$time}}" tabindex="1">
            </div>
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-group">
            <label for="edadActual">Edad</label>
            <input type="text" name="edadActual" class="form-control" id="edadActual" value="{{$edad}}" tabindex="1">
        </div>
    </div>
    

    <div class="col-md-6">            
        <div class="form-group">
            <label for="nombreAcompañante">Nombre Acompañante</label>
            <input type="text" name="nombreAcompañante" class="form-control" id="nombreAcompañante" tabindex="1">
        </div>        
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="parentescoAcompañante">Parentesco Acompañante</label>
            <input list="parentescoAcompañante" type="text" name="parentescoAcompañante" class="form-control" tabindex="1">
            <datalist id="parentescoAcompañante">
                <option value="Padre"></option>
                <option value="Madre"></option>
                <option value="Hermano(a)"></option>
                <option value="Tio(a)"></option>
                <option value="Amigo(a)"></option>
                <option value="Otro Familiar"></option>
                <option value="Otro Parentesco"></option>
            </datalist>
        </div>               
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="motivoConsulta">Motivo de Consulta</label>
            <input type="text" name="motivoConsulta" class="form-control" id="motivoConsulta" tabindex="1">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="enfermedadActual">Enfermedad Actual</label>
            <textarea class="form-control" rows="2" name="enfermedadActual" id="enfermedadActual" tabindex="1"></textarea>
        </div>
    </div>
</div>








