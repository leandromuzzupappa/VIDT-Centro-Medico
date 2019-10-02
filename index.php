<?php include_once('./includes/data.php'); ?>
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
<body id="Home">
<div class="modal fade" id="Pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <img src="img/modal.gif" data-dismiss="modal" style="width: 100%; " />
    </div>
  </div>
</div>


	<?php include("body-header.php") ?>
	<div class="main animated fadeIn">
		<div id="carousel-home" class="carousel slide" data-ride="carousel" data-interval="7000">
			<div class="carousel-inner" role="listbox">
				<ol class="carousel-indicators">
    			  <li data-target="#carousel-home" data-slide-to="1" class="active" style="background-color:rgba(0,0,0,0.2);"></li>
    			  <li data-target="#carousel-home" data-slide-to="2" style="background-color:rgba(0,0,0,0.2);"></li>
				  <li data-target="#carousel-home" data-slide-to="3" style="background-color:rgba(0,0,0,0.2);"></li>
				  <li data-target="#carousel-home" data-slide-to="4" style="background-color:rgba(0,0,0,0.2);"></li>
  			 	</ol>


				<!--slide 1-->
				<div class="item animated fadeIn active" style="background: url(img/bg/home-01.jpg) no-repeat center center; background-size: cover;">
					<div class="container">
						<div class="col-sm-8">
						<img style="margin-top: -30px;" class="fadeInUp animated" src="img/advanced.png"/>
						<h1 class="animated fadeInRight delay1">
 							Un nuevo concepto en oncología Radiante.
 							<small class="animated fadeInRight delay2">Máximo impacto positivo en la vida de aquellos<br>
							que transitan un tratamiento oncológico.</small>
						</h1>
							<a href="advanced.php" class="btn btn-default animated fadeInUp delay35">Conozca más</a>
						</div>
					</div>
				</div>

				<!--slide 2-->
				<div class="item animated fadeIn" style="background: url(img/bg/home-04.jpg) no-repeat center center; background-size: cover;">
					<div class="container">
						<div class="col-sm-8">
							<h1 class="animated fadeInRight delay1">
								Precisión al Servicio de la Salud
								<small class="animated fadeInRight delay2">Enfocado en cada paciente.</small>
							</h1>
							<a href="pacientes.php" class="btn btn-default animated fadeInUp delay35">Información útil para el paciente</a>
						</div>
					</div>
				</div>

				<!--slide 3-->
				<div class="item animated fadeIn" style="background: url(img/bg/home-02.jpg) no-repeat center center; background-size: cover;">
					<div class="container">
						<div class="col-sm-8">
							<h1 class="animated fadeInRight delay1">
								Tecnología y tratamientos de avanzada,
								<small class="animated fadeInRight delay2">al cuidado del paciente.</small>
							</h1>
							<a href="institucional-calidad.php" class="btn btn-default animated fadeInUp delay35">Políticas de calidad</a>
						</div>
					</div>
				</div>

				<!--slide 4-->
				<div class="item animated fadeIn" style="background: url(img/bg/home-03.jpg) no-repeat center center; background-size: cover;">
					<div class="container">
						<div class="col-sm-8">
							<h1 class="animated fadeInRight delay1">
								Jerarquía científica
								<small class="animated fadeInRight delay2">al servicio del tratamiento oncológico.</small>
							</h1>
							<a href="../v5/institucional-staff.php" class="btn btn-default animated fadeInUp delay35">Nuestro staff profesional</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="logos">
		<div class="container subir">
			<div class="clearfix">
				<div class="row home">
					<?php foreach ($data as $key => $value): ?>
						<div class="col-sm-4 news-item">
							<div class="row col-md-offset-3" style="">
								<div class="col-md-4" style="padding-right: 5px;">
									<a href="<?php echo ($value['url_boton']) ? $value['url_boton'] : './noticia.php?nota='. $value['id']; ?>">
										<figure style="background-image: url('<?php echo ($value['foto-thumb']) ? $value['foto-thumb'] : 'http://via.placeholder.com/350x250'; ?>');"></figure>
									</a>
								</div>
								<div class="col-md-8" style="padding-left: 0px;">
									<h3 style="margin:0;text-align: left;">
										<br>
										<a  href="<?php echo ($value['url_boton']) ? $value['url_boton'] : './noticia.php?nota='. $value['id']; ?>">
											<?php echo $value['titulo']; ?>
										</a>
									</h3>
									<!-- <p><?php echo $value['texto_corto']; ?></p> -->

									<!-- <a class="btn btn-link" href="<?php echo ($value['url_boton']) ? $value['url_boton'] : './noticia.php?nota='. $value['id']; ?>"><?php echo ($value['texto_boton']) ? $value['texto_boton'] : 'Ver noticia'; ?></a> -->
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="clearfix">
				<div class="row">
					<div class="col-sm-6">
						<h2>Certificaciones</h2>
						<div class="col-xs-6"><a class="certificado"><img src="img/certificados/04.png" alt=""></a>
						</div>
						<div class="col-xs-6"><a class="certificado"><img src="img/certificados/01.png" alt=""></a>
						</div>
					</div>
					<div class="col-sm-6">
						<h2>Instituciones Asociadas</h2>
						<div class="col-xs-6"><a class="certificado"><img src="img/certificados/02.png" alt=""></a>
						</div>
						<div class="col-xs-6"><a class="certificado"><img src="img/certificados/03.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("body-destacado-3.php") ?>
	<div class="bloque bg02">
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8 text-center">
					<h2>Tecnología</h2><br>
					<p class="big"><strong><span>VIDT Oncología Radiante</span></strong>, además de brindar a sus pacientes jerarquía científica y la más alta calidad médica, cuenta con tecnología de última generación. </p><br>
					<br>
				</div>
				<div class="col-sm-6">
					<div class="embed-responsive embed-responsive-16by9 video-tech">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6QIfU9dU4kw?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="embed-responsive embed-responsive-16by9 video-tech">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/K65r2MXCIZM?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("body-footer.php") ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
	$(document).ready(function() {
		
		$(window).width(function() {
			if (window.innerWidth < 480) {
				
				$('#mes-mama').css({ "background": "url(img/bg/home-05-m.jpg) no-repeat center center", "background-size": "cover"});
				
			} else if (window.innerWidth > 480) {
				
				$('#mes-mama').css({ "background": "url(img/bg/home-05.jpg) no-repeat center center", "background-size": "cover"});
			};
		});
	});
	</script>

</body>
</html>
