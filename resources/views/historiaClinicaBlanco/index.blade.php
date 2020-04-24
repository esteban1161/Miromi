@extends("theme.$theme.layout")

@section('titulo')
    Sistema Usuarios
@endsection   

@section('styles')
@endsection    

@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/ckeditor/ckeditor.js")}}"></script>
@endsection

@section('scripts')
    <script src="{{ asset("assets/pages/scripts/admin/editor/index.js")}}"></script>    
    <script src="{{ asset("assets/pages/scripts/admin/autocomplete/index.js")}}"></script>    
@endsection

@section('contenido')   
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"> Historias Clinicas en Blanco</h3>
                </div>
            <!-- /.box-header -->
                <div class="box-body pad">
                    <form>
                        <textarea id="editor1" name="editor1" rows="10" cols="80">
                            
                        </textarea>

                    </form>
                </div>
            </div>
        <!-- /.box -->       
        </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
</section>
  <!-- /.content -->

  
@endsection
