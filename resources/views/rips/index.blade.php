@extends("theme.$theme.layout")

@section('titulo')
    RIPS
@endsection   

@section('styles')

@endsection
    
@section('scriptsPlugins')

@endsection

@section('scripts')
    {{-- <script type="text/javascript"> 
        $(document).ready(function()
        {
           $("#fechaInicio").change(function(){
                alert("La Fecha cambio.");
                var fecha1 = $("#fechaInicio").val();
                var fecha2 = $("#fechaFin").val();
                $.get('fecha/',{fecha1 ,fecha2 } , function(data){
                    alert("La Fecha cambio.");
                });
           });
        });
    </script> --}}
@endsection

@section('contenido')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>RIPS</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">     
        <form action="{{route('rips.fecha')}}" class="form-horizontal" id="form-general" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
            <div class="card card-info ">
                <div class="card-header">
                    
                </div>
            
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="fechaInicio">Fecha de Inicio</label>
                            <div class="input-group col-lg-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                                </div>
                                <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="fechaFin">Fecha de Fin</label>
                            <div class="input-group col-lg-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                                </div>
                                <input  type="date" class="form-control" id="fechaFin" name="fechaFin" value="{{$date}}">
                            </div>
                        </div>
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