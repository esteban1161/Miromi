<h2>Datos Demográficos</h2> 
<div class="form-group row">
    <label for="paisNacimiento" class="col-lg-3 col-form-label requerido">Pais Nacimiento</label>
        <div class="col-lg-8">
            <input type="text" name="paisNacimiento" class="form-control" id="paisNacimiento" value="{{old('paisNacimiento', $data->paisNacimiento ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="ciudadNacimiento" class="col-lg-3 col-form-label requerido">Ciudad Nacimiento</label>
        <div class="col-lg-8">
            <input type="text" name="ciudadNacimiento" class="form-control" id="ciudadNacimiento" value="{{old('ciudadNacimiento', $data->ciudadNacimiento ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="primerNombre" class="col-lg-3 col-form-label requerido">Primer Nombre</label>
        <div class="col-lg-8">
            <input type="text" name="primerNombre" class="form-control" id="primerNombre" value="{{old('primerNombre', $data->primerNombre ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="estadoCivil" class="col-lg-3 col-form-label requerido">Estado Civil</label>
    <select name="estadoCivil" id="estadoCivil" class="col-lg-8">
        <option value="">...Selecionar Estado Civil...</option>
        <option value="S">Soltero(a)</option>
        <option value="C">Casado(a)</option>
        <option value="UL">Union Libre</option>
        <option value="V">Viudo(a)</option>
        <option value="SE">Separado(a)</option>
    </select>
</div>
<div class="form-group row">
    <label for="escolaridad" class="col-lg-3 col-form-label requerido">Escolaridad</label>
    <select name="escolaridad" id="escolaridad" class="col-lg-8">
        <option value="">...Selecionar Escolaridad...</option>
        <option value="P">Primaria</option>
        <option value="S">Secundaria</option>
        <option value="T">Tecnica</option>
        <option value="PR">Profesional</option>
        <option value="PO">Postgrado</option>
        <option value="O">Otro</option>
    </select>
</div>
<div class="form-group row">
    <label for="ocupacion" class="col-lg-3 col-form-label requerido">Ocupacion</label>
        <div class="col-lg-8">
            <input type="text" name="ocupacion" class="form-control" id="ocupacion" value="{{old('ocupacion', $data->ocupacion ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="credoReligioso" class="col-lg-3 col-form-label requerido">Credo Religioso</label>
        <div class="col-lg-8">
            <input type="text" name="credoReligioso" class="form-control" id="credoReligioso" value="{{old('credoReligioso', $data->credoReligioso ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="paisRecidencia" class="col-lg-3 col-form-label requerido">Pais Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="paisRecidencia" class="form-control" id="paisRecidencia" value="{{old('paisRecidencia', $data->paisRecidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="departamentoResidencia" class="col-lg-3 col-form-label requerido">Departamento Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="departamentoResidencia" class="form-control" id="departamentoResidencia" value="{{old('departamentoResidencia', $data->departamentoResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="ciudadResidencia" class="col-lg-3 col-form-label requerido">Ciudad Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="ciudadResidencia" class="form-control" id="ciudadResidencia" value="{{old('ciudadResidencia', $data->ciudadResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="localidadResidencia" class="col-lg-3 col-form-label requerido">Localidad Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="localidadResidencia" class="form-control" id="localidadResidencia" value="{{old('localidadResidencia', $data->localidadResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="direccionResidencia" class="col-lg-3 col-form-label requerido">Direccion Residencia</label>
        <div class="col-lg-8">
            <input type="text" name="direccionResidencia" class="form-control" id="direccionResidencia" value="{{old('direccionResidencia', $data->direccionResidencia ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="primerNombre" class="col-lg-3 col-form-label requerido">Primer Nombre</label>
        <div class="col-lg-8">
            <input type="text" name="primerNombre" class="form-control" id="primerNombre" value="{{old('primerNombre', $data->primerNombre ?? '')}}" required>
        </div>
</div>
<div class="form-group row">
    <label for="primerNombre" class="col-lg-3 col-form-label requerido">Telefono</label>
    <div class="input-group col-lg-8">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="" im-insert="true">
    </div>
</div>

        {!! Form::text('NumeroTelefono'); !!}
        {!! Form::label('NumeroTelefono', 'Teléfono'); !!}<br>
        {!! Form::text('TipoTelefono'); !!}
        {!! Form::label('TipoTelefono', 'Tipo de Teléfono'); !!}<br>
        {!! Form::Button('Agregar!'); !!}<br>
        {!! Form::email('CorreoElectronicoPersonal'); !!}
        {!! Form::label('CorreoElectronicoPersonal', 'Correo Electrónico'); !!}<br>
        {!! Form::Button('Agregar!'); !!}<br>