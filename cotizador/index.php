<?php
	setlocale(LC_TIME, "");
	setlocale(LC_TIME, 'es_MX');
	date_default_timezone_set('America/Mexico_City');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Crédito Real Autos">
  <meta name="author" content="Crédito Real">  
	<link rel='stylesheet' type='text/css' href='../css/style.css'>
	<title>Cotizador | Crédito Real Autos</title>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
</head>
<body>
<div id="topbar">
	<div class="container">
		<span>Mérida Yucatán, <?php echo strftime("%A %e de %B de %Y"); ?></span>
		<div class="redes"><a href="//www.youtube.com/user/CreditoRealMx" target="_blank" title="YouTube"><img alt="Youtube" src="../img/yt.png"></a></div>
		<div class="redes"><a href="//www.twitter.com/CreditoRealMx" target="_blank" title="Twitter"><img alt="Twitter" src="../img/tw.png"></a></div>
		<div class="redes"><a href="//www.facebook.com/CreditoRealMx" target="_blank" title="Facebook"><img alt="Facebook" src="../img/fb.png"></a></div>
	</div>
</div>
<div id="wrapper">
	<div id="header">
		<div id="logo"><a href="/"></a></div>
	</div>
	<div id="nav" role="navigation">
		<ul>
			<li><a href='/'>Inicio</a></li>
			<li><a href='../quienes-somos/'>¿Quiénes somos?</a></li>
			<li><a href='#'>Cotizador</a></li>
			<li><a href='../contacto/'>Contáctanos</a></li>
			<li><a href='../preguntas-frecuentes/'>Preguntas Frecuentes</a></li>
		</ul>
	</div>
	<div id="container" class="inner" role="main">
		<h1>Cotizador</h1>
		<div style="clear:both"></div>
		<h2 class="fltizq">¡Cotiza al instante tu próximo auto!</h2>
		<div id="cotizador">
			<form name="cotizador" method="post">
				<label>Valor del Coche</label>
				<input type="number" id="valor" name="valor" onkeypress='return validar(event);' required title="Sólo números, sin comas o puntos.">
				<label>Marca</label>
				<input type="text" id="marca" name="marca">
				<label>Año</label>
				<select id="year" name="year">
					<option value="">-- Seleccionar --</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
				</select>
				<label>Plazo</label>
				<select id="plazo" name="plazo" required title="Plazo a pagar, en meses.">
					<option value="">-- Seleccionar --</option>
					<option value="12">12</option>
					<option value="18">18</option>
					<option value="24">24</option>
					<option value="36">36</option>
					<option value="48">48</option>
				</select>
				<br><br>
				<input type="submit" value="Cotizar">
			</form>
			<div style="clear:both"></div>
			<div id="pagos"></div>
			<button id="ct" style="display:none;float:none;margin:0 auto" onclick='window.open("http://www.creditorealautos.com/contacto")'>Contáctanos</button>
			<div style="clear:both"></div>
		</div>
	</div>
	<div id="footer">
		<span>Derechos Reservados &copy; <?php echo date('Y'); ?> autosyucatan.com</span>
		<ul>
			<li><b>Autos Yucatán</b></li>
			<li><a href='../quienes-somos/'>¿Quiénes somos?</a></li>
			<li><a href='#'>Cotizador</a></li>
			<li><a href='../contacto/'>Contáctanos</a></li>
			<li><a href='../preguntas-frecuentes/'>Preguntas Frecuentes</a></li>
		</ul>		
	</div>
</div>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
$("form[name=cotizador]").bind('submit',function(){
  var valor = parseFloat($("#valor").val());
  var plazo = parseFloat($("#plazo").val());
  var tasa = 0.015;
  var iva = 0.16;
  var interesnoiva = valor * plazo * tasa;
  var ivainteres = parseFloat(interesnoiva * iva);
  var saldo = parseFloat(valor + interesnoiva + ivainteres);
  var mensualidad = parseFloat(saldo / plazo);
  var mensualidad = parseFloat(mensualidad + 220 + 40);
  $("#pagos").html("<p>Tu mensualidad sería de $"+mensualidad.toFixed(2)+".</p><p>Datos informativos. Esto no es una cotización formal.</p>");
  $("#ct").css('display','block');
 	return false;
});
function validar(event) {
  var key = window.event ? event.keyCode : event.which;
	if (event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 37 || event.keyCode == 39){
    return true;
	}else if ( key < 48 || key > 57 ) {
    return false;
	}else{
		return true;
	};
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-40198138-4', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>