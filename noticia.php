<?php
    include_once('./includes/data.php');

    function getNota($var){
        return ($var['id'] === (int) $_GET['nota']);
    }

    if(isset($_GET['nota'])){
        $nota = array_filter($data, 'getNota');
    }
    $nota = array_slice($nota, 0);

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<title><?php echo ($nota[0]['titulo']) ? $nota[0]['titulo'] : 'VIDT Oncología Radiante'; ?></title>
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
				<h1 class="animated fadeInRight delay1">
                    <small style="color: #fff;"><?php echo $nota[0]['fecha']; ?></small>
                    <?php echo ($nota[0]['titulo']) ? $nota[0]['titulo'] : 'No se encontró la noticia'; ?></h1>
				<br>
				<br>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container">
		<?php if($nota[0]): ?>
			<div class="col-sm-offset-1 col-sm-10 news-item">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-responsive" src="<?php echo ($nota[0]['foto']) ? $nota[0]['foto'] : 'http://via.placeholder.com/350x250'; ?>" />
                        <hr>
                        <p><?php echo $nota[0]['texto']; ?></p>
                        <hr>

                        <?php if(!empty($nota[0]['url_boton'])): ?>
                        <h4>Descargas</h4>

                        <a class="btn btn-link" href="<?php echo $nota[0]['url_boton']; ?>"><?php echo $$nota[0]['texto_boton']; ?></a>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
		<?php endif; ?>
		</div>
	</div>
	<?php include("body-destacado-2.php") ?>

	<?php include("body-footer.php") ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
