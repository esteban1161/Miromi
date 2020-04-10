@extends("theme.$theme.layout")

@section('titulo')
    Terapeuta
@endsection   
@section('contenido')

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lista Terapeutas</h3>
                </div>
                <div class="card-tolls">
                    <a href="{{route('paciente.create')}}" class="btn btn-block btn-info btn-sm">
                        <i class=""></i> Crear Terapeuta
                    </a>
                </div>
                <div class="card-body table-responsive p-0">
                </div>
            </div>
        </div>
    </div>


@endsection
