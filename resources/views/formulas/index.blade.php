@extends("theme.$theme.layout")

@section('titulo')
    Formulas
@endsection   

@section('styles')
    
@endsection    

@section('scriptsPlugins')
@endsection

@section('scripts')     
    <script src="{{asset("assets/pages/scripts/admin/forms-dinamicos/index.js")}}" type="text/javascript"></script>

@endsection

@section('contenido')   
<!-- Main content -->

<section class="content-header">
    <div class="container-fluid">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Prescipciones</h1>
            </div>
            <div class="row col-sm-3 card-tolls">  

            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid"> 
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Formulas</h3>                
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">@include('includes.formularios.form-datosFormulas')</div>    
            <div class="card-footer">    
                <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>              
            </div>
        </div>
        
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Recomendacion</h3>                
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">@include('includes.formularios.form-datosRecomendaciones') </div>
            <div class="card-footer">    
                <div class="col-lg-6">    @include('includes.boton-form-crear')    </div>              
            </div>
        </div>  
    </div>
</section>
  
@endsection



  
