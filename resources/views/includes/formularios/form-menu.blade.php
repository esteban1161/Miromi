<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="nombre" class="requerido">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre', $data->nombre ?? ' ')}}" required>
        </div>
        <div class="form-group">
            <label for="url" class="requerido">Url</label>
            <input type="text" name="url" class="form-control" id="url" value="{{old('url', $data->url ?? ' ')}}" required >
        </div>
        <div class="form-group">
            <label for="icono">Icono</label>
            <div class="row">
                <input type="text" name="icono" class="form-control col-lg-11" id="icono" value="{{old('icono', $data->icono ?? ' ')}}">                
                <div class="col-lg-1">
                    <span id="mostrar-icono" class="far {{old("icono")}}"></span>
                </div>
            </div>
        </div>
    </div>
</div>
