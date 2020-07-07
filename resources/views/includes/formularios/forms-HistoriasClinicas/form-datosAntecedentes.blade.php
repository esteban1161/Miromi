<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="patológicos">Patológicos</label>
            <textarea class="form-control" rows="1" name="patológicos" id="patológicos" tabindex="8">{{old('patológicos', $eventos->antecedentes->patológicos ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="quirúrgicos">Quirúrgicos</label>
            <textarea class="form-control" rows="1" name="quirúrgicos" id="quirúrgicos" tabindex="10">{{old('quirúrgicos', $eventos->antecedentes->quirúrgicos ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="familiares">Familiares</label>
            <textarea class="form-control" rows="1" name="familiares" id="familiares" tabindex="12">{{old('familiares', $eventos->antecedentes->familiares ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="hospitalarios">Hospitalarios</label>
            <textarea class="form-control" rows="1" name="hospitalarios" id="hospitalarios" tabindex="14">{{old('hospitalarios', $eventos->antecedentes->hospitalarios ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="alérgicos">Alérgicos</label>
            <textarea class="form-control" rows="1" name="alérgicos" id="alérgicos" tabindex="16">{{old('alérgicos', $eventos->antecedentes->alérgicos ?? '')}}</textarea>
        </div>
        @if ($identificacion->sexo == 'F')
            <div class="form-group">
                <label for="formulaObstétrica">Formula Obstétrica</label>
                <input type="text" name="formulaObstétrica" class="form-control" id="formulaObstétrica" value="{{old('formulaObstétrica', $eventos->antecedentes->formulaObstétrica ?? '')}}" tabindex="18">        
            </div>
            <div class="form-group">
                <label for="menarquia">Menarquia</label>
                <input type="text" name="menarquia" class="form-control" id="menarquia" value="{{old('menarquia', $eventos->antecedentes->menarquia ?? '')}}" tabindex="20">        
            </div>
            <div class="form-group">
                <label for="planificación">Planificación</label>
                <textarea class="form-control" rows="1" name="planificación" id="planificación" tabindex="22">{{old('planificación', $eventos->antecedentes->planificación ?? '')}}</textarea>
            </div>
        @endif
        
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="farmacológicos">Farmacológicos</label>
            <textarea class="form-control" rows="1" name="farmacológicos" id="farmacológicos" tabindex="9">{{old('farmacológicos', $eventos->antecedentes->farmacológicos ?? '')}}</textarea>
        </div>
        
        <div class="form-group">
            <label for="toxicológicos">Toxicológicos</label>
            <textarea class="form-control" rows="1" name="toxicológicos" id="toxicológicos" tabindex="11">{{old('toxicológicos', $eventos->antecedentes->toxicológicos ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="traumáticos">Traumáticos</label>
            <textarea class="form-control" rows="1" name="traumáticos" id="traumáticos" tabindex="13">{{old('traumáticos', $eventos->antecedentes->traumáticos ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="inmunológicosVacunas">Inmunológicos/Vacunas</label>
            <textarea class="form-control" rows="1" name="inmunológicosVacunas" id="inmunológicosVacunas" tabindex="15">{{old('inmunológicosVacunas', $eventos->antecedentes->inmunológicosVacunas ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="tratamientoOdontológico">Tratamientos Odontológicos</label>
            <textarea class="form-control" rows="1" name="tratamientoOdontológico" id="tratamientoOdontológico" tabindex="17">{{old('tratamientoOdontológico', $eventos->antecedentes->tratamientoOdontológico ?? '')}}</textarea>
        </div>
        <div class="form-group">
            <label for="otrosAntecedentes">Otros</label>
            <textarea class="form-control autocomplete" rows="1" name="otrosAntecedentes" id="otrosAntecedentes" tabindex="31">{{old('otrosAntecedentes', $eventos->antecedentes->otrosAntecedentes ?? '')}}</textarea>
        </div> 
        @if ($identificacion->sexo == 'F')
            <div class="form-group">
                <label for="fechaUltimaMenstruacion">Fecha de Ultima Menstruación</label>
                <div class="input-group col-lg-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                    </div>                
                <input type="date" class="form-control" id="fechaUltimaMenstruacion" name="fechaUltimaMenstruacion" value="{{old('fechaUltimaMenstruacion', $eventos->antecedentes->fechaUltimaMenstruacion ?? '')}}" tabindex="19">
                </div>
            </div>
            <div class="form-group">
                <label for="menopausia">Menopausia</label>
                <input type="text" name="menopausia" class="form-control" id="menopausia" value="{{old('menopausia', $eventos->antecedentes->menopausia ?? '')}}" tabindex="21">        
            </div>
        @endif
    </div> 
</div>