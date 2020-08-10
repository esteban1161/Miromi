<table id="tablaRecomendacion" class="table table-condensed">

    @if ($eventos == [0])
        <tbody>
            <tr>
                <td WIDTH="95%">
                    <label for="recomendacion">Recomendacion</label>
                    <input type="text" name="recomendacion[]" id="recomendacion1" class="form-control"> 
                </td>
                
                <td WIDTH="5%">
                    <button id="addRecomendacion" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button>
                </td>                          
            </tr>
            <tr>
                <td colspan="3">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" name="descripcion[]" id="descripcion1" rows="1"></textarea>       
                </td>
            </tr>
        </tbody>
    @else
            @foreach ($eventos->recomendaciones as $recomendacion)
                <tbody>
                    <tr>
                        <td WIDTH="95%">
                            <label for="recomendacion">Recomendacion</label>
                            <input type="text" name="recomendacion[]" id="recomendacion1" class="form-control" value="{{old('recomendacion', $recomendacion->recomendacion ?? '')}}"> 
                        </td>
                        
                        <td WIDTH="5%">
                            <button id="addRecomendacion" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button>
                        </td>                          
                    </tr>
                    <tr>
                        <td colspan="3">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" name="descripcion[]" id="descripcion1" rows="1">{{old('descripcion', $recomendacion->descripcion ?? '')}}</textarea>       
                        </td>
                    </tr>
                </tbody>
            @endforeach
    @endif

    
</table>