<?php
	setlocale(LC_TIME, "");
	setlocale(LC_TIME, 'es_MX');
	date_default_timezone_set('America/Mexico_City');
	if(isset($_POST['submit'])){
    $to = "truiz@creditoreal.com.mx, crautos@garritz.com"; 
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Contacto Crédito Real Autos";
    $message = "Has recibido un mensaje desde la página web Crédito Real Autos.\n\nNombre: $name\nEmail: $from\nTeléfono: ".$_POST['tel']."\nCelular: ".$_POST['cel']."\nCiudad: ".$_POST['city']."\nMensaje: ".$_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    header('Location: gracias.php');
  }
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
	<title>Contacto | Crédito Real Autos</title>
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
			<li><a href='../cotizador/'>Cotizador</a></li>
			<li><a href='#'>Contáctanos</a></li>
			<li><a href='../preguntas-frecuentes/'>Preguntas Frecuentes</a></li>
		</ul>
	</div>
	<div id="container" class="inner" role="main">
		<h1>Contáctanos</h1>
		<div style="clear:both"></div>
		<h2 class="fltizq">Déjanos tus datos y en breve<br>un ejecutivo se pondrá en<br>contacto contigo.</h2>
		<div id="contacto">
			<form action="" method="post">
				<label>Nombre:</label>
				<input type="text" name="name" required>
				<label>Email:</label>
				<input type="text" name="email" required>
				<label>Teléfono Fijo:</label>
				<input type="text" name="tel" required>
				<label>Celular:</label>
				<input type="text" name="cel" required>
				<label>Ciudad:</label>
				<input type="text" name="city" required>				
				<label>Comentarios: </label>
				<textarea name="message" required></textarea><br><br>
				<input type="submit" name="submit" value="Enviar">
			</form>
			<div style="clear:both"></div>
		</div>
	</div>
	<div id="footer">
		<span>Derechos Reservados &copy; <?php echo date('Y'); ?> autosyucatan.com</span>
		<ul>
			<li><b>Autos Yucatán</b></li>
			<li><a href='../quienes-somos/'>¿Quiénes somos?</a></li>
			<li><a href='../cotizador/'>Cotizador</a></li>
			<li><a href='#'>Contáctanos</a></li>
			<li><a href='#'>Preguntas Frecuentes</a></li>
		</ul>		
	</div>
</div>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="../js/scripts.js"></script>
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