<table id="tablaDiagnosticos" class="">
    <h6>*Si desea obtener RIPS, por favor verifique que su diagnostico tenga un código* </h6>

    @if ($eventos == [0])
    <tbody id="row1">
        <tr>
            <td WIDTH="60%">
                <label for="cie10s_id">Diagnostico</label>
                <input type="text" name="cie10_Desc[]" class="form-control" id="cie10_Desc1" tabindex="5">        
            </td>
            <td WIDTH="20%">
                <label for="cie10_cod1">Codigo</label>
                <input type="text" name="cie10_cod[]" class="form-control" id="cie10_cod1" tabindex="5"> 
            </td>
            <td WIDTH="15%">
                <label for="tipoDiagnostico">Tipo Diagnostico</label>                 
                <select name="tipoDiagnostico[]" id="tipoDiagnostico1" class="form-control" tabindex="5">
                    <option value="">...Seleccionar...</option>
                    <option value="1" {{ old('tipoDiagnostico',  $eventos->consulta->tipoDiagnostico ?? '') == '1' ? 'selected' : ' ' }}>Impresión Diagnostica</option>
                    <option value="2" {{ old('tipoDiagnostico',  $eventos->consulta->tipoDiagnostico ?? '') == '2' ? 'selected' : ' ' }}>Confrimado Nuevo</option>
                    <option value="3" {{ old('tipoDiagnostico',  $eventos->consulta->tipoDiagnostico ?? '') == '3' ? 'selected' : ' ' }}>Confirmado Repetido</option>
                </select>                                     
            </td>      
            <td WIDTH="5%">
                <button id="addDiagnosticos" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button>
            </td>                          
        </tr>
        <tr>
            <td colspan="3">
                <label for="observacionesDx">Observaciones</label>
                <textarea name="observacionesDx[]" id="observacionesDx1" class="form-control" rows="2" tabindex="5"></textarea>       
            </td>
        </tr>
    </tbody>

    @else
        @foreach ($eventos->diagnosticos as $diagnostico)
            <tbody id="row1">
                <tr>
                    <td WIDTH="60%">
                        <label for="cie10s_id">Diagnostico</label>
                    <input type="text" name="cie10_Desc[]" class="form-control" id="cie10_Desc1" tabindex="5" value="{{old('cie10_Desc', $diagnostico->cie10_Desc ??'')}}">                     
                    </td>
                    <td WIDTH="20%">
                        <label for="cie10_cod1">Codigo</label>
                        <input type="text" name="cie10_cod[]" class="form-control" id="cie10_cod1" tabindex="5" value="{{old('cie10_cod', $diagnostico->cie10_cod ??'')}}"> 
                    </td>
                    <td WIDTH="15%">
                        <label for="tipoDiagnostico">Tipo Diagnostico</label>                 
                        <select name="tipoDiagnostico[]" id="tipoDiagnostico1" class="form-control" tabindex="5">
                            <option value="">...Seleccionar...</option>
                            <option value="1" {{ old('tipoDiagnostico',  $diagnostico->tipoDiagnostico ?? '') == '1' ? 'selected' : ' ' }}>Impresión Diagnostica</option>
                            <option value="2" {{ old('tipoDiagnostico',  $diagnostico->tipoDiagnostico ?? '') == '2' ? 'selected' : ' ' }}>Confrimado Nuevo</option>
                            <option value="3" {{ old('tipoDiagnostico',  $diagnostico->tipoDiagnostico ?? '') == '3' ? 'selected' : ' ' }}>Confirmado Repetido</option>
                        </select>                                     
                    </td>      
                    <td WIDTH="5%">
                        <button id="addDiagnosticos" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button>
                    </td>                          
                </tr>
                <tr>
                    <td colspan="3">
                        <label for="observacionesDx">Observaciones</label>
                        <textarea name="observacionesDx[]" id="observacionesDx1" class="form-control" rows="2" tabindex="5">
                            {{old('observacionesDx', $diagnostico->observacionesDx ?? '')}}
                        </textarea>       
                    </td>
                </tr>
            </tbody>
        @endforeach
    @endif    
</table>