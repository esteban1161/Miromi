<div class="row">    
    
    <div class="col-md-5">
        <div class="form-group">
            <label for="consultorio">Consultorio</label>
            <select name="consultorio" id="consultorio"   class="form-control" tabindex="1">
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
            <input type="date" class="form-control" name="fechaConsulta" value="{{old('fechaConsulta', $eventos->formatosBase->fechaConsulta ?? $date)}}" tabindex="1">
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
            <input type="time" class="form-control" name="horaConsulta" value="{{old('horaConsulta', $eventos->formatosBase->horaConsulta ?? $time)}}" tabindex="1">
            </div>
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-group">
            <label for="edadActual">Edad</label>
            <input type="text" name="edadActual" class="form-control" value="{{old('edadActual', $eventos->formatosBase->edadActual ?? $edad)}}" tabindex="1">
        </div>
    </div>
    

    <div class="col-md-6">            
        <div class="form-group">
            <label for="nombreAcompañante">Nombre Acompañante</label>
            <input type="text" name="nombreAcompañante" class="form-control" value="{{old('nombreAcompañante', $eventos->formatosBase->nombreAcompañante ?? '')}}" tabindex="1">
        </div>        
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="parentescoAcompañante">Parentesco Acompañante</label>
            <input list="parentescoAcompañante" type="text" name="parentescoAcompañante" class="form-control" value="{{old('parentescoAcompañante', $eventos->formatosBase->parentescoAcompañante ?? '')}}" tabindex="1">
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
            <input type="text" name="motivoConsulta" class="form-control" value="{{old('motivoConsulta', $eventos->formatosBase->motivoConsulta ?? '')}}" tabindex="1">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="enfermedadActual">Enfermedad Actual</label>
            <textarea class="form-control" rows="2" name="enfermedadActual" tabindex="1">{{old('enfermedadActual', $eventos->formatosBase->enfermedadActual ?? '')}}</textarea>
        </div>
    </div>
</div>








