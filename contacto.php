
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

<body id="Contacto">
	<?php include("body-header.php") ?>
	<div class="main animated fadeIn" style="background: url(img/bg/main-06.jpg) no-repeat center center; background-size: cover;">
		<div class="container">
			<div class="col-sm-8">
				<h1 class="animated fadeInRight delay1"><small>VIDT Oncología Radiante</small> Contáctenos</h1>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="col-sm-8">
							
				<form name="contact" method="post" action="submit.php">
					<div class="row">
					<div class="col-sm-6">
						<input type="text"  name="name" id="name"  class="form-control" placeholder="Nombre*">
					</div>
					<div class="col-sm-6">
						<input type="text" name="surname" id="surname"  class="form-control" placeholder="Apellido">
					</div>
					
					<div class="col-sm-6">
						<input type="text" name="email" id="email" class="form-control" placeholder="E-mail*">
					</div>
					
					<div class="col-sm-6">
						<input type="text"  name="phone" id="phone" class="form-control" placeholder="Teléfono*">
					</div>
					
					<div class="col-sm-12">
						<select name="type" class="form-control">
						 <option value="">Asunto*</option>
						 <option value="Mensaje">Mensaje</option>
						 <option value="Consulta">Consulta</option>
						 <option value="Sugerencia / Reclamo">Sugerencia / Reclamo</option>
						</select>
					</div>
					
					
					<div class="col-sm-12">
						<textarea class="form-control" name="message" id="message" placeholder="Mensaje"></textarea>
					</div>
					
					<div class="col-sm-6">
						<!--a href="#1" class="btn btn-block btn-default">Enviar mensaje</a-->
						<button type='submit' class="btn btn-default" id='send_message'>Enviar mensaje</button>
					</div>
					
					
					</div>
					
				</form>
				

				
			</div>
	<?php include("body-turno.php") ?>	
		</div>
	</div>
	
	<?php include("body-footer.php") ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>