$(document).ready(function(){
    $("#paisN").change(function(){
        var pais_id = $(this).val();
        $.get('ciudadPorPais/'+pais_id, function(data){
        //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
            var ciudad_select = '<option value="">...Seleccione Ciudad...</option>'
            for (var i=0; i<data.length;i++)
                // ciudad_select+='<option value="'+data[i].id+'">'+data[i].nombreCiudad+'</option>';
                ciudad_select+='<option value="'+data[i].nombreCiudad+'"></option>';
            $("#ciudadN").html(ciudad_select);

        }); 
    });
});

/* $(document).ready(function(){
    $("#paisR").change(function(){
        var pais_id = $(this).val();
        $.get('ciudadPorPais/'+pais_id, function(data){
        //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
            var ciudad_select = '<option value="">...Seleccione Ciudad...</option>'
            for (var i=0; i<data.length;i++)
                // ciudad_select+='<option value="'+data[i].id+'">'+data[i].nombreCiudad+'</option>';
                ciudad_select+='<option value="'+data[i].nombreCiudad+'"></option>';
            $("#ciudadR").html(ciudad_select);

        }); 
    });
}); */