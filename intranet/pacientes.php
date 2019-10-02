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
        <h3>PACIENTES</h3>
        <br>
    </div>
    <div class="container content pacientes">
        <br>
        <div class="row">
            <div class="col-md-9">
                <small>Mostrando x de x pacientes</small>
            </div>
            <div class="col-md-3">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar pacientes" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </div>       
        <br>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Paciente</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Centro de atención</th>
                        <th scope="col">Tratamiento</th>
                        <th scope="col">Fecha de ingreso</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Ficha</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- PACIENTE 1 -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Nicolas Cisneros</td>
                        <td>nicolas.cisneros@email.com</td>
                        <td>centro seleccionado</td>
                        <td>Tratamientos seleccionados</td>
                        <td>dd/mm/aa</td>
                        <td>estado del paciente</td>
                        <td>
                            <div class="col-md-6"><a href="" target="_blank"><i class="fas fa-download"></i></a></div>
                            <div class="col-md-6"><a href="" target="_blank"><i class="fas fa-file-pdf"></i></a></div>
                        </td>
                    </tr>
                    <!-- PACIENTE 2 -->
                    <tr>
                    <th scope="row">2</th>
                    <td>Persona</td>
                    <td>email@dom.com</td>
                    <td>centro seleccionado</td>
                    <td>tratameinto</td>
                    <td>dd/mm/aa</td>
                    <td>estado</td>
                    <td>
                        <div class="col-md-6"><a href="" target="_blank"><i class="fas fa-download"></i></a></div>
                        <div class="col-md-6"><a href="" target="_blank"><i class="fas fa-file-pdf"></i></a></div>
                    </td>
                    </tr>
                    <!-- PACIENTE 3 -->
                    <tr>
                        <th scope="row">3</th>
                        <td>Persona</td>
                        <td>email@dom.com</td>
                        <td>centro seleccionado</td>
                        <td>tratameinto</td>
                        <td>dd/mm/aa</td>
                        <td>estado</td>
                        <td>
                            <div class="col-md-6"><a href="" target="_blank"><i class="fas fa-download"></i></a></div>
                            <div class="col-md-6"><a href="" target="_blank"><i class="fas fa-file-pdf"></i></a></div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Persona</td>
                        <td>email@dom.com</td>
                        <td>centro seleccionado</td>
                        <td>tratameinto</td>
                        <td>dd/mm/aa</td>
                        <td>estado</td>
                        <td>
                            <div class="col-md-6"><a href="" target="_blank"><i class="fas fa-download"></i></a></div>
                            <div class="col-md-6"><a href="" target="_blank"><i class="fas fa-file-pdf"></i></a></div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Persona</td>
                        <td>email@dom.com</td>
                        <td>centro seleccionado</td>
                        <td>tratameinto</td>
                        <td>dd/mm/aa</td>
                        <td>estado</td>
                        <td>
                            <div class="col-md-6"><a href="" target="_blank"><i class="fas fa-download"></i></a></div>
                            <div class="col-md-6"><a href="" target="_blank"><i class="fas fa-file-pdf"></i></a></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <nav aria-label="navigation">
            <ul class="pagination justify-content-end">
                <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
            </ul>
        </nav>
        <br>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>