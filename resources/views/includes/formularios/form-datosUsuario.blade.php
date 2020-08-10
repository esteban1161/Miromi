<div class="row">
    <div class="row col-md-12">    
        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre" class="requerido">Nombre</label>    
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre', $data->nombre ?? '')}}" required>
            </div>
            <div class="form-group">
                <label for="password" class="{{!isset($data) ? 'requerido' : ' '}}">Contraseña</label>
                <input type="password" name="password" class="form-control" id="password" value=""{{!isset($data) ? 'requerido' : ''}} minlength="5">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="usuario" class="requerido">Usuario</label>
                <input type="text" name="usuario" class="form-control" id="usuario" value="{{old('usuario', $data->usuario ?? '')}}" required>
            </div>
            <div class="form-group">
                <label for="re_password" class="{{!isset($data) ? 'requerido' : ' '}}">Repetir Contraseña</label>
                <input type="password" name="re_password" class="form-control" id="re_password" value=""{{!isset($data) ? 'requerido' : ''}} minlength="5"    >
            </div>
        </div>
        <div class="col-md-12">    
                <div class="form-group">
                    <label for="email" class="requerido">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{old('email', $data->email ?? '')}}" required>
                </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="rol_id" class="requerido">Rol</label>
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
        <div class="col-md-6">
            <div class="form-group">
                <label for="formulario_id" class="requerido">Formularios</label>
                <select name="formulario_id[]" id="formulario_id" class="form-control" multiple required>
                    <option value="">...Selecionar Formularios...</option>   
                    @foreach($formularios as $id => $nombre) 
                    <option value="{{$id}}" 
                            {{is_array(old('formulario_id')) ? (in_array($id, old('formulario_id')) ? 'selected' : ' ')  : 
                            (isset($data) ? ($data->formularios->firstWhere('id', $id) ? 'selected' : '') : ' ')}}
                    >
                        {{$nombre}} 
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="usuario_id" class="requerido">Terapeutas</label>
                <select name="usuario_id[]" id="usuario_id" class="form-control" multiple required>
                    <option value="">...Selecionar Terapeutas...</option>   
                    @foreach($usuarios as $id => $nombre) 
                    
                    <option value="{{$id}}" 
                            {{is_array(old('usuario_id')) ? (in_array($id, old('usuario_id')) ? 'selected' : ' ')  : 
                            (isset($data) ? ($data->usuarios->firstWhere('id', $id) ? 'selected' : '') : ' ')}}
                    >
                        {{$nombre}} 
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>









