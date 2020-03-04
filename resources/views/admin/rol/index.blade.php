@extends("theme.$theme.layout")

@section('titulo')
    Roles
@endsection   

@section('contenido')
    <div class="row">
        
        <div class="col-lg 12">

            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3>Roles</h3>
                </div>
                    @foreach ( $datas as $data)
                    <tr>
                        <td>{{$data->nombre}}</td>
                        <td></td>        
                    </tr>                    
                    @endforeach            
            </div>

        </div>

    </div>

@endsection 