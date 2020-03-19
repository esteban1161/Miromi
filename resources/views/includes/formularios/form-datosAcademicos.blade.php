<h2>Datos Profesionales y Academicos</h2>  

<div class="form-group row">
    <label for="tipoProfesional" class="col-lg-3 col-form-label requerido">Tipo de Profesional</label>
    <select name="tipoProfesional" id="tipoProfesional" class="col-lg-8">
        <option value="">...Selecionar Tipo Profesional...</option>
        <option value="MG">Medico General</option>
        <option value="ME">Medico Especialista</option>
    </select>
</div>
<div class="form-group row">
    <label for="numeroRegistroProfesional" class="col-lg-3 col-form-label requerido">Numero Registro Profecional</label>
        <div class="col-lg-8">
            <input type="text" name="numeroRegistroProfesional" class="form-control" id="numeroRegistroProfesional" value="{{old('numeroRegistroProfesional', $data->datosDemograficos->numeroRegistroProfesional ?? '')}}" required>
        </div>
</div>      
<div class="form-group row">
    <label for="tituloAcademico" class="col-lg-3 col-form-label requerido">Titulo Academico Obtenido</label>
        <div class="col-lg-8">
            <input type="text" name="tituloAcademico" class="form-control" id="tituloAcademico" value="{{old('tituloAcademico', $data->datosDemograficos->tituloAcademico ?? '')}}" required>
        </div>
</div>        
<div class="form-group row">
    <label for="institucion" class="col-lg-3 col-form-label requerido">Institucion</label>
        <div class="col-lg-8">
            <input type="text" name="institucion" class="form-control" id="institucion" value="{{old('institucion', $data->datosDemograficos->institucion ?? '')}}" required>
        </div>
</div>    

<button type="submit" class="btn btn-info">Agregar</button>