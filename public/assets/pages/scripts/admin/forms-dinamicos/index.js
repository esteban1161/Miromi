$(document).ready(function(){
    /**
        * Funcion para añadir una nueva fila en la tabla Correos Electronicos
        */
    $("#addCorreos").click(function(){
        var nuevaFila=
        "<tr>\
            <td>\
                <input list='tipoCorreo' type='text' name='tipoCorreo[]' class='form-control' placeholder='Tipo de Correo'>\
                <datalist id='tipoCorreo'>\
                    <option value='Personal'></option>\
                    <option value='Del trabajo'></option>\
                    <option value='Universitario'></option>\
                </datalist>\
            </td>\
            <td>\
                <input type='text' name='correoElectronico[]' class='form-control' id='correoElectronico'>\
            </td>\
            <td>\
                <button type='button' class='btn btn-danger delCorreos'><i class='fas fa-times-circle'></i></button>\
            </td>\
        </tr>";
        $("#tablaCorreos tbody").append(nuevaFila);
    });

    // evento para eliminar la fila
    $("#tablaCorreos").on("click", ".delCorreos", function(){
        $(this).parents("tr").remove();
    });
});

$(document).ready(function(){
    /**
     * Funcion para añadir una nueva fila en la tabla Telefonos
     */
    $("#addTelefonos").click(function(){
        var nuevaFila=
        "<tr>\
            <td>\
                <input list='tipoTelefono' name='tipoTelefono[]' type='text' class='form-control' placeholder='Tipo de Telefono'>\
                <datalist id='tipoTelefono'>\
                    <option value='Hogar'></option>\
                    <option value='Celular'></option>\
                    <option value='Oficina'></option>\
                    <option value='Consultorio'></option>\
                </datalist>\
            </td>\
            <td>\
                <input type='text' name='numeroTelefono[]' class='form-control' id='numeroTelefono'>\
            </td>\
            <td>\
                <button type='button' class='btn btn-danger delTelefonos'><i class='fas fa-times-circle'></i></button>\
            </td>\
        </tr>";
        $("#tablaTelefonos tbody").append(nuevaFila);
    });

    // evento para eliminar la fila
    $("#tablaTelefonos").on("click", ".delTelefonos", function(){
        $(this).parents("tr").remove();
    });
});

$(document).ready(function(){
    /**
     * Funcion para añadir una nueva fila en la tabla Correos Electronicos
     */
    $("#addAcademico").click(function(){
        var nuevaFila=
        "<tr>\
            <td>\
                <input type='text' name='numeroRegistroProfesional[]' class='form-control' id='numeroRegistroProfesional'>\
            </td>\
            <td>\
                <input list='tituloAcademico' name='tituloAcademico[]' type='text' class='form-control' placeholder='Escribe Titulo academico'>\
            </td>\
            <td>\
                <input type='text' name='institucion[]' class='form-control' id='institucion'>\
            </td>\
            <td>\
                <button type='button' class='btn btn-danger delAcademico'><i class='fas fa-times-circle'></i></button>\
            </td>\
        </tr>";
        $("#tablaAcademico tbody").append(nuevaFila);
    });

    // evento para eliminar la fila
    $("#tablaAcademico").on("click", ".delAcademico", function(){
        $(this).parents("tr").remove();
    });
});

$(document).ready(function(){
    /**
     * Funcion para añadir una nueva fila en la tabla Correos Electronicos
     */
    $("#addConsultorios").click(function(){
        var nuevaFila=
        "<tr>\
            <td>\
                <input type='text' name='nombreConsultorio[]' class='form-control' id='nombreConsultorio'>\
            </td>\
            <td>\
                <input type='text' name='direccionConsultorio[]' class='form-control' id='direccionConsultorio'>\
            </td>\
            <td>\
                <input type='text' name='paginaWebConsultorio[]' class='form-control' id='paginaWebConsultorio'>\
            </td>\
            <td>\
                <input type='text' name='codigoSecretaria[]' class='form-control' id='codigoSecretaria'>\
            </td>\
            <td>\
                <input type='text' name='nitConsultorio[]' class='form-control' id='nitConsultorio'>\
            </td>\
            <td>\
                <button type='button' class='btn btn-danger delConsultorios'><i class='fas fa-times-circle'></i></button>\
            </td>\
        </tr>";
        $("#tablaConsultorios tbody").append(nuevaFila);
    });

    // evento para eliminar la fila
    $("#tablaConsultorios").on("click", ".delConsultorios", function(){
        $(this).parents("tr").remove();
    });
});

$(document).ready(function(){
    /**
     * Funcion para añadir una nueva fila en la tabla Correos Electronicos
     */
    var cantidadDeFilasEnLaTabla = $('#tablaFormulas >tbody').length;
    var i = cantidadDeFilasEnLaTabla ? cantidadDeFilasEnLaTabla: 0;  
    var cie10 = [];


    $.ajax({
		url: 'http://miromi.test/cie10',
		type: 'GET',
		dataType: 'JSON',
		success:function(data){
            cie10 = data;
		},
		error:function(e){
			console.log("Error cie10", e);
		}
	});    

    $("#addDiagnosticos").click(function(){
        ++i;
        var option = '';
        var cie10Array =  JSON.parse(JSON.stringify(cie10));
        cie10Array.forEach(element => {
            option += '<option value='+ element['id']+'>'+element['codigo']+' - '+element['descripcion']+'</option>';
        });
        console.log(cie10Array);

        $("#tablaDiagnosticos tbody").append(
        '<tr>'+
        '<td>'+
            '<select name="cie10s_id[]" id="cie10s_id_'+i+'" class="form-control select2" tabindex="54">'+
                '<option value="">...Seleccionar tipo de Diagnostico...</option>'+
                option+                
            '</select>'+
        '</td>'+
        '<td>'+
            '<select name="tipoDiagnostico[]" id="tipoDiagnostico" class="form-control " tabindex="55">'+
                '<option value="">...Seleccionar tipo de Diagnostico...</option>'+
                '<option value="1">Impresión Diagnostica</option>'+
                '<option value="2">Confrimado Nuevo</option>'+
                '<option value="3">Confirmado Repetido</option>'+
                
            '</select>'+
        '</td>'+
        '<td>'+
                '<button type="button" class="btn btn-danger delDiagnosticos"><i class="fas fa-times-circle"></i></button>'+
            '</td>'+
        '</tr>'
        );
        $('#cie10s_id_' + i).select2();
    });

    // evento para eliminar la fila
    $("#tablaDiagnosticos").on("click", ".delDiagnosticos", function(){
        $(this).parents("tr").remove();
    });
});

$(document).ready(function(){
    /**
     * Funcion para añadir una nueva fila en la tabla Correos Electronicos
     */
    var cantidadDeFilasEnLaTabla = $('#tablaFormulas >tbody').length;
    var i = cantidadDeFilasEnLaTabla ? cantidadDeFilasEnLaTabla: 0;  
    var paises = [];

    //Peticion ajax que obtiene los paises
    $.ajax({
		url: 'http://miromi.test/paises',
		type: 'GET',
		dataType: 'JSON',
		success:function(data){
            paises = data;
		},
		error:function(e){
			console.log("Error paises ", e);
		}
	});

    $("#addFormulas").click(function(){
        ++i;
        var option = '';
        var  paisesArray =  JSON.parse(JSON.stringify(paises));
        paisesArray.forEach(element => {
            option += '<option value='+ element['nombrePais']+'">'+ element['nombrePais']+'</option>';
        });
        console.log(paisesArray);
        $("#tablaFormulas").append( 
        '<tbody>'+
            '<tr>'+
                '<td >'+
                    '<select name="formula['+i+']" id="position_'+i+'" class="form-control select2">'+
                        '<option value="">Dolex</option>'+
                        '<option value="">Acetaminofen</option>'+
                        '<option value="">Noxpirin</option>' +
                        option
                        +
                    '</select>'+
                '</td>'+
                '<td>'+                     
                    '<input type="text" name="duracion" class="form-control">'+
                '</td>'+     
                '<td>'+
                    '<button type="button" class="btn btn-danger delFormulas"><i class="fas fa-times-circle"></i></button>'+
                '</td>'+                         
            '</tr>'+
            '<tr>'+
                '<td>'+
                    '<input type="text" name="valorConsulta" class="form-control">'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="valorConsulta" class="form-control">'+
                '</td>'+
            '</tr>'+
        '</tbody>'
        );
        $('#position_' + i).select2();  
    });

    // evento para eliminar la fila
    $("#tablaFormulas").on("click", ".delFormulas", function(){
        $(this).parents('tbody', 'tr').remove();
    });
});


