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
     * Funcion para añadir una nueva fila en la tabla Telefonos
     */
    $("#addAdjuntos").click(function(){
        var nuevaFila=
        "<tr>\
            <td>\
                <input type='file' name='url[]' value='escojer archivo'>\
            </td>\
            <td>\
                <button type='button' class='btn btn-danger delAdjuntos'><i class='fas fa-times-circle'></i></button>\
            </td>\
        </tr>";
        $("#tablaAdjuntos tbody").append(nuevaFila);
    });

    // evento para eliminar la fila
    $("#tablaAdjuntos").on("click", ".delAdjuntos", function(){
        $(this).parents("tr").remove();
    });
});



