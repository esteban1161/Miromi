<h2>Datos de Identificación</h2>  
        {!! Form::text('PrimerNombre'); !!}
        {!! Form::label('PrimerNombre', 'Primer Nombre'); !!}<br>
        {!! Form::text('SegundoNombre'); !!}
        {!! Form::label('SegundoNombre', 'Segundo Nombre'); !!}<br>
        {!! Form::text('PrimerApellido'); !!}
        {!! Form::label('PrimerApellido', 'Primer Apellido'); !!}<br>
        {!! Form::text('SegundoApellido'); !!}
        {!! Form::label('SegundoApellido', 'Segundo Apellido'); !!}<br>
        {!! Form::select('TipoDocumento', ['CC' => 'Cedula de Ciudadanía', 'CE' => 'Cédula de Extranjería', 
            'PA' => 'Pasaporte', 'RC' => 'Registro Civil', 'TI' => 'Tarjeta de Identidad',
            'AS' => 'Adulto sin Identificación', 'MS' => 'Menor sin Identificación'], null, ['placeholder' => 'Seleccione...']); !!}
        {!! Form::label('TipoDocumento', 'Tipo de Documento'); !!}<br>
        {!! Form::text('NumeroIdentificacion'); !!}
        {!! Form::label('NumeroIdentificacion', 'Número de Identificación'); !!}<br>
        {!! Form::select('Sexo', ['M' => 'Masculino', 'F' => 'Femenino'], null, ['placeholder' => 'Seleccione...']); !!}
        {!! Form::label('Sexo', 'Sexo'); !!}<br>
        {!! Form::date('FechaNacimiento', \Carbon\Carbon::now()); !!}
        {!! Form::label('FechaNacimiento', 'Fecha de Nacimiento'); !!}<br>  