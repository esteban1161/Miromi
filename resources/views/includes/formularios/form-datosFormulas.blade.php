<table id="tablaFormulas">
    <tbody id="row1">
        <tr>
            <td WIDTH="85%">
                <label for="prescripcion">Prescipcion</label>
                <input type="text" name="prescripcion[]" id="prescripcion1" class="form-control"> 
            </td>
            <td WIDTH="10%">    
                <label for="cantidad">Cantidad</label>                 
                <input type="text" name="cantidad[]" id="cantidad1" class="form-control">                                    
            </td>      
            <td WIDTH="5%">
                <button id="addFormulas" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button>
            </td>                          
        </tr>
        <tr>
            <td colspan="3">
                <label for="observaciones">Observaciones</label>
                <textarea name="observaciones[]" id="observaciones1" class="form-control" rows="2"></textarea>       
            </td>
        </tr>
    </tbody>
</table>