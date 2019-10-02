<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>VIDT INTRANET</title>

    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

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
        <h3>GALERIA DE VIDEOS</h3>
        <br>
    </div>
    <div class="container">
        <div class="row galeria content">
            <div class="col-md-8 text-center embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PLDj29utVpBlVjH7YSkwGPJK4wiF1V46tX" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <div class="galeria-titulo">
                    <br>
                    <h5>VIDT - playlist</h5>
                    <p>Videos 1/5</p>
                    <br>
                </div>
                <div class="galeria-videos">
                    <div class="row"> <!--VIDEO 1-->
                        <div class="col-md-1 numero-video"> 1</div>
                        <div class="col-md-4 video-iframe"><iframe src="https://www.youtube.com/embed/1kz6hNDlEEg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-7 titulo-video">Titulo del video</div>
                    </div>
                    <div class="row"> <!--VIDEO 2-->
                        <div class="col-md-1 numero-video"> 1</div>
                        <div class="col-md-4 video-iframe"><iframe src="https://www.youtube.com/embed/1kz6hNDlEEg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-7 titulo-video">Titulo del video</div>
                    </div>
                    <div class="row"> <!--VIDEO 1-->
                        <div class="col-md-1 numero-video"> 1</div>
                        <div class="col-md-4 video-iframe"><iframe src="https://www.youtube.com/embed/1kz6hNDlEEg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-7 titulo-video">Titulo del video</div>
                    </div>
                    <div class="row"> <!--VIDEO 2-->
                        <div class="col-md-1 numero-video"> 1</div>
                        <div class="col-md-4 video-iframe"><iframe src="https://www.youtube.com/embed/1kz6hNDlEEg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-7 titulo-video">Titulo del video</div>
                    </div>


                </div>
            </div>
            </div>
            <br><br>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>