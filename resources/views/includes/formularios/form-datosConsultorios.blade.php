<h2>Datos de Contacto y Consultorios</h2>  

<div class="row">
    <div class="col-md-12 row">   
        <table id="tablaConsultorios" class="table table-condensed table-striped">
			<thead>
				<tr>
                    <th class="">Nombre del Consultorio</th>
                    <th class="">Direccion Consultorio</th>
                    <th class="">Pagina Web Consultorio</th>
                    <th class="">Codigo de inscripcion</th>
                    <th class="">NIT Consultorio</th>
                    <th class=""><button id="addConsultorios" name="adicional" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button></th>
				</tr>
			</thead>
			<tbody>
                @if ($data == [0])
                    <tr>
                        <td>                                   
                            <input type="text" name="nombreConsultorio[]" class="form-control" id="nombreConsultorio" value="{{old('nombreConsultorio', $consultorio->nombreConsultorio ?? '')}}" tabindex="5">
                        </td>
                        <td>                                 
                            <input type="text" name="direccionConsultorio[]" class="form-control" id="direccionConsultorio" value="{{old('direccionConsultorio', $consultorio->direccionConsultorio ?? '')}}" tabindex="5">
                        </td>
                        <td>                                   
                            <input type="text" name="paginaWebConsultorio[]" class="form-control" id="paginaWebConsultorio" value="{{old('paginaWebConsultorio', $consultorio->paginaWebConsultorio ?? '')}}" tabindex="5">
                        </td>
                        <td>
                            <input type="text" name="codigoSecretaria[]" class="form-control" id="codigoSecretaria" value="{{old('codigoSecretaria', $consultorio->codigoSecretaria ?? '')}}" tabindex="5">
                        </td>
                        <td>
                            <input type="text" name="nitConsultorio[]" class="form-control" id="nitConsultorio" value="{{old('nitConsultorio', $consultorio->nitConsultorio ?? '')}}" tabindex="5">
                        </td>
                        <td>
                            <button type='button' class='btn btn-danger delConsultorios'><i class='fas fa-times-circle'></i></button>
                        </td>
                    </tr>          
                @else
                    @foreach ($data->consultorios as $consultorio)                 
                    <tr>
                        <td>                                   
                            <input type="text" name="nombreConsultorio[]" class="form-control" id="nombreConsultorio" value="{{old('nombreConsultorio', $consultorio->nombreConsultorio ?? '')}}" tabindex="5">
                        </td>
                        <td>                                 
                            <input type="text" name="direccionConsultorio[]" class="form-control" id="direccionConsultorio" value="{{old('direccionConsultorio', $consultorio->direccionConsultorio ?? '')}}" tabindex="5">
                        </td>
                        <td>                                   
                            <input type="text" name="paginaWebConsultorio[]" class="form-control" id="paginaWebConsultorio" value="{{old('paginaWebConsultorio', $consultorio->paginaWebConsultorio ?? '')}}" tabindex="5">
                        </td>
                        <td>
                            <input type="text" name="codigoSecretaria[]" class="form-control" id="codigoSecretaria" value="{{old('codigoSecretaria', $consultorio->codigoSecretaria ?? '')}}" tabindex="5">
                        </td>
                        <td>
                            <input type="text" name="nitConsultorio[]" class="form-control" id="nitConsultorio" value="{{old('nitConsultorio', $consultorio->nitConsultorio ?? '')}}" tabindex="5">
                        </td>
                        <td>
                            <button type='button' class='btn btn-danger delConsultorios'><i class='fas fa-times-circle'></i></button>
                        </td>
                    </tr>          
                    @endforeach               
                @endif                                    
            </tbody>
		</table>
    </div>
</div>