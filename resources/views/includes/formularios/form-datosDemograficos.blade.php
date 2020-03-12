<h2>Datos Demográficos</h2>  <br>
        {!! Form::text('PaisNacimiento'); !!}
        {!! Form::label('PaisNacimiento', 'País de Nacimiento'); !!}<br>
        {!! Form::text('CiudadNacimiento'); !!}
        {!! Form::label('CiudadNacimiento', 'Ciudad de Nacimiento'); !!}<br>
        {!! Form::select('EstadoCivil', ['Soltero(a)', 'Casado(a)', 
            'Union Libre', 'Viudo(a)', 'Separado(a)',
            'Otro'], null, ['placeholder' => 'Seleccione...']); !!}
        {!! Form::label('EstadoCivil', 'Estado Civil'); !!}<br>
        {!! Form::select('Escolaridad', ['Primaria', 'Secundaria', 
            'Técnica', 'Profesional', 'Postgrado',
            'Otro'], null, ['placeholder' => 'Seleccione...']); !!}
        {!! Form::label('Escolaridad', 'Escolaridad'); !!}<br>
        {!! Form::text('Ocupacion'); !!}
        {!! Form::label('Ocupacion', 'Ocupación'); !!}<br>
        {!! Form::text('CredoReligioso'); !!}
        {!! Form::label('CredoReligioso', 'Credo Religioso'); !!}<br>
        {!! Form::text('PaisResidencia'); !!}
        {!! Form::label('PaisResidencia', 'País de Residencia'); !!}<br>
        {!! Form::text('DepartamentoResidencia'); !!}
        {!! Form::label('DepartamentoResidencia', 'Departamento de Residencia'); !!}<br>
        {!! Form::text('CiudadResidencia'); !!}
        {!! Form::label('CiudadResidencia', 'Ciudad de Residencia'); !!}<br>
        {!! Form::text('LocalidadResidencia'); !!}
        {!! Form::label('LocalidadResidencia', 'Localidad de Residencia'); !!}<br>
        {!! Form::text('DireccionResidencia'); !!}
        {!! Form::label('DireccionResidencia', 'Dirección de Residencia'); !!}<br>
        {!! Form::select('ZonaResidencia', ['U' => 'Urbana', 'R' => 'Rural'], null, ['placeholder' => 'Seleccione...']); !!}
        {!! Form::label('ZonaResidencia', 'Zona de Residencia'); !!}<br>
        {!! Form::text('NumeroTelefono'); !!}
        {!! Form::label('NumeroTelefono', 'Teléfono'); !!}<br>
        {!! Form::text('TipoTelefono'); !!}
        {!! Form::label('TipoTelefono', 'Tipo de Teléfono'); !!}<br>
        {!! Form::Button('Agregar!'); !!}<br>
        {!! Form::email('CorreoElectronicoPersonal'); !!}
        {!! Form::label('CorreoElectronicoPersonal', 'Correo Electrónico'); !!}<br>
        {!! Form::Button('Agregar!'); !!}<br>