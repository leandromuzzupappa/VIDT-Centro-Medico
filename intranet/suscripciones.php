<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>VIDT INTRANET</title>

    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <!--CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>
    <header class="container">
        <?php include('paginas/header.php')?>
    </header>
    <div class="container subheader">
        <h3>BIBLIOTECA</h3>
        <br>
    </div>
    <div class="container-fluid suscripcion-ph">
        <div class="row suscripcion offset-lg-1">
            <div class="col-md-4 col-lg-4 content"> <!--SUS 1-->
                <div class="text-center"> <!--IMAGENES-->
                    <i class="suscripto d-none" id="suscripcion-bookmark"></i>
                    <img class="img-fluid" src="http://via.placeholder.com/900x500" alt="">
                </div>
                <br>
                <div class="col-12"> <!--TITULO-->
                    <h4 class="text-center">Título</h4>
                </div>
                <div class="col-12"> <!--NOTICIAS-->
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas repudiandae blanditiis minus sapiente nihil recusandae est consequuntur iusto pariatur eaque ut laborum eum adipisci ab quisquam numquam accusantium, aliquid quia?</p>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn col-md-6 text-center" onclick="usuariosuscripto()" id="suscripcion-texto">Suscribirse</a>
                    <a href="#" class="btn col-md-6 text-center" data-toggle="modal" data-target="#popup1">Ver más</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 content"> <!--SUS 2-->
                <div class="text-center"> <!--IMAGENES-->
                    <img class="img-fluid" src="http://via.placeholder.com/900x500" alt="">
                </div>
                <br>
                <div class="col-12"> <!--TITULO-->
                    <h4 class="text-center">Título</h4>
                </div>
                <div class="col-12"> <!--NOTICIAS-->
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas repudiandae blanditiis minus sapiente nihil recusandae est consequuntur iusto pariatur eaque ut laborum eum adipisci ab quisquam numquam accusantium, aliquid quia?</p>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn col-md-6 text-center">Suscribirse</a>
                    <a href="#" class="btn col-md-6 text-center">Ver más</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 content"> <!--SUS 3-->
                <div class="text-center"> <!--IMAGENES-->
                    <img class="img-fluid" src="http://via.placeholder.com/900x500" alt="">
                </div>
                <br>
                <div class="col-12"> <!--TITULO-->
                    <h4 class="text-center">Título</h4>
                </div>
                <div class="col-12"> <!--NOTICIAS-->
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas repudiandae blanditiis minus sapiente nihil recusandae est consequuntur iusto pariatur eaque ut laborum eum adipisci ab quisquam numquam accusantium, aliquid quia?</p>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn col-md-6 text-center">Suscribirse</a>
                    <a href="#" class="btn col-md-6 text-center">Ver más</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 content"> <!--SUS 4-->
                <div class="text-center"> <!--IMAGENES-->
                    <img class="img-fluid" src="http://via.placeholder.com/900x500" alt="">
                </div>
                <br>
                <div class="col-12"> <!--TITULO-->
                    <h4 class="text-center">Título</h4>
                </div>
                <div class="col-12"> <!--NOTICIAS-->
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas repudiandae blanditiis minus sapiente nihil recusandae est consequuntur iusto pariatur eaque ut laborum eum adipisci ab quisquam numquam accusantium, aliquid quia?</p>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn col-md-6 text-center">Suscribirse</a>
                    <a href="#" class="btn col-md-6 text-center">Ver más</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 content"> <!--SUS 5-->
                <div class="text-center"> <!--IMAGENES-->
                    <img class="img-fluid" src="http://via.placeholder.com/900x500" alt="">
                </div>
                <br>
                <div class="col-12"> <!--TITULO-->
                    <h4 class="text-center">Título</h4>
                </div>
                <div class="col-12"> <!--NOTICIAS-->
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas repudiandae blanditiis minus sapiente nihil recusandae est consequuntur iusto pariatur eaque ut laborum eum adipisci ab quisquam numquam accusantium, aliquid quia?</p>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn col-md-6 text-center">Suscribirse</a>
                    <a href="#" class="btn col-md-6 text-center">Ver más</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 content"> <!--SUS 6-->
                <div class="text-center"> <!--IMAGENES-->
                    <img class="img-fluid" src="http://via.placeholder.com/900x500" alt="">
                </div>
                <br>
                <div class="col-12"> <!--TITULO-->
                    <h4 class="text-center">Título</h4>
                </div>
                <div class="col-12"> <!--NOTICIAS-->
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas repudiandae blanditiis minus sapiente nihil recusandae est consequuntur iusto pariatur eaque ut laborum eum adipisci ab quisquam numquam accusantium, aliquid quia?</p>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn col-md-6 text-center">Suscribirse</a>
                    <a href="#" class="btn col-md-6 text-center">Ver más</a>
                </div>
            </div>
    </div>
    <!-- Modal -->
    <div class="modal fade popups" id="popup1" tabindex="-1" role="dialog" aria-labelledby="popup1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="suscripcion-popup-portada">
                        <button style="color: white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <br>
                    <div class="popup-titulo">
                        <h2>Titulo de la suscripción</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="popup-copete">
                                <h4><strong>VIDT Oncología Radiante</strong> auspició el “III Best of ASTRO”, organizado por la Sociedad Argentina de Terapia Radiante Oncológica (SATRO) en el Hotel Meliá Buenos Aires, CABA. </h4>
                            </div>
                            <br>
                            <div class="popup-cuerpo">
                                <p>VIDT Oncología Radiante auspició el “III Best of ASTRO”, organizado por la Sociedad Argentina de Terapia Radiante Oncológica (SATRO) en el Hotel Meliá Buenos Aires, CABA. <br><br>

                                Este evento se realiza con licencia de American Society of Radiation Oncology “ASTRO” con el objetivo de difundir los trabajos con mejor puntuación del “ASTRO Annual Meeting” del año 2017, San Diego, California, USA.<br><br>
                            </p>
                            </div>
                        </div>
                        <div class="col md-2">
                            <div><a href="" target="_blank" class="btn btn-success"> Descargar contenido</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function usuariosuscripto() {
            var element = document.getElementById("suscripcion-bookmark");
            element.classList.remove("d-none");
            element.classList.add("d-block")
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>