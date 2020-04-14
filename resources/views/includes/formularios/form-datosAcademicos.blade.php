<h2>Datos Profesionales y Academicos</h2>  

<div class="form-group row">
    <label for="numeroRegistroProfesional" class="col-lg-3 col-form-label">Numero Registro Profecional</label>
        <div class="col-lg-8">
            <input type="text" name="numeroRegistroProfesional" class="form-control" id="numeroRegistroProfesional" value="{{old('numeroRegistroProfesional', $data->academico->numeroRegistroProfesional ?? '')}}">
        </div>
</div>      
<div class="form-group row">
    <label for="tituloAcademico" class="col-lg-3 col-form-label">Titulo Academico Obtenido</label>
        <div class="col-lg-8">
            <input type="text" name="tituloAcademico" class="form-control" id="tituloAcademico" value="{{old('tituloAcademico', $data->academico->tituloAcademico ?? '')}}">
        </div>
</div>        
<div class="form-group row">
    <label for="institucion" class="col-lg-3 col-form-label">Institucion</label>
        <div class="col-lg-8">
            <input type="text" name="institucion" class="form-control" id="institucion" value="{{old('institucion', $data->academico->institucion ?? '')}}">
        </div>
</div>    

<button type="submit" class="btn btn-info">Agregar</button>