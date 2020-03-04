@extends("theme.$theme.layout")

@section('titulo')
    Crear Rol
@endsection

@section('contenido')
    <div class="row">
        
        <div class="col-lg 12">

            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3>Crear Rol</h3>
                </div>
                <form action="{{route('rol.store')}}" class="form-horizontal" method="POST" autocomplete="off">
                    @csrf
                        <div class="card-body">
                            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" id="nombre" class="form-control" id="nombre" value="{{old('nombre')}}">
                            </div>
                        </div>
                        <div class="card-footer">
                            @include('includes.boton-form-crear')
                        </div>
                </form>
            </div>

        </div>

    </div>

@endsection 
