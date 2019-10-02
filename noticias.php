<?php include_once('./includes/data.php'); ?>
<?php 
function orderData($a, $b) {
		return $b['id'] > $a['id'];
	
	}

	usort ($data,'orderData');
?>

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
<body id="noticias" class="noticias">
	<?php include("body-header.php") ?>

	<div class="main animated fadeIn">
		<div class="container">

			<div class="col-sm-8">
				<h1 class="animated fadeInRight delay1">Noticias</h1>
				<br>
				<br>
			</div>

		</div>
	</div>

	<div class="content">
		<div class="container">

			<?php foreach ($data as $key => $value):?>
				<div class="col-sm-offset-1 col-sm-10 news-item">
	                <div class="row">

	                    <div class="col-md-4 imagen" style="background: url(<?php echo ($value['foto-thumb']) ? $value['foto-thumb'] : 'http://via.placeholder.com/350x250';?>), center top no-repeat; background-size: cover;">
	                    </div>

	                    <div class="col-md-8 texto">
	                        <h3 class="titulo">
								<small class="fecha"><?php echo $value['fecha']; ?></small> <br>
								<?php echo $value['titulo']; ?>
							</h3>
	                        <p class="bajada"><?php echo $value['texto_corto']; ?></p>

							<a class="btn btn-default btn-sm cta" href="<?php echo ($value['url_boton']) ? $value['url_boton'] : './noticia.php?nota='. $value['id']; ?>"><?php echo ($value['texto_boton']) ? $value['texto_boton'] : 'Ver noticia'; ?></a>
	                    </div>
	                </div>
	            </div>
			<?php endforeach; ?>


		</div>
	</div>
	<?php include("body-destacado-2.php") ?>

	<?php include("body-footer.php") ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/funciones.js" type="text/javascript"></script>
</body>

</html>
