<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=David+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <title>Centro Educativo Integral Latinoamericano - Bachillerato por Ciclos</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #aa140c;">
        <div class="container">
            <a class="navbar-brand mx-auto mr-md-auto" href="#">
                <img src="img/logop-nombre2.png" alt="Logo del Centro Educativo Integral Latinoamericano">   
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-center align-items-center">
                <li class="nav-item active">
                    <a class="nav-link" href="#carousel">¿Quiénes Somos?</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#convenios">Convenios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inscripciones</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Noticias</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" target="_blank">Aula Virtual</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" target="_blank">Correo Institucional</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>

              </ul>
            </div>
        </div>
    </nav>
    <!-- Quiénes somos -->
    <main>
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="img/ceil.jpg" class="d-block w-100" alt="Graduación 2019">
              </div>
              <div class="carousel-item">
                <img src="img/book.jpg" class="d-block w-100" alt="Libros de estudio">
              </div>
              <div class="carousel-item">
                <img src="img/graduation.jpg" class="d-block w-100" alt="Graduación">
              </div>
              <div class="overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 offset-md-5 text-center text-md-right">
                            <h1 class="d-none d-sm-block">¿Quiénes Somos?</h1>
                            <p class="d-sm-block">
                                Mediante la resolución 06001 de enero de 2020, el Centro Educativo Integral 
                                Latinoamericano ofrece el programa de Bachillerato Formal para adultos con la facilidad de terminar su formación académica en corto plazo.
                            </p>
                            <a href="#contacto" class="btn btn-outline-light">Contáctenos</a>
                            <!-- button class="btn btn-send" data-toggle="modal" data-target="#modalTickets">Inscripciones</button> -->
                            <button type="button" class="btn btn-send" data-container="body" data-toggle="popover" data-placement="top" title="Próximamente..." data-content="Estamos trabajando para brindarle un mejor servicio.">Inscripciones</button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </main>
    <!-- Convenios -->
    <section class="mt-4" id="convenios">
        <div class="container">
            <div class="row mb-4">
				<div class="col text-center text-uppercase">
                    <small>Conozca nuestros</small>
					<h2>Convenios</h2>
				</div>
			</div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="img/funcodes.png" class="card-img" alt="FUNCODES">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">FUNCODES</h3>
                                    <p class="card-text">Actualmente, la alianza con la Fundación Conocimiento para el Desarrollo (FUNCODES) nos permite ofrecer programas de capacitación para Pruebas Saber (ICFES).</p>
                                    <p class="card-text">Contamos con valiosas e indispensables herramientas y calidad profesional para la adecuada preparación de las Pruebas Saber.</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Accesos -->
    <section class="mt-4">
        <div class="container">
			<div class="row mb-4">
				<div class="col text-center text-uppercase">
					<small>Ingrese a</small>
					<h2>Nuestras Plataformas</h2>
				</div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="card">
                        <a href="#" target="_blank">
                            <img src="img/email.jpg" class="card-img-top" alt="Correo Institucional">
                        </a>
                        <div class="card-body">
                            <p class="card-text">Correo Institucional</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <div class="card">
                        <a href="#" target="_blank">
                            <img src="img/virtual.jpg" class="card-img-top" alt="Aula Virtual">
                        </a>
                        <div class="card-body">
                            <p class="card-text">Aula Virtual</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contacto -->
    <section class="mt-4" id="contacto">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-uppercase text-center">
                    <h2>Contacto</h2>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-10 col-lg-8 offset-md-1 offset-lg-2 pt-2 pb-2">
					<form action="contacto.php" method="POST">
                        <?php
                            if(isset($_GET['error'])){
                                if($_GET['error'] == 'no'){
                                    echo '<div class="p-3 mb-2 bg-success text-white">La información ha sido enviada correctamente, nos pondremos en contacto con usted.</div>';
                                }
                                else
                                {
                                    echo '<div class="p-3 mb-2 bg-danger text-white">Hubo un error, inténtelo nuevamente.</div>';
                                }
                            }
                        ?>
						<div class="form-row">
							<div class="form-group col-12 col-md-6">
								<input type="text" name="nombre" class="form-control" placeholder="Nombre" required pattern="[A-Za-z]+">
							</div>
							<div class="form-group col-12 col-md-6">
								<input type="text" name="apellido" class="form-control" placeholder="Apellido" required pattern="[A-Za-z]+">
							</div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input type="number" name="tel" class="form-control" placeholder="Teléfono" required pattern="[0-9]+">
                            </div>
                        </div>
						<div class="form-row">
							<div class="form-group col">
                                <textarea name="mensaje" class="form-control form-control-lg" placeholder="¿Sobre qué desea hablar?" required></textarea>
                                <small class="form-text text-muted">Todos los campos son obligatorios.</small>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<button type="submit" class="btn btn-success btn-block">Enviar</button>
							</div>
						</div>
					</form>
				</div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer mt-4 pb-4 pt-4">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-12 col-md text-md-left pb-3">
                    <img src="img/logo.png" alt="Logo del Centro Educativo Integral Latinoamericano">
                </div>
                <div class="col-12 col-md text-md-right">
                    <div class="icons">
                        <a href="https://www.facebook.com/ceilcentroeducativo" target="_blank">
                            <i class="icon-facebook2"></i>
                        </a>
                        <a href="https://www.instagram.com/ceilcentroeducativo/" target="_blank">
                            <i class="icon-instagram"></i>
                        </a>
                    </div>
                    <p class="mb-1">Teléfono: 57(1) 1234567</p>
                    <p class="mb-1">Móvil: +57 300-1234567</p>
                    <p class="mb-1">Skype: usuarioskype</p>
                    <p class="mb-1">Email: ejemplo@ceil.edu.co</p>
                    <p class="mb-1">Calle 123 No. 45-67 Piso 2 Bogotá, Colombia</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>