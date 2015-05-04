var nav4 = window.Event ? true : false;
function acceptNum(evt){	
var key = nav4 ? evt.which : evt.keyCode;	
return true;
//return (key <= 13 || (key >= 48 && key <= 57));
}


	function ovulacion () {
	
		var msg = '';
		
		if (document.getElementById('txt_1').value == '' || document.getElementById('txt_2').value == '' ||  document.getElementById('txt_3').value == '') {
			mensajeShow('Debe ingresar sus &uacute;ltimos 3 periodos.');
		}
		else if (document.getElementById('txt_1').value < 20 || document.getElementById('txt_1').value > 40 || document.getElementById('txt_2').value < 20 || document.getElementById('txt_2').value > 40 ||document.getElementById('txt_3').value < 20 || document.getElementById('txt_3').value > 40)
		{
			mensajeShow('La cantidad de d&iacute;as de sus periodos debe ser mayor de 20 y menor de 45.');
		}
		else
		{
			var periodo = Math.round((document.getElementById('txt_1').value*1+document.getElementById('txt_2').value*1+document.getElementById('txt_3').value*1)/3/2);
			mensajeShow('Tus d&iacute;as m&aacute;s f&eacute;rtiles son: desde el ' + (periodo-3) + '&ordm; hasta el ' + (periodo+4) + '&ordm; d&iacute;a del ciclo.');
		}
	}


	function mensajeShow(msj) {
	
		div_msj = document.getElementById('msj');
		div_msj_txt = document.getElementById('msj_txt');
		div_msj_txt.innerHTML = msj;
		div_msj.style.display = '';
		
		
	}
	
	function mensajeHide() {
	
		div_msj = document.getElementById('msj');
		div_msj_txt = document.getElementById('msj_txt');
		div_msj_txt.innerHTML = '';
		div_msj.style.display = 'none';
	}

