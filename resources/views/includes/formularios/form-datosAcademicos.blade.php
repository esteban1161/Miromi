<h2>Datos Profesionales y Academicos</h2>  

<div class="row">
    <div class="col-md-11 row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="numeroRegistroProfesional">Numero Registro Profecional</label>
                <input type="text" name="numeroRegistroProfesional" class="form-control" id="numeroRegistroProfesional" value="{{old('numeroRegistroProfesional', $data->academico->numeroRegistroProfesional ?? '')}}" tabindex="13">
            </div>    
            <div class="from-group">
                <label for="tituloAcademico">Titulo Academico Obtenido</label>
                <input list="tituloAcademico" name="tituloAcademico" type="text" class="form-control" placeholder="Escribe Titulo academico" value="{{old('tituloAcademico', $data->academico->tituloAcademico ?? '')}}" tabindex="15">
                <datalist id="tituloAcademico">
                    @foreach( $titulo as $id => $titulo)                
                        <option value="{{$titulo}}"{{ old('ciudadNacimiento',  $data->academico->tituloAcademico ?? '') == $id ? 'selected' : ' ' }}>
                            {{$titulo}}
                        </option>
                    @endforeach  
                </datalist>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="institucion">Institucion</label>
                <input type="text" name="institucion" class="form-control" id="institucion" value="{{old('institucion', $data->academico->institucion ?? '')}}" tabindex="14">
            </div>   
            <label for=""></label>
            <a href="#" class="btn-accion-tabla tooltipsC" title="Añadir Datos Academicos">
                <i class="fas fa-plus-circle"></i>
            </a>
        </div>           
    </div>
</div>



