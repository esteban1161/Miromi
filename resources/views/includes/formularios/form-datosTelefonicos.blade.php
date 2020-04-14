<h2>Telefono(s) Personal(es)</h2>  
                        
<div class="form-group row">
    <label for="numeroTelefono" class="col-lg-3 col-form-label">Numero Telefono</label>
        <div class="col-lg-8">
            <input type="text" name="numeroTelefono" class="form-control" id="numeroTelefono" value="{{old('numeroTelefono', $data->telefonos->numeroTelefono ?? '')}}">
        </div>
</div>    

<div class="wrap">
    <label for="tipoTelefono" class="col-lg-3 col-form-label">Tipo de Telefono</label>
    <input list="tipoTelefono" name="tipoTelefono" type="text" placeholder="Escribe Tipo de Telefono" value="{{old('tipoTelefono', $data->telefonos->tipoTelefono ?? '')}}">
    <datalist id="tipoTelefono">
        <option value="Hogar"></option>
        <option value=""></option>
        <option value="Burdeos"></option>
        <option value="Caoba"></option>
        <option value="Marrón"></option>
        <option value="Naranja"></option>
        <option value="Verde"></option> {{--Hacer pruevas con la base de datos--}}
        @foreach($paises as $id => $nombrePais)
                <option value="{{$id}} "{{ old('paisNacimiento',  $data->demografico->paisNacimiento ?? '') == $id ? 'selected' : ' ' }}>
                    {{$nombrePais}}
                </option>
                @endforeach  
    </datalist>
    </div>

<button type="" class="btn btn-info">Agregar Telefono</button>