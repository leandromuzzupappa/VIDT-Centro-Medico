<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106977163-1"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106977163-1');
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<header class="animated fadeInDown">
		<div class="container">
			<div class="logo"><a href="index.php"><img src="img/VIDT.svg" alt="VIDT Oncología Radiante"/></a></div>
			<nav>
				<div class="phone"><span class="hidden-xs">Central Única de</span> Turnos <a href="tel:5278-6005">5278-6005</a></div>
				<a href="#1" class="btn-menu visible-xs" data-toggle="modal" data-target="#MenuMovil"><img src="img/menu.svg" alt=""></a>
				<ul class="navy hidden-xs">
					<li><a href="#1">Institucional <i><img src="img/header-i.svg"/></i></a>
						<div class="subnavy animated fadeIn">
							<div class="row">
								<div class="col-sm-6">
									<a href="institucional-nosotros.php">Quienes somos</a>
									<a href="institucional-rse.php">Responsabilidad Social Empresaria</a>
									<a href="institucional-calidad.php">Políticas de Calidad</a>
								    <a href="institucional-centros.php">Centros de atención</a>
								</div>
								<div class="col-sm-6">
									<a href="institucional-certificaciones.php">Certificaciones e Instituciones asociadas</a>
									<a href="institucional-rrhh.php">RRHH</a>
									<a href="noticias.php">Noticias</a>
								</div>
							</div>
						</div>
					</li>
                    <li><a href="#1">Médicos <i><img src="img/header-i.svg"/></i></a>
						<div class="subnavy animated fadeIn">
							<div class="row">
								<div class="col-sm-6">
									<a href="medicos-staff.php">Staff Médico</a>
									<a href="medicos-residencia.php">Residencia</a>
                                </div>
								<div class="col-sm-6">
									<a href="medicos-extranet.php">Portal Médico </a>
								</div>
							</div>
						</div>
					</li>
					<li><a href="advanced.php">Advanced Radiotherapy <sup>®️</sup></a></li>
					<li><a href="#1">Tratamientos <i><img src="img/header-i.svg"/></i></a>
						<div class="subnavy animated fadeIn">
							<div class="row">
								<div class="col-sm-6">
									<a href="tratamiento-sbrt.php">SBRT</a>
									<a href="tratamiento-igrt.php">IGRT</a>
									<a href="tratamiento-imrt.php">IMRT Intensidad modulada</a>
									<a href="tratamiento-rec.php">Radiocirugía Estereotáctica cerebral</a>
								</div>
								<div class="col-sm-6">
									<a href="tratamiento-rct.php">Radioterapia conformacional tridimensional</a>
									<a href="tratamiento-tbi.php">TBI</a>
									<a href="tratamiento-ts.php">TS total Skin</a>
									<a href="tratamiento-bat.php">Braquiterapia alta tasa</a>
								</div>
							</div>
						</div>
					</li>
					<li><a href="pacientes.php">Pacientes</a></li>
					<li><a href="contacto.php">Contacto</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>



<div class="modal fade menu-movil" id="MenuMovil" tabindex="-1" role="dialog" aria-labelledby="Menu">
<div class="logo"><a href="index.php"><img src="img/VIDT.svg" alt="VIDT Oncología Radiante"/></a></div>
<ul>
					<li><a id="alpha" data-toggle="collapse" data-target="#item1">Institucional <i class="fas fa-angle-down"></i></a>
						<div class="menu__collapsible animated fadeIn collapse" id="item1">

									<a href="institucional-nosotros.php">Quienes somos</a>
									<a href="institucional-rse.php">Responsabilidad Social Empresaria</a>
									<a href="institucional-calidad.php">Políticas de Calidad</a>
									<a href="institucional-centros.php">Centros de atención</a>
									<a href="institucional-certificaciones.php">Certificaciones e Instituciones asociadas</a>
									<a href="institucional-rrhh.php">RRHH</a>
						</div>
					</li>
                    <li><a id="beta" data-toggle="collapse" data-target="#item2">Médicos <i class="fas fa-angle-down"></i></a>
						<div class="menu__collapsible animated fadeIn collapse" id="item2">

									<a href="medicos-staff.php">Staff Médico</a>
									<a href="medicos-residencia.php">Residencia</a>
									<a href="medicos-extranet.php">Portal Médico </a>
						</div>
					</li>
					<li><a href="advanced.php">Advanced Radiotherapy <sup>®️</sup></a></li>
					<li><a id="bravo" data-toggle="collapse" data-target="#item3">Tratamientos <i class="fas fa-angle-down"></i></a>
						<div class="menu__collapsible animated fadeIn collapse" id="item3">
									<a href="tratamiento-sbrt.php">SBRT</a>
									<a href="tratamiento-igrt.php">IGRT</a>
									<a href="tratamiento-imrt.php">IMRT Intensidad modulada</a>
									<a href="tratamiento-rec.php">Radiocirugía EstereoTACTICA cerebral</a>
									<a href="tratamiento-rct.php">Radioterapia conformacional tridimensional</a>
									<a href="tratamiento-tbi.php">TBI</a>
									<a href="tratamiento-ts.php">TS total Skin</a>
									<a href="tratamiento-bat.php">Braquiterapia alta tasa</a>

							</div>

					</li>
					<li><a href="pacientes.php">Pacientes</a></li>
					<li><a href="contacto.php">Contacto</a>
					</li>
					
				</ul>
</div>
<script>
$(document).ready(function(){
    $("#alpha").click(function(){
        $("i", this).toggleClass("fa-angle-down fa-angle-up");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#beta").click(function(){
        $("i", this).toggleClass("fa-angle-down fa-angle-up");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#bravo").click(function(){
        $("i", this).toggleClass("fa-angle-down fa-angle-up");
    });
});
</script>

<!--<div class="chat-bubble animated fadeInUp delay3">
<div class="message animated fadeInUp delay45">¿Puedo ayudarte en algo?</div>
	<span></span>
	<div class="avatar">
	<img src="img/atencion.jpg"/>
	</div>
</div>-->
