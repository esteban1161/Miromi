$(document).ready(function(){
    $("#pais").change(function(){
        var pais_id = $(this).val();
        $.get('ciudadPorPais/'+pais_id, function(data){
        //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
            var ciudad_select = '<option value="">...Seleccione Ciudad...</option>'
            for (var i=0; i<data.length;i++)
                // ciudad_select+='<option value="'+data[i].id+'">'+data[i].nombreCiudad+'</option>';
                ciudad_select+='<option value="'+data[i].nombreCiudad+'"></option>';
            $("#ciudad").html(ciudad_select);

        });
    });
});