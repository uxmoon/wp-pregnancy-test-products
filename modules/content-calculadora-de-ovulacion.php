<div class="calculator calculator--small">

    <h3 class="calculator__title">Calculadora de ovulación</h3>

    <div class="row">
        <div class="small-6 large-6 columns">
            <p class="calculator__instructions">Ingresá la cantidad de días de duración de tus últimos 3 ciclos.</p>
            <p class="calculator__note">Períodos mayores a 20 <br/> días y menores a 45</p>
        </div>
        <div class="small-6 large-6 columns">
            <div class="calculator__fields">
                <input type="text" name="txt_1" class="field" id="txt_1" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>
                <input type="text" name="txt_2" class="field" id="txt_2" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>
                <input type="text" name="txt_3" class="field" id="txt_3" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>
            </div>
            <a href="javascript: var a = ovulacion ();" class="calculator__button" title="Calcular">Calcular</a>
        </div>
    </div>
</div>
