<table id="tablaDiagnosticos" class="">
    <tbody id="row1">
        <tr>
            <td WIDTH="80%">
                <label for="cie10s_id">Diagnostico</label>
                <select id="cie10s_id1" name="cie10s_id[]" class="form-control" tabindex="54">                        
                    <option value="">...Selecionar Diagnostico...</option>
                    @foreach($cie10 as $diagnostico)
                    <option value="{{$diagnostico->id}}">
                        {{$diagnostico->codigo}} - {{$diagnostico->descripcion}}
                    </option>
                    @endforeach
                </select> 
            </td>
            <td WIDTH="15%">    
                <label for="tipoDiagnostico">Tipo Diagnostico</label>                 
                <select name="tipoDiagnostico[]" id="tipoDiagnostico1" class="form-control" tabindex="55">
                    <option value="">...Seleccionar...</option>
                    <option value="1">Impresión Diagnostica</option>
                    <option value="2">Confrimado Nuevo</option>
                    <option value="3">Confirmado Repetido</option>
                </select>                                     
            </td>      
            <td WIDTH="5%">
                <button id="addDiagnosticos" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button>
            </td>                          
        </tr>
        <tr>
            <td colspan="3">
                <label for="observacionesDx">Observaciones</label>
                <textarea name="observacionesDx[]" id="observacionesDx1" class="form-control" rows="2"></textarea>       
            </td>
        </tr>
    </tbody>
</table>