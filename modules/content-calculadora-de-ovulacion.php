<div class="calculator--small">
    <div class="calculator__content">


        <!-- calculator results -->
        <div id="js-calculator-content" style="display:none;" class="calculator__results">
            <a href="javascript: return false;" onclick="mensajeHide();">
                <div class="content">
                    <i class="fa fa-close"></i>
                    <div id="js-calculator-text" class="calculator__message"></div>
                </div>
            </a>
        </div>
        <!-- / calculator results -->

        <h3 class="calculator__subtitle"><span>Calculadora</span> de Ovulación</h3>
        <div class="row collapse">
            <div class="small-6 columns">
                <ul class="calculator__fields">
                    <li><input type="text" name="txt_1" class="field" id="txt_1" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"></li>
                    <li><input type="text" name="txt_2" class="field" id="txt_2" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"></li>
                    <li><input type="text" name="txt_3" class="field" id="txt_3" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"></li>
                </ul>
                <a href="javascript: var a = ovulacion ();" class="calculator__button button" title="Calcular">Calcular <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="small-6 columns">
                <p class="calculator__instructions"><span>&lt;&lt;&lt;</span> Ingresá la cantidad de días de duración de tus últimos 3 ciclos.</p>
                <p class="calculator__notes">Períodos mayores a 20 días y menores a 45</p>
            </div>
        </div>
    </div>
</div>
