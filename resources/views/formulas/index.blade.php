@extends("theme.$theme.layout")

@section('titulo')
    Formulas
@endsection   

@section('styles')
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
    <link href="" rel="stylesheet">
    
@endsection    

@section('scriptsPlugins')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="{{asset("assets/js/easy-autocomplete/dist/jquery.easy-autocomplete.min.js")}}"></script>

@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/forms-dinamicos/index.js")}}" type="text/javascript"></script>
    <script type="text/javascript">
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script> 

<script>
    $(document).ready(function(){
        $("#pais").change(function(){
            var pais_id = $(this).val();
            $.get('ciudadPorPais/'+pais_id, function(data){
    //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
            console.log(data);
                var ciudad_select = '<option value="">Seleccione CIudad</option>'
                for (var i=0; i<data.length;i++)
                    ciudad_select+='<option value="'+data[i].id+'">'+data[i].nombreCiudad+'</option>';
    
                $("#ciudad").html(ciudad_select);
    
            });
        });
    });
  </script>

@endsection

@section('contenido')   
<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Hacer formulas</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">      
        <div>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Formulas</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body"> 
                    <select name="pais" id="pais" class="js-example-basic-single form-control">
                        <option value="">--Pais--</option>
                        @foreach($paises as $pais)
                            <option value="{{$pais->id}}">{{$pais->nombrePais}}</option>
                        @endforeach 
                    </select><br><br>

                    <select name="ciudad" id="ciudad" class="js-example-basic-single form-control">
                        <option value="">Seleccione ciudad</option>
                    </select>



                    {{-- <table id="tablaFormulas" class="table table-condensed">
                        <thead>
                            <tr >
                                <th WIDTH="60%">Diagnostico</th>
                                <th WIDTH="30%">Tipo Diagnostico</th>
                                <th WIDTH="10%">Mas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >
                                    <select name="formula" id="position" class="js-example-basic-single form-control "  style="width: 100%;">
                                        <option value="">Dolex</option>
                                        <option value="">Acetaminofen</option>
                                        <option value="">Noxpirin</option>
                                        @foreach($paises as $id => $nombrePais)
                                            <option value="{{$id}} ">
                                                {{$nombrePais}}
                                            </option>
                                        @endforeach 
                                        @foreach($paises as $pais)
                                            <option value="{{$pais->id}}">{{$pais->nombrePais}}</option>
                                        @endforeach 
                                    </select>
                                </td>
                                <td>                     
                                    <input type="text" name="duracion" class="form-control">                                    
                                </td>      
                                <td>
                                    <button id="addFormulas" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button>
                                </td>                          
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="formula2" class="form-control">
                                </td>
                                <td>        
                                    <input type="text" name="duracion2" class="form-control">
                                </td>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <textarea name="" id="basics" cols="30" rows="10"></textarea>
 --}}
                </div>               
                <div class="card-footer">    
                    <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>              
                </div>
            </div>
        </div>
    </div>
</section>

  
@endsection



  


  
</body>
</html>