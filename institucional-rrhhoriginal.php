<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<title>VIDT Oncología Radiante</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

	<!-- Global site tag (gtag.js) - Google Ads: 1007886972 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007886972"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'AW-1007886972');
	</script>
</head>
<body id="Institucional">
	<?php include("body-header.php") ?>
	<div class="main animated fadeIn" style="background: url(img/bg/main-05.jpg) no-repeat center center; background-size: cover;">
		<div class="container">
			<div class="col-sm-8">
				<h1 class="animated fadeInRight delay1"><small>Institucional</small> Recursos Humanos</h1>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10 text-center">
					<br>
					<p class="big">En <span>VIDT Oncología Radiante</span> nos comprometemos a contribuir con nuestro esfuerzo permanente a mejorar la salud, brindando asistencia confiable y personalizada, en un marco de excelencia profesional y liderazgo tecnológico.</p>
					<br><br>
					<br>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<br>
					<br>
					<p class="big"><strong>Incorporamos a nuestro equipo de trabajo, personas con vocación de servicio, empatía y con pasión por marcar la diferencia brindando un servicio de calidad con calidez.</strong><br>
						<br> Si te interesa formar parte de este desafío, adjuntanos tu CV, detallando área de interés y lugar de residencia actual.</p>
					<img src="img/line.gif"/> </div>
				<div class="col-sm-offset-1 col-sm-5 form-cont">
					<h3>Trabajá con nosotros</h3>
					<form name="contact" method="post" action="submit2.php" enctype="multipart/form-data">
						<input class="form-control" name="area" type="text" placeholder="Area">
						<!--select name="area">
							<option value="Fisica">Fisica</option>
							<option value="Medica">Medica</option>
							<option value="Ingeniería">Ingeniería</option>
							<option value="Recepción">Recepción</option>
							<option value="Técnica">Técnica</option>
							<option value="Maestranza">Maestranza</option>
							<option value="Administración">Administración</option>
							<option value="Sistemas">Sistemas</option>
							<option value="RR.HH">RR.HH</option>
							<option value="Comercial">Comercial</option>
						</select-->
						<input class="form-control" name="provincia" type="text" placeholder="Provincia">
						<!--select name="provincia">
							<option value="Capital Federal">Capital Federal</option>
							<option value="Buenos Aires Zona Oeste">Buenos Aires Zona Oeste</option>
							<option value="Buenos Aires Zona Sur">Buenos AIrez Zona Sur</option>

							<option value="Distinguir GBA Sur, Norte, Oeste">Distinguir GBA Sur, Norte, Oeste</option>
						</select-->
						<span>Adjuntar Curriculum Vitae</span>
						<input type="file" name="uploaded_file" title="Adjuntar CV"><br>
						<br>
						<!--a href="#1" class="btn btn-default btn-block">Enviar</a-->
						<button type='submit' class="btn btn-default" id='send_message'>Enviar mensaje</button>

					</form>
				</div>
			</div>
		</div>
		</div>
		<?php include("body-destacado-2.php") ?>
	
	<?php include("body-footer.php") ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
