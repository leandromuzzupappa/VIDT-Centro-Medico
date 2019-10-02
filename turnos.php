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
				<h1 class="animated fadeInRight delay1"><small>VIDT Oncología Radiante</small> Solicitar Turno</h1>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="col-sm-8">
			
				<p class="big"><strong>	<span>Estimado paciente,</span></strong><br>
Para solicitar un turno, por favor envíenos los siguientes datos:
				</p><br>

				
				<form  method="post" action="submit3.php">
				
				
					<div class="row">
						<div class="col-sm-12"><label><span>Datos de contacto</span></label><br>
<br>
</div>
					
					<div class="col-sm-6">
						<input type="text" name="name" class="form-control" placeholder="Nombre*">
					</div>
					<div class="col-sm-6">
						<input type="text" name="surname" class="form-control" placeholder="Apellido">
					</div>
					
					<div class="col-sm-12">
						<input type="text" name="address" class="form-control" placeholder="Dirección">
					</div>
					
					<div class="col-sm-12">
						<input type="text" name="email" class="form-control" placeholder="E-mail*">
					</div>
					
					<div class="col-sm-6">
						<input type="text" name="fijo" class="form-control" placeholder="Teléfono fijo">
					</div>
					<div class="col-sm-6">
						<input type="text" name="movil" class="form-control" placeholder="Teléfono móvil">
					</div>
					

	<br>

				<div class="col-sm-12"><br>
<label><span>Información</span></label><br>
<br></div>


				
				<div class="col-sm-12">
						<input type="text" name="obrasocial" class="form-control" placeholder="Obra social">
						</div>
						
						<div class="col-sm-12">
						<input type="text" name="diagnostico" class="form-control" placeholder="Diagnóstico">
					</div>
					
					<div class="col-sm-12">
						<input type="text" name="medico" class="form-control" placeholder="Médico derivante">
					</div>
		
					
					

					
					<div class="col-sm-12">
						<!--a href="#1" class="btn btn-block btn-default">Solicitar turno</a-->
						<button type='submit' class="btn btn-default" id='send_message'>Solicitar turno</button>

					</div>
					
					
					</div>
					
				</form>
				

				
			</div>
	<?php include("body-turno.php") ?>
		</div>
	</div>
	<?php include("body-destacado-1.php") ?>
	<?php include("body-footer.php") ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>