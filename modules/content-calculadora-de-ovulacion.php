<div class="module calculadora-de-ovulacion">
	<div class="content">
		<div class="fields">
			<input name="txt_1" class="imput-back" id="txt_1" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>

			<input name="txt_2" class="imput-back" id="txt_2" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>

			<input name="txt_3" class="imput-back" id="txt_3" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>
		</div>
	</div>
	<a href="javascript: var a = ovulacion ();" class="btn btn-calculator" title="Calcular">Calcular</a>
	<div id="msj" style="display:none;">
	<div class="content">
		<div class="arrow"></div>
		<div id="msj_cerrar"><a href="javascript: return false;" onclick="mensajeHide();">cerrar</a></div>
		<div id="msj_txt"></div>
	</div>
	</div>
</div>