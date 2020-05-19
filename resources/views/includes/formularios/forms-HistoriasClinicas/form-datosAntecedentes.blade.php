<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="patológicos">Patológicos</label>
            <textarea class="form-control" rows="1" name="patológicos" id="patológicos" tabindex="8"></textarea>
        </div>
        <div class="form-group">
            <label for="quirúrgicos">Quirúrgicos</label>
            <textarea class="form-control" rows="1" name="quirúrgicos" id="quirúrgicos" tabindex="10"></textarea>
        </div>
        <div class="form-group">
            <label for="familiares">Familiares</label>
            <textarea class="form-control" rows="1" name="familiares" id="familiares" tabindex="12"></textarea>
        </div>
        <div class="form-group">
            <label for="hospitalarios">Hospitalarios</label>
            <textarea class="form-control" rows="1" name="hospitalarios" id="hospitalarios" tabindex="14"></textarea>
        </div>
        <div class="form-group">
            <label for="alérgicos">Alérgicos</label>
            <textarea class="form-control" rows="1" name="alérgicos" id="alérgicos" tabindex="16"></textarea>
        </div>
        @if ($identificacion->sexo == 'F')
            <div class="form-group">
                <label for="formulaObstétrica">Formula Obstétrica</label>
                <input type="text" name="formulaObstétrica" class="form-control" id="formulaObstétrica" tabindex="18">        
            </div>
            <div class="form-group">
                <label for="menarquia">Menarquia</label>
                <input type="text" name="menarquia" class="form-control" id="menarquia" tabindex="20">        
            </div>
            <div class="form-group">
                <label for="planificación">Planificación</label>
                <textarea class="form-control" rows="1" name="planificación" id="planificación" tabindex="22"></textarea>
            </div>
        @endif
        
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="farmacológicos">Farmacológicos</label>
            <textarea class="form-control" rows="1" name="farmacológicos" id="farmacológicos" tabindex="9"></textarea>
        </div>
        
        <div class="form-group">
            <label for="toxicológicos">Toxicológicos</label>
            <textarea class="form-control" rows="1" name="toxicológicos" id="toxicológicos" tabindex="11"></textarea>
        </div>
        <div class="form-group">
            <label for="traumáticos">Traumáticos</label>
            <textarea class="form-control" rows="1" name="traumáticos" id="traumáticos" tabindex="13"></textarea>
        </div>
        <div class="form-group">
            <label for="inmunológicosVacunas">Inmunológicos/Vacunas</label>
            <textarea class="form-control" rows="1" name="inmunológicosVacunas" id="inmunológicosVacunas" tabindex="15"></textarea>
        </div>
        <div class="form-group">
            <label for="tratamientoOdontológico">Tratamientos Odontológicos</label>
            <textarea class="form-control" rows="1" name="tratamientoOdontológico" id="tratamientoOdontológico" tabindex="17"></textarea>
        </div>
        @if ($identificacion->sexo == 'F')
            <div class="form-group">
                <label for="fechaUltimaMenstruacion">Fecha de Ultima Menstruación</label>
                <div class="input-group col-lg-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text">            <i class="far fa-calendar-alt"></i>            </span>
                    </div>                
                <input type="date" class="form-control" id="fechaUltimaMenstruacion" name="fechaUltimaMenstruacion" tabindex="19">
                </div>
            </div>
            <div class="form-group">
                <label for="menopausia">Menopausia</label>
                <input type="text" name="menopausia" class="form-control" id="menopausia" tabindex="21">        
            </div>
        @endif
    </div> 
</div>