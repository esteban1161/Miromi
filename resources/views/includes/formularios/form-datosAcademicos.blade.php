<h2>Datos Profesionales y Academicos</h2>  

<div class="row">
    <div class="col-md-12">
        <table id="tablaAcademico" class="table table-condensed table-striped">
			<thead>
				<tr>
					<th class="">Numero de Registro (Si aplica)</th>
                    <th class="">Titulo Academico Obtenido</th>
                    <th class="">Institucion</th>
                    <th class=""><button id="addAcademico" name="adicional" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button></th>
				</tr>
			</thead>
			<tbody>   
                @if ($data == [0])
                    <tr>
                        <td>                                           
                            <input type="text" name="numeroRegistroProfesional[]" class="form-control" id="numeroRegistroProfesional" value="{{old('numeroRegistroProfesional', $academico->numeroRegistroProfesional ?? '')}}" tabindex="13">
                        </td>
                        <td>         
                            <input list="tituloAcademico" name="tituloAcademico[]" type="text" class="form-control" placeholder="Escribe Titulo academico" value="{{old('tituloAcademico', $academico->tituloAcademico ?? '')}}" tabindex="14">
                            <datalist id="tituloAcademico">
                                @foreach( $titulo as $id => $tituloA)                
                                    <option value="{{$tituloA}}"{{ old('tituloAcademico',  $academico->tituloAcademico ?? '') == $id ? 'selected' : ' ' }}>
                                        {{$tituloA}}
                                    </option>
                                @endforeach  
                            </datalist>                           
                        </td>
                        <td>                            
                            <input type="text" name="institucion[]" class="form-control" id="institucion" value="{{old('institucion', $academico->institucion ?? '')}}" tabindex="15">
                        </td>
                        <td>
                            <button type='button' class='btn btn-danger delAcademico'><i class='fas fa-times-circle'></i></button>
                        </td>
                    </tr>        
                @else
                    @foreach ($data->academicos as $academico)                 
                    <tr>
                        <td>                                   
                            <input type="text" name="numeroRegistroProfesional[]" class="form-control" id="numeroRegistroProfesional" value="{{old('numeroRegistroProfesional', $academico->numeroRegistroProfesional ?? '')}}" tabindex="13">
                        </td>
                        <td>                                 
                            <input list="tituloAcademico" name="tituloAcademico[]" type="text" class="form-control" placeholder="Escribe Titulo academico" value="{{old('tituloAcademico', $academico->tituloAcademico ?? '')}}" tabindex="14">
                            <datalist id="tituloAcademico">
                                @foreach( $titulo as $id => $tituloA)                
                                    <option value="{{$tituloA}}"{{ old('tituloAcademico',  $academico->tituloAcademico ?? '') == $id ? 'selected' : ' ' }}>
                                        {{$tituloA}}
                                    </option>
                                @endforeach  
                            </datalist>
                        </td>
                        <td>                                   
                            <input type="text" name="institucion[]" class="form-control" id="institucion" value="{{old('institucion', $academico->institucion ?? '')}}" tabindex="15">
                        </td>
                        <td>
                            <button type='button' class='btn btn-danger delAcademico'><i class='fas fa-times-circle'></i></button>
                        </td>
                    </tr>          
                    @endforeach 
                @endif                         
            </tbody>
		</table> 
    </div>
</div>



