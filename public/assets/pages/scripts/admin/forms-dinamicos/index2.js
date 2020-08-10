$(document).ready(function(){
    var pos=1;
    var options = {
        url:  'http://miromi.test/paciente/historiaClinica/recomendacion',

        getValue: "recomendacion",  
        list: {
            sort: {
                enabled: true
            },
            match: {
                enabled: true
            },
            onSelectItemEvent: function() {
                var value = $("#recomendacion1").getSelectedItemData().descripcion;
                $("#descripcion1").val(value).trigger("change");
            }
        }          
    };

    $('#addRecomendacion').button().on({click: function(){

        pos++;
        $('#tablaRecomendacion').append(
            '<tbody  id="row'+pos+'">'+
                '<tr>'+
                    '<td WIDTH="95%">'+
                        '<label for="recomendacion">Recomendacion</label>'+
                        '<input type="text" name="recomendacion[]" id="recomendacion'+pos+'" class="form-control">'+ 
                    '</td>'+
                    
                    '<td WIDTH="5%">'+
                        '<button id="delRecomendacion'+pos+'" data-id="'+pos+'" type="button" class="btn btn-danger"> <i class="fas fa-times-circle"></i></button>'+
                    '</td>'+   
                '</tr>'+
                '<tr>'+
                    '<td colspan="3">'+
                        '<label for="descripcion">Descripcion</label>'+
                        '<textarea class="form-control" name="descripcion[]" id="descripcion'+pos+'" rows="1"></textarea>'+       
                    '</td>'+
                '</tr>'+
            '</tbody>'
        );
        var options = {
            url:  'http://miromi.test/paciente/historiaClinica/recomendacion',

            getValue: "recomendacion",  
            list: {
                sort: {
                    enabled: true
                },
                match: {
                    enabled: true
                },
                onSelectItemEvent: function() {
                    var value = $("#recomendacion"+pos).getSelectedItemData().descripcion;
                    $("#descripcion"+pos).val(value).trigger("change");
                }
            }          
        };
        $( "#recomendacion" + pos).easyAutocomplete(options);
        $('#delRecomendacion'+pos)
            .button()
            .on({
                click: function(){
                    var id = $(this).attr('data-id');
                    $('#row'+id).remove();
                }
            });                    
        }
    });
    
    $( "#recomendacion1" ).easyAutocomplete(options);
    
});


$(document).ready(function(){
    var pos=1;
    var options = {
        url: 'http://miromi.test/paciente/historiaClinica/formulas',

        getValue: "prescripcion",  
        list: {
            sort: {
                enabled: true
            },
            match: {
                enabled: true
            },
            onSelectItemEvent: function() {
                var value = $("#prescripcion1").getSelectedItemData().cantidad;
                var value1 = $("#prescripcion1").getSelectedItemData().observaciones;
                $("#cantidad1").val(value).trigger("change");
                $("#observaciones1").val(value1).trigger("change");
            }
        }          
    };

    $('#addFormulas').button().on({click: function(){

        pos++;
        $('#tablaFormulas').append(
            '<tbody id="row'+pos+'">'+
                '<tr>'+
                    '<td WIDTH="85%">'+
                        '<label for="prescripcion">Prescipcion</label>'+
                        '<input type="text" name="prescripcion[]" id="prescripcion'+pos+'" class="form-control">'+ 
                    '</td>'+
                    '<td WIDTH="10%">'+    
                        '<label for="cantidad">Cantidad</label>'+                 
                        '<input type="text" name="cantidad[]" id="cantidad'+pos+'" class="form-control">'+                                    
                    '</td>'+      
                    '<td WIDTH="5%">'+
                        '<button id="delFormulas'+pos+'" data-id="'+pos+'" type="button" class="btn btn-danger"><i class="fas fa-times-circle"></i></button>'+
                    '</td>'+                          
                '</tr>'+
                '<tr>'+
                    '<td colspan="3">'+
                        '<label for="observaciones">Observaciones</label>'+
                        '<textarea name="observaciones[]" id="observaciones'+pos+'" class="form-control" rows="2"></textarea>'+       
                    '</td>'+
                '</tr>'+
            '</tbody>'    
        );
        
        var options = {
            url: 'http://miromi.test/paciente/historiaClinica/formulas',

            getValue: "prescripcion",  
            list: {
                sort: {
                    enabled: true
                },
                match: {
                    enabled: true
                },

                onSelectItemEvent: function() {

                    var value2 = $("#prescripcion"+ pos).getSelectedItemData().cantidad;
                    var value3 = $("#prescripcion"+pos).getSelectedItemData().observaciones;
                    $("#cantidad"+ pos).val(value2).trigger("change");                        
                    $("#observaciones"+ pos).val(value3).trigger("change");
                }
            }          
        };
        $( "#prescripcion" + pos).easyAutocomplete(options);
        $('#delFormulas'+pos)
            .button()
            .on({
                click: function(){
                    var id = $(this).attr('data-id');
                    $('#row'+id).remove();
                }
            });                    
        }
    });
    
    $( "#prescripcion1" ).easyAutocomplete(options);
    
});



$(document).ready(function(){
    var pos=1;
    var options = {
        url: 'http://miromi.test/paciente/historiaClinica/cie10',
        getValue: "descripcion",         
        list: {
            sort: {
                enabled: true
            },
            match: {
                enabled: true
            },
            onSelectItemEvent: function() {
                var value = $("#cie10_Desc1").getSelectedItemData().codigo;
                $("#cie10_cod1").val(value).trigger("change");
            }
        }      
    
    };

    $("#addDiagnosticos").click(function(){
        pos++;

        $("#tablaDiagnosticos").append(

            '<tbody id="row'+pos+'">'+
                '<tr>'+
                    '<td WIDTH="60%">'+
                        '<label for="cie10s_id">Diagnostico</label>'+
                        '<input type="text" name="cie10_Desc[]" class="form-control" id="cie10_Desc'+pos+'" tabindex="18">'+        
                    '</td>'+
                    '<td WIDTH="20%">'+
                        '<label for="cie10_cod1">Codigo</label>'+
                        '<input type="text" name="cie10_cod[]" class="form-control" id="cie10_cod'+pos+'" tabindex="18">'+ 
                    '</td>'+
                    '<td WIDTH="15%">'+
                        '<label for="tipoDiagnostico">Tipo Diagnostico</label>'+                 
                        '<select name="tipoDiagnostico[]" id="tipoDiagnostico'+pos+'" class="form-control" tabindex="55">'+
                            '<option value="">...Seleccionar...</option>'+
                            '<option value="1">Impresión Diagnostica</option>'+
                            '<option value="2">Confrimado Nuevo</option>'+
                            '<option value="3">Confirmado Repetido</option>'+
                        '</select>'+
                    '</td>'+
                    '<td WIDTH="5%">'+
                        '<button id="delDiagnosticos'+pos+'" data-id="'+pos+'" type="button" class="btn btn-danger"><i class="fas fa-times-circle"></i></button>'+
                    '</td>'+
                '</tr>'+
                '<tr>'+
                    '<td colspan="3">'+
                        '<label for="observacionesDx">Observaciones</label>'+
                        '<textarea name="observacionesDx[]" id="observacionesDx'+pos+'" class="form-control" rows="2"></textarea>'+       
                    '</td>'+
                '</tr>'+
            '</tbody>'
        );
        var options = {
            url: 'http://miromi.test/paciente/historiaClinica/cie10',

            getValue: "descripcion",  

            list: {
                onSelectItemEvent: function() {
                    var value = $('#cie10_Desc'+pos).getSelectedItemData().codigo;
                    $('#cie10_cod'+pos).val(value).trigger("change");
                }
            }
        };
        $('#cie10_Desc'+pos).easyAutocomplete(options);        

        $('#delDiagnosticos'+pos)
            .button()
            .on({
                click: function(){
                    var id = $(this).attr('data-id');
                    $('#row'+id).remove();
                }
            });               

        
    });
    $ ("#cie10_Desc1"). easyAutocomplete (options); 

});



var options = {
	url: 'http://miromi.test/paciente/historiaClinica/cie10',
	getValue: "descripcion", 
	// data: ["De apariencia normal", "Esta enfermo", "Tiene mocos", "Dolores", "No Informa sintomas", "etc"],
	
	list: {

		onSelectItemEvent: function() {
			var value = $("#cie10_Desc1").getSelectedItemData().codigo;
			$("#cie10_cod1").val(value).trigger("change");
		}
	}      

};
$ ("#cie10_Desc1"). easyAutocomplete (options); 


/* $(document).ready(function(){

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

    var pos=1;
    $("#addDiagnosticos").click(function(){
        
        var option = '';
        var cie10Array =  JSON.parse(JSON.stringify(cie10));
        cie10Array.forEach(element => { 
            option += '<option value='+ element['id']+'>'+element['codigo']+' - '+element['descripcion']+'</option>';
        });
        console.log(cie10Array);
        
        pos++;
        $("#tablaDiagnosticos").append(
            '<tbody id="row'+pos+'">'+
                '<tr>'+
                    '<td WIDTH="80%">'+
                        '<label for="cie10s_id">Diagnostico</label>'+
                        '<select id="cie10s_id'+pos+'" name="cie10s_id[]" class="form-control">'+                        
                            '<option value="">...Selecionar Diagnostico...</option>'+
                            option+
                        '</select>'+ 
                    '</td>'+
                    '<td WIDTH="15%">'+    
                        '<label for="tipoDiagnostico">Tipo Diagnostico</label>'+                 
                        '<select name="tipoDiagnostico[]" id="tipoDiagnostico'+pos+'" class="form-control">'+
                            '<option value="">...Seleccionar...</option>'+
                            '<option value="1">Impresión Diagnostica</option>'+
                            '<option value="2">Confrimado Nuevo</option>'+
                            '<option value="3">Confirmado Repetido</option>'+
                        '</select>'+                                     
                    '</td>'+      
                    '<td WIDTH="5%">'+
                        '<button id="delDiagnosticos'+pos+'" data-id="'+pos+'" type="button" class="btn btn-danger"><i class="fas fa-times-circle"></i></button>'+
                    '</td>'+       
                '</tr>'+
                '<tr>'+
                    '<td colspan="3">'+
                        '<label for="observacionesDx">Observaciones</label>'+
                        '<textarea name="observacionesDx[]" id="observacionesDx'+pos+'" class="form-control" rows="2"></textarea>'+       
                    '</td>'+
                '</tr>'+
            '</tbody>'
        );

        $('#cie10s_id' + pos).select2();        
        $('#delDiagnosticos'+pos)
            .button()
            .on({
                click: function(){
                    var id = $(this).attr('data-id');
                    $('#row'+id).remove();
                }
            });               

        
    });
    $('#cie10s_id1').select2();        

});
 */