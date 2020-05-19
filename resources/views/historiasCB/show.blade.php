@extends("theme.$theme.layout")

@section('titulo')
    Ver Paciente
@endsection   

@section('styles')    
@endsection

@section('scriptsPlugins')
@endsection

@section('scripts')
@endsection

@section('contenido')

@section('contenido')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Info de la historia clinica de {{$identificacion->primerNombre}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">      
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Historia Clinica</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body"> 
                    <div class="row">    
                        <div class="col-md-6">            
                            <div class="form-group">
                                <label for="nombreAcompañante">Nombre Acompañante</label>
                                <input type="text" name="nombreAcompañante" class="form-control" id="nombreAcompañante" value="{{old('nombreAcompañante', $eventos->historiaClinicaB->nombreAcompañante ?? '')}}" tabindex="1" readonly>
                            </div>                       
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="parentescoAcompañante">Parentesco Acompañante</label>
                                <input list="parentescoAcompañante" type="text" name="parentescoAcompañante" class="form-control" value="{{old('parentescoAcompañante', $eventos->historiaClinicaB->parentescoAcompañante ?? '')}}" tabindex="2" readonly>
                                <datalist id="parentescoAcompañante">
                                    <option value="Padre"></option>
                                    <option value="Madre"></option>
                                    <option value="Hermano(a)"></option>
                                    <option value="Tio(a)"></option>
                                    <option value="Amigo(a)"></option>
                                    <option value="Otro Familiar"></option>
                                    <option value="Otro Parentesco"></option>
                                </datalist>
                            </div>               
                        </div>
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label for="fechaConsulta">Fecha Consulta</label>
                                <div class="input-group col-lg-12">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                                    </div>                
                                <input type="date" class="form-control" id="fechaConsulta" name="fechaConsulta" value="{{old('fechaConsulta', $eventos->historiaClinicaB->fechaConsulta ?? '')}}" tabindex="3" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="horaConsulta">Hora Consulta</label>
                                <div class="input-group col-lg-12">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">            <i class="far fa-clock"></i>            </span>
                                    </div>
                                <input type="time" class="form-control" id="horaConsulta" name="horaConsulta" value="{{old('horaConsulta', $eventos->historiaClinicaB->horaConsulta ?? '')}}" tabindex="4" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="edadActual">Edad Actual</label>
                                <input type="text" name="edadActual" class="form-control" id="edadActual" value="{{old('edadActual', $eventos->historiaClinicaB->edadActual ?? '')}}" tabindex="5" readonly>
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="motivoConsulta">Motivo de Consulta</label>
                                <input type="text" name="motivoConsulta" class="form-control" id="motivoConsulta" value="{{old('motivoConsulta', $eventos->historiaClinicaB->motivoConsulta ?? '')}}" tabindex="6" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="enfermedadActual">Enfermedad Actual</label>
                                <textarea class="form-control" rows="2" name="enfermedadActual" id="enfermedadActual" tabindex="7" readonly>{{old('enfermedadActual', $eventos->historiaClinicaB->enfermedadActual ?? '')}} </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Antecedentes</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="patológicos">Patológicos</label>
                                <textarea class="form-control" rows="1" name="patológicos" id="patológicos" tabindex="8" readonly>{{old('patológicos', $eventos->antecedentes->patológicos ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="quirúrgicos">Quirúrgicos</label>
                                <textarea class="form-control" rows="1" name="quirúrgicos" id="quirúrgicos" tabindex="10" readonly>{{old('quirúrgicos', $eventos->antecedentes->quirúrgicos ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="familiares">Familiares</label>
                                <textarea class="form-control" rows="1" name="familiares" id="familiares" tabindex="12" readonly>{{old('familiares', $eventos->antecedentes->familiares ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="hospitalarios">Hospitalarios</label>
                                <textarea class="form-control" rows="1" name="hospitalarios" id="hospitalarios" tabindex="14" readonly>{{old('hospitalarios', $eventos->antecedentes->hospitalarios ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="alérgicos">Alérgicos</label>
                                <textarea class="form-control" rows="1" name="alérgicos" id="alérgicos" tabindex="16" readonly>{{old('alérgicos', $eventos->antecedentes->alérgicos ?? '')}}</textarea>
                            </div>
                            @if ($identificacion->sexo == 'F')
                                <div class="form-group">
                                    <label for="formulaObstétrica">Formula Obstétrica</label>
                                    <input type="text" name="formulaObstétrica" class="form-control" id="formulaObstétrica" value="{{old('formulaObstétrica', $eventos->antecedentes->formulaObstétrica ?? '')}}" tabindex="18" readonly>        
                                </div>
                                <div class="form-group">
                                    <label for="menarquia">Menarquia</label>
                                    <input type="text" name="menarquia" class="form-control" id="menarquia" value="{{old('menarquia', $eventos->antecedentes->menarquia ?? '')}}" tabindex="20" readonly>        
                                </div>
                                <div class="form-group">
                                    <label for="planificación">Planificación</label>
                                    <textarea class="form-control" rows="1" name="planificación" id="planificación" tabindex="22" readonly>{{old('planificación', $eventos->antecedentes->planificación ?? '')}}</textarea>
                                </div>
                            @endif
                            
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="farmacológicos">Farmacológicos</label>
                                <textarea class="form-control" rows="1" name="farmacológicos" id="farmacológicos" tabindex="9" readonly>{{old('farmacológicos', $eventos->antecedentes->farmacológicos ?? '')}}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="toxicológicos">Toxicológicos</label>
                                <textarea class="form-control" rows="1" name="toxicológicos" id="toxicológicos" tabindex="11" readonly>{{old('toxicológicos', $eventos->antecedentes->toxicológicos ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="traumáticos">Traumáticos</label>
                                <textarea class="form-control" rows="1" name="traumáticos" id="traumáticos" tabindex="13" readonly>{{old('traumáticos', $eventos->antecedentes->traumáticos ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inmunológicosVacunas">Inmunológicos/Vacunas</label>
                                <textarea class="form-control" rows="1" name="inmunológicosVacunas" id="inmunológicosVacunas" tabindex="15" readonly>{{old('inmunológicosVacunas', $eventos->antecedentes->inmunológicosVacunas ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="tratamientoOdontológico">Tratamientos Odontológicos</label>
                                <textarea class="form-control" rows="1" name="tratamientoOdontológico" id="tratamientoOdontológico" tabindex="17" readonly>{{old('tratamientoOdontológico', $eventos->antecedentes->tratamientoOdontológico ?? '')}}</textarea>
                            </div>
                            @if ($identificacion->sexo == 'F')
                                <div class="form-group">
                                    <label for="fechaUltimaMenstruacion">Fecha de Ultima Menstruación</label>
                                    <div class="input-group col-lg-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                                        </div>                
                                    <input type="date" class="form-control" id="fechaUltimaMenstruacion" name="fechaUltimaMenstruacion" value="{{old('fechaUltimaMenstruacion', $eventos->antecedentes->fechaUltimaMenstruacion ?? '')}}" tabindex="19" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="menopausia">Menopausia</label>
                                    <input type="text" name="menopausia" class="form-control" id="menopausia" value="{{old('menopausia', $eventos->antecedentes->menopausia ?? '')}}" tabindex="21" readonly>        
                                </div>
                            @endif
                        </div> 
                    </div>                    
                </div>
            </div>   
            
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Revision por Sistemas</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cabeza">Cabeza</label>
                                <textarea class="form-control autocomplete" rows="1" name="cabeza" id="cabeza" tabindex="23" readonly>{{old('cabeza', $eventos->revisionSistema->cabeza ?? '')}}</textarea>
                            </div>      
                            <div class="form-group">
                                <label for="cardioPulmonarRS">Cardio/Pulmonar</label>
                                <textarea class="form-control autocomplete" rows="1" name="cardioPulmonarRS" id="cardioPulmonarRS" tabindex="25" readonly>{{old('cardioPulmonarRS', $eventos->revisionSistema->cardioPulmonarRS ?? '')}}</textarea>
                            </div>    
                            <div class="form-group">
                                <label for="urinario">Urinario</label>
                                <textarea class="form-control autocomplete" rows="1" name="urinario" id="urinario" tabindex="27" readonly>{{old('urinario', $eventos->revisionSistema->urinario ?? '')}}</textarea>
                            </div>  
                            <div class="form-group">
                                <label for="extremidadesRS">Extremidades</label>
                                <textarea class="form-control autocomplete" rows="1" name="extremidadesRS" id="extremidadesRS" tabindex="29" readonly>{{old('extremidadesRS', $eventos->revisionSistema->extremidadesRS ?? '')}}</textarea>
                            </div>     
                            <div class="form-group">
                                <label for="psiquismo">Psiquismo</label>
                                <textarea class="form-control autocomplete" rows="1" name="psiquismo" id="psiquismo" tabindex="31" readonly>{{old('psiquismo', $eventos->revisionSistema->psiquismo ?? '')}}</textarea>
                            </div> 
                    
                        </div>
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="organosSentidos">Organos de los Sentidos</label>
                                <textarea class="form-control autocomplete" rows="1" name="organosSentidos" id="organosSentidos" tabindex="24" readonly>{{old('organosSentidos', $eventos->revisionSistema->organosSentidos ?? '')}}</textarea>
                            </div> 
                            <div class="form-group">
                                <label for="digestivo">Digestivo</label>
                                <textarea class="form-control autocomplete" rows="1" name="digestivo" id="digestivo" tabindex="26" readonly>{{old('digestivo', $eventos->revisionSistema->digestivo ?? '')}}</textarea>
                            </div>    
                            <div class="form-group">
                                <label for="genital">Genital</label>
                                <textarea class="form-control autocomplete" rows="1" name="genital" id="genital" tabindex="28" readonly>{{old('genital', $eventos->revisionSistema->genital ?? '')}}</textarea>
                            </div>      
                            <div class="form-group">
                                <label for="pielAnexosRS">Piel y Anexos</label>
                                <textarea class="form-control autocomplete" rows="1" name="pielAnexosRS" id="pielAnexosRS" tabindex="30" readonly>{{old('pielAnexosRS', $eventos->revisionSistema->pielAnexosRS ?? '')}}</textarea>
                            </div>  
                            <div class="form-group">
                                <label for="endocrinologico">Endocrinologico</label>
                                <textarea class="form-control autocomplete" rows="1" name="endocrinologico" id="endocrinologico" tabindex="32" readonly>{{old('endocrinologico', $eventos->revisionSistema->endocrinologico ?? '')}}</textarea>
                            </div>  
                        </div>
                    </div>                    
                </div>
            </div>  

            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Examen Fisico</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <h4>Signos Vitales</h4>
                    <div class="row">  
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="presionArterialSistolica">Presion Arterial Sistolica</label>
                                <input type="text" name="presionArterialSistolica" class="form-control" id="presionArterialSistolica" value="{{old('presionArterialSistolica', $eventos->examenFisico->presionArterialSistolica ?? '')}}" tabindex="33" readonly>        
                            </div>
                        </div>  
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="presionArterialDiastolica">Presion Arterial Diastolica</label>
                                <input type="text" name="presionArterialDiastolica" class="form-control" id="presionArterialDiastolica" value="{{old('presionArterialDiastolica', $eventos->examenFisico->presionArterialDiastolica ?? '')}}" tabindex="34" readonly>        
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="frecuenciaCardiaca">Frecuencia Cardiaca</label>
                                <input type="text" name="frecuenciaCardiaca" class="form-control" id="frecuenciaCardiaca" value="{{old('frecuenciaCardiaca', $eventos->examenFisico->frecuenciaCardiaca ?? '')}}" tabindex="35" readonly>        
                            </div>
                        </div>  
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="frecuenciaRespiratoria">Frecuencia Respiratoria</label>
                                <input type="text" name="frecuenciaRespiratoria" class="form-control" id="frecuenciaRespiratoria" value="{{old('frecuenciaRespiratoria', $eventos->examenFisico->frecuenciaRespiratoria ?? '')}}" tabindex="36" readonly>        
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="temperatura">Temperatura</label>
                                <input type="text" name="temperatura" class="form-control" id="temperatura" value="{{old('temperatura', $eventos->examenFisico->temperatura ?? '')}}" tabindex="37" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="saturaciónO2">Saturación Oxigeno</label>
                                <input type="text" name="saturaciónO2" class="form-control" id="saturaciónO2" value="{{old('saturaciónO2', $eventos->examenFisico->saturaciónO2 ?? '')}}" tabindex="38" readonly>  
                            </div>
                        </div>
                    </div>
                    <h4>Antropometria</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="peso">Peso</label>
                                <input type="text" name="peso" class="form-control" id="peso" value="{{old('peso', $eventos->examenFisico->peso ?? '')}}" tabindex="39" readonly>  
                            </div>
                        </div>   
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="talla">Talla</label>
                                <input type="text" name="talla" class="form-control" id="talla" value="{{old('talla', $eventos->examenFisico->talla ?? '')}}" tabindex="40" readonly>  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="masaCorporal">Indice Masa Corporal</label>
                                <input type="text" name="masaCorporal" class="form-control" id="resultado" value="{{old('masaCorporal', $eventos->examenFisico->masaCorporal ?? '')}}" tabindex="41" readonly>
                            </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="aspectoGeneral">Aspecto General</label>
                                <textarea class="form-control autocomplete" rows="1" name="aspectoGeneral" id="aspectoGeneral" tabindex="42" readonly>{{old('aspectoGeneral', $eventos->examenFisico->aspectoGeneral ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="cuello">Cuello</label>
                                <textarea class="form-control autocomplete" rows="1" name="cuello" id="cuello" tabindex="44" readonly>{{old('cuello', $eventos->examenFisico->cuello ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="abdomen">Abdomen</label>
                                <textarea class="form-control autocomplete" rows="1" name="abdomen" id="abdomen" tabindex="46" readonly>{{old('abdomen', $eventos->examenFisico->abdomen ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="pielAnexosEF">Piel y Anexos</label>
                                <textarea class="form-control autocomplete" rows="1" name="pielAnexosEF" id="pielAnexosEF" tabindex="48" readonly>{{old('pielAnexosEF', $eventos->examenFisico->pielAnexosEF ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="neurológico">Neurológico</label>
                                <textarea class="form-control autocomplete" rows="1" name="neurológico" id="neurológico" tabindex="50" readonly>{{old('neurológico', $eventos->examenFisico->neurológico ?? '')}}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="otorrinolaringologico">Otorrinolaringologico</label>
                                <textarea class="form-control autocomplete" rows="1" name="otorrinolaringologico" id="otorrinolaringologico" tabindex="43" readonly>{{old('otorrinolaringologico', $eventos->examenFisico->otorrinolaringologico ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="cardioPulmonarEF">Cardio Pulmonar</label>
                                <textarea class="form-control autocomplete" rows="1" name="cardioPulmonarEF" id="cardioPulmonarEF" tabindex="45" readonly>{{old('cardioPulmonarEF', $eventos->examenFisico->cardioPulmonarEF ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="extremidadesEF">Extremidades</label>
                                <textarea class="form-control autocomplete" rows="1" name="extremidades" id="extremidades" tabindex="47" readonly>{{old('extremidades', $eventos->examenFisico->extremidades ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="genitales">Genitales</label>
                                <textarea class="form-control autocomplete" rows="1" name="genitales" id="genitales" tabindex="49" readonly>{{old('genitales', $eventos->examenFisico->genitales ?? '')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="otros">Otros</label>
                                <textarea class="form-control autocomplete" rows="1" name="otros" id="otros" tabindex="51" readonly>{{old('otros', $eventos->examenFisico->otros ?? '')}}</textarea>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>  

            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Consulta</h3>                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="observacionAnálisis">Observacion y/o Analisis</label>
                                <textarea class="form-control" rows="2" name="observacionAnálisis" id="observacionAnálisis" tabindex="52" readonly>{{old('observacionAnálisis', $eventos->consulta->observacionAnálisis ?? '')}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="plan">Plan</label>
                                <textarea class="form-control" rows="2" name="plan" id="plan" tabindex="53" readonly>{{old('plan', $eventos->consulta->plan ?? '')}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <table id="tablaDiagnosticos" class="table table-condensed table-striped">
                                <thead>
                                    <tr >
                                        <th WIDTH="70%">Diagnostico</th>
                                        <th WIDTH="20%">Tipo Diagnostico</th>
                                        <th WIDTH="10%">Mas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($eventos->diagnosticos as $diagnostico1)
                                    <tr>
                                        <td>                                        
                                            <input type="text" class="form-control" value="{{$diagnostico1->cie10s->id}} - {{$diagnostico1->cie10s->codigo}} - {{$diagnostico1->cie10s->descripcion}}" readonly>
                                        </td>
                                        <td>    
                                            <select name="tipoDiagnostico[]" id="tipoDiagnostico" class="form-control"  tabindex="55" readonly>
                                                <option value="">...Seleccionar...</option>
                                                <option value="1" {{ old('tipoDiagnostico',  $diagnostico1->tipoDiagnostico ?? '') == '1' ? 'selected' : ' ' }}>Impresión Diagnostica</option>
                                                <option value="2" {{ old('tipoDiagnostico',  $diagnostico1->tipoDiagnostico ?? '') == '2' ? 'selected' : ' ' }}>Confrimado Nuevo</option>
                                                <option value="3" {{ old('tipoDiagnostico',  $diagnostico1->tipoDiagnostico ?? '') == '3' ? 'selected' : ' ' }}>Confirmado Repetido</option>
                                            </select>                      
                                        </td>
                                        <td>
                                            <button id="addDiagnosticos" type="button" class="btn btn-primary"> <i class="fas fa-plus-circle"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach                            
                                        
            
                                    
                                </tbody>
                            </table>
                        </div>    
                        <div class="col-md-6">       
                    
                            <div class="form-group">
                                <label for="finalidadConsulta">Finalidad de la Consulta</label>
                                <select name="finalidadConsulta" id="finalidadConsulta" class="form-control" tabindex="56" readonly>
                                    <option value="">...Seleccionar Finalidad de la Consulta...</option>
                                    <option value="1" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '1' ? 'selected' : ' ' }}>Atención del parto(Atención del embarazo y del postparto)</option>
                                    <option value="2" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '2' ? 'selected' : ' ' }}>Atención Recién Nacido</option>
                                    <option value="3" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '3' ? 'selected' : ' ' }}>Atención Planificación familiar</option>
                                    <option value="4" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '4' ? 'selected' : ' ' }}>Detección alteraciones de crecimiento y desarrollo en menor de 10 años</option>
                                    <option value="5" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '5' ? 'selected' : ' ' }}>Detección de alteración del desarrollo joven</option>
                                    <option value="6" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '6' ? 'selected' : ' ' }}>Detección de alteraciones del embarazo</option>
                                    <option value="7" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '7' ? 'selected' : ' ' }}>Detección de alteraciones del adulto</option>
                                    <option value="8" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '8' ? 'selected' : ' ' }}>Detección de alteracions de agudeza visual</option>
                                    <option value="9" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '9' ? 'selected' : ' ' }}>Detección de Enfermedad Profesional</option>
                                    <option value="10" {{ old('finalidadConsulta',  $eventos->consulta->finalidadConsulta ?? '') == '10' ? 'selected' : ' ' }}>No aplica</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="causaExterna">Causa Externa</label>
                                <select name="causaExterna" id="causaExterna" class="form-control" tabindex="58" readonly>
                                    <option value="">...Seleccionar Causa Externa...</option>
                                    <option value="1" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '1' ? 'selected' : ' ' }}>Accidente de trabajo (Atención del embarazo y el Postparto)</option>
                                    <option value="2" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '2' ? 'selected' : ' ' }}>Accidente de tránsito</option>
                                    <option value="3" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '3' ? 'selected' : ' ' }}>Accidente rábico</option>
                                    <option value="4" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '4' ? 'selected' : ' ' }}>Accidente ofídico</option>
                                    <option value="5" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '5' ? 'selected' : ' ' }}>Otro tipo de accidente</option>
                                    <option value="6" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '6' ? 'selected' : ' ' }}>Evento catatrósfico</option>
                                    <option value="7" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '7' ? 'selected' : ' ' }}>Lesión por agresión</option>
                                    <option value="8" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '8' ? 'selected' : ' ' }}>Lesón auto infligida</option>
                                    <option value="9" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '9' ? 'selected' : ' ' }}>Sospecha de maltrato físico</option>
                                    <option value="10" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '10' ? 'selected' : ' ' }}>Sospecha de abuso sexual</option>
                                    <option value="11" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '11' ? 'selected' : ' ' }}>Sospecha de violencia sexual</option>
                                    <option value="12" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '12' ? 'selected' : ' ' }}>Sospecha de maltrato emocional</option>
                                    <option value="13" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '13' ? 'selected' : ' ' }}> Enfermedad general</option>
                                    <option value="14" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '14' ? 'selected' : ' ' }}>Enfermedad profesional</option>
                                    <option value="15" {{ old('causaExterna',  $eventos->consulta->causaExterna ?? '') == '15' ? 'selected' : ' ' }}>Otra</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="valorConsulta">Valor de la Consulta</label>
                                <input type="text" name="valorConsulta" class="form-control" id="valorConsulta" value="{{old('valorConsulta', $eventos->consulta->valorConsulta ?? '')}}" tabindex="60" readonly>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            
                            
                            <div class="form-group">
                                <label for="codigoConsulta">Codigo de Consulta</label>
                                <input type="text" name="codigoConsulta" class="form-control" id="codigoConsulta"  value="{{old('codigoConsulta', $eventos->consulta->codigoConsulta ?? '')}}" tabindex="57" readonly>        
                            </div>        
                            <div class="form-group">
                                <label for="tipoUsuario">Tipo de Usuario</label>
                                <select name="tipoUsuario" id="tipoUsuario" class="form-control" tabindex="59" readonly>
                                    <option value="">...Seleccionar Tipo de Usuario...</option>
                                    <option value="1" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '1' ? 'selected' : ' ' }}>Contributivo</option>
                                    <option value="2" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '2' ? 'selected' : ' ' }}>Subsidiado</option>
                                    <option value="3" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '3' ? 'selected' : ' ' }}>Vinculado</option>
                                    <option value="4" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '4' ? 'selected' : ' ' }}>Particular</option>
                                    <option value="5" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '5' ? 'selected' : ' ' }}>Otro</option>
                                    <option value="6" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '6' ? 'selected' : ' ' }}>Desplazado Contributivo</option>
                                    <option value="7" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '7' ? 'selected' : ' ' }}>Desplazado Subsidiado</option>
                                    <option value="8" {{ old('tipoUsuario',  $eventos->consulta->tipoUsuario ?? '') == '8' ? 'selected' : ' ' }}>Dezplazado No asegurado</option>
                                </select>         
                            </div>        
                    
                        </div>  
                    </div>
                    
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="url">Archivo Adjunto</label>
                                <div class="custom-file col-lg-12">
                                    <input type="file" class="custom-file-input" id="url" name="url" readonly>
                                    <label class="custom-file-label" for="url">Escojer archivo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>             
    </section>
@endsection 