<h2>Datos de Afiliación al Sistema de Salud</h2>  <br>
    {!! Form::select('TipoVinculacion', ['1' => 'Contributivo', '2' => 'Subsidiado', '3' => 'Vinculado', '4' => 'Particular', '5' => 'Otro', '6' => 'Desplazado Contributivo', '7' => 'Desplazado Subsidiado', '8' => 'Dezplazado No asegurado'], null, ['placeholder' => 'Seleccione...']); !!}
    {!! Form::label('TipoVinculacion', 'Tipo de Vinculación al Sistema'); !!}<br>
    {!! Form::text('Aseguradora'); !!}
    {!! Form::label('Aseguradora', 'Aseguradora'); !!}<br>
    {!! Form::text('ResponsableMedico'); !!}
    {!! Form::label('ResponsableMedico', 'Nombre de Responsable Médico'); !!}<br>
    {!! Form::text('ParentescoResponsable'); !!}
    {!! Form::label('ParentescoResponsable', 'Parentesco de Responsable Medico'); !!}<br>
    {!! Form::text('TelefonoResponsable'); !!}
    {!! Form::label('TelefonoResponsable', 'Telefono de Responsable Medico'); !!}<br>
    {!! Form::file('Foto'); !!}
    {!! Form::label('Foto', 'Foto'); !!}<br>
    {!! Form::Button('Agregar!'); !!}<br>
    {!! Form::Submit('Enviar'); !!}<br>