<h2>Correo(s) Electronico(s) Personal(es)</h2>  
<div class="row">
    <div class="col-md-12">
        <table id="tablaCorreos" class="table table-condensed table-striped">
			<thead>
				<tr>
					<th>Tipo de Correo</th>
                    <th>Correo Electronico</th>
                    <th><button id="addCorreos" name="adicional" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button></th>
				</tr>
			</thead>
			<tbody>
                @if ($data == [0])
                <tr>
					<td>
                        <input list="tipoCorreo" type="text" name="tipoCorreo[]" class="form-control" placeholder="Tipo de Correo" value="{{old('tipoCorreo', $correo->tipoCorreo ??'')}}" tabindex="3">
                        <datalist id="tipoCorreo">
                            <option value="Personal"></option>
                            <option value="Del trabajo"></option>
                            <option value="Universitario"></option>
                        </datalist>
                    </td>
					<td>             
                        <input type="text" name="correoElectronico[]" class="form-control" id="correoElectronico" value="{{old('correoElectronico', $correo->correoElectronico ??'')}}" tabindex="3">
                    </td>
					<td>
                        <button type="button" class="btn btn-danger delCorreos"><i class="fas fa-times-circle"></i></button>                        
                    </td>
				</tr>   
            @else
                @foreach ($data->correosElectronicos as $correo)                 
                <tr>
					<td>
                        <input list="tipoCorreo" type="text" name="tipoCorreo[]" class="form-control" placeholder="Tipo de Correo" value="{{old('tipoCorreo', $correo->tipoCorreo ??'')}}" tabindex="3">
                        <datalist id="tipoCorreo">
                            <option value="Personal"></option>
                            <option value="Del trabajo"></option>
                            <option value="Universitario"></option>
                        </datalist>
                    </td>
					<td>             
                        <input type="text" name="correoElectronico[]" class="form-control" id="correoElectronico" value="{{old('correoElectronico', $correo->correoElectronico ??'')}}" tabindex="3">
                    </td>
					<td>
                        <button type="button" class="btn btn-danger delCorreos"><i class="fas fa-times-circle"></i></button>                        
                    </td>
				</tr>
                @endforeach
            @endif        


				
			</tbody>
        </table>      
        
    </div>    
</div>






  



