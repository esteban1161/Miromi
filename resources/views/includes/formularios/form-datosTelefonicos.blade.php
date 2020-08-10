<h2>Telefono(s) Personal(es)</h2>  
<div class="row">
    <div class="col-md-12">
        <table id="tablaTelefonos" class="table table-condensed table-striped">
			<thead>
				<tr>
					<th>Tipo de Telefono</th>
                    <th>Numero Telefono</th>
                    <th><button id="addTelefonos" name="adicional" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button></th>
				</tr>
			</thead>
			<tbody>
                @if ($data == [0])
                    <tr>
                        <td>
                            <input list="tipoTelefono" name="tipoTelefono[]" type="text" class="form-control " placeholder="Tipo de Telefono" value="{{old('tipoTelefono', $telefono->tipoTelefono ??'')}}" tabindex="2" required>
                            <datalist id="tipoTelefono">
                                <option value="Hogar"></option>
                                <option value="Celular"></option>
                                <option value="Oficina"></option>
                                <option value="Consultorio"></option> 
                            </datalist>
                        </td>
                        <td>             
                            <input type="text" name="numeroTelefono[]" class="form-control" value="{{old('numeroTelefono', $telefono->numeroTelefono ??'')}}" tabindex="2">
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger delTelefonos"><i class="fas fa-times-circle"></i></button>     
                        </td>
                    </tr>                
                @else
                    @foreach ($data->telefonos as $telefono)                 
                        <tr>
                            <td>
                                <input list="tipoTelefono" name="tipoTelefono[]" type="text" class="form-control" placeholder="Tipo de Telefono" value="{{old('tipoTelefono', $telefono->tipoTelefono ??'')}}" tabindex="2">
                                <datalist id="tipoTelefono">
                                    <option value="Hogar"></option>
                                    <option value="Celular"></option>
                                    <option value="Oficina"></option>
                                    <option value="Consultorio"></option>
                                </datalist>
                            </td>
                            <td>                  
                                <input type="text" name="numeroTelefono[]" class="form-control" value="{{old('numeroTelefono', $telefono->numeroTelefono ??'')}}" tabindex="2"> 
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger delTelefonos"><i class="fas fa-times-circle"></i></button>                        
                            </td>
                        </tr>                
                    @endforeach
                @endif                
            </tbody>
		</table>        
    </div>    
</div>



