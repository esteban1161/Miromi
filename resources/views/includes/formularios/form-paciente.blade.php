<div class="form-group row">
    <label for="nombre" class="col-lg-3 col-form-label requerido">Nombres</label>
        <div class="col-lg-8">
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre', $data->nombre ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="apellidos" class="col-lg-3 col-form-label requerido">Apellidos</label>
        <div class="col-lg-8">
            <input type="text" name="apellidos" class="form-control" id="apellidos" value="{{old('apellidos', $data->apellidos ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="edad" class="col-lg-3 col-form-label requerido">Edad</label>
        <div class="col-lg-8">
            <input type="text" name="edad" class="form-control" id="edad" value="{{old('edad', $data->edad ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="descripcion" class="col-lg-3 col-form-label requerido">Descripcion</label>
        <div class="col-lg-8">
            <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{old('descripcion', $data->descripcion ?? '')}}" required>
        </div>
</div>