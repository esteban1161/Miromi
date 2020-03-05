
@extends("theme.$theme.layout")

@section('titulo')
    Crear Roles
@endsection   

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

@section('contenido')
    <div class="row">        
        <div class="col-lg 12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card card-danger">
                <div class="card-header with-border">
                    <h3 class="card-title">Roles</h3>                            
                </div>
                <div class="card-tolls">
                    <a href="{{route('rol.create')}}" class="btn btn-block btn-info btn-sm">
                        <i class=""></i> Crear Rol
                    </a>
                </div>
                

                    {{-- @foreach ( $datas as $data)
                    <tr>
                        <td>{{$data->nombre}}</td>
                        <td></td>        
                    </tr>                    
                    @endforeach             --}}
            </div>

        </div>

    </div>

@endsection 