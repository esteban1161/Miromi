<div class="form-group row">
    <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre</label>
        <div class="col-lg-8">
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre', $data->nombre ?? '')}}" required>
        </div>
</div>

<div class="form-group row">
    <label for="usuario" class="col-lg-3 col-form-label requerido">Usuario</label>
        <div class="col-lg-8">
            <input type="text" name="usuario" class="form-control" id="usuario" value="{{old('usuario', $data->usuario ?? '')}}" required>
        </div>
</div>

<div class="form-group row">
    <label for="email" class="col-lg-3 col-form-label requerido">Email</label>
        <div class="col-lg-8">
            <input type="email" name="email" class="form-control" id="email" value="{{old('email', $data->email ?? '')}}" required>
        </div>
</div>

<div class="form-group row">
<label for="password" class="col-lg-3 col-form-label {{!isset($data) ? 'requerido' : ' '}}">Contraseña</label>
        <div class="col-lg-8">
            <input type="password" name="password" class="form-control" id="password" value=""{{!isset($data) ? 'requerido' : ''}} minlength="5">
        </div>
</div>

<div class="form-group row">
    <label for="re_password" class="col-lg-3 col-form-label {{!isset($data) ? 'requerido' : ' '}}">Repetir Contraseña</label>
        <div class="col-lg-8">
            <input type="password" name="re_password" class="form-control" id="re_password" value=""{{!isset($data) ? 'requerido' : ''}} minlength="5"    >
        </div>
</div>
<div class="form-group row">
    <label for="rol_id" class="col-lg-3 control-label requerido">Rol</label>
    <div class="col-lg-8">
        <select name="rol_id[]" id="rol_id" class="form-control" multiple required>
            <option value="">...Selecionar Rol...</option>
            @foreach($rols as $id => $nombre)
            <option value="{{$id}}" 
                    {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : ' ')  : 
                    (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : ' ')}}
            >
                {{$nombre}} 
            </option>
            @endforeach
        </select>
    </div>
</div>