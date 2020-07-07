@extends("theme.$theme.layout")

@section('titulo')
    Procedimientos - Pacientes
@endsection   

@section('styles')
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}">
@endsection
    
@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/datatables/jquery.dataTables.js")}}"></script>
    <script src="{{ asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}"></script>
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/tablas/index.js")}}" type="text/javascript"></script>
    {{-- <script type="text/javascript"> 
        $(document).ready(function()
        {
            $("#terapeuta").change(function(){
                alert("El terapeuta cambio.");

                var terapeuta_id = $(this).val();
                $.get('paciente/auxiliarPacientes/'+terapeuta_id, function(data){
                //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
                alert("El terapeuta cambio2.");
                    console.log(data);
                        var terapeuta_tabla
                        for (var i=0; i<data.length;i++)
                            terapeuta_tabla+=
                            '<tr>'+
                                '<td>'+
                                    data[i].identificacion.primerNombre+
                                '</td>'+
                            '</tr>';
                        $("#tPacientes tbody").html(terapeuta_tabla);

                });

               
           });
        });
    </script> --}}
@endsection

@section('contenido')

<section class="content-header">
    <div class="container-fluid">
        @include('includes.mensaje')      
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Procedimientos - Lista Pacientes </h1>
            </div>
                      
        </div><!-- /.container-fluid -->
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <form action="{{route('procedimientosE.show')}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="card card-info ">
                <div class="card-header">
                    
                </div>
            
                <div class="card-body">
                    <div class="form-group">
                        <label for="terapeuta">Terapeuta</label>
                        <select name="terapeuta" id="terapeuta" class="form-control" tabindex="8">
                            @foreach ($terapeutas as $item)
                                <option value="{{$item->usuario_id}}">{{$item->identificacion->primerNombre}} {{$item->identificacion->segundoNombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-footer">    
                    <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>              
                </div>
            </div>      
        </form>
    </div>
</section>

@endsection
