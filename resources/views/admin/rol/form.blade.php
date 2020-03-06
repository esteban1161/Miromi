<div class="form-group row">
    <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre</label>
        <div class="col-lg-7">
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre', $data->nombre ?? ' ')}}" required>
        </div>
</div>