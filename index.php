<?php 

    require_once 'includes/conexion.php';
    require_once 'includes/helpers.php';

?>
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

    <hr class="roja">
    <hr class="morada">

    <!-- Quiénes somos -->
    <main>
        <div id="carousel" class="anchor carousel slide carousel-fade" data-ride="carousel" data-pause="false">
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
                                <h1>¿Quiénes Somos?</h1>
                                <p>
                                    Mediante la resolución 06001 de enero de 2020, el Centro Educativo Integral 
                                    Latinoamericano ofrece el programa de Bachillerato Formal para adultos con la facilidad de terminar su formación académica en corto plazo.
                                </p>
                                <a href="#contacto" class="btn btn-outline-light">Contáctanos</a>
                                <button class="btn btn-send" data-toggle="modal" data-target="#modalMatricula">Matricúlate aquí</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Accesos -->
    <section class="mt-4">
        <div class="container">
			<div class="row mb-4">
				<div class="col text-center text-uppercase">
					<small>Ingresa a</small>
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
    <section class="anchor mt-4" id="contacto">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-uppercase text-center">
                    <h2>Contacto</h2>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-10 col-lg-8 offset-md-1 offset-lg-2 pt-2">
					<form action="contacto.php" method="POST">
                        <?php if(isset($_SESSION['contacto_exito'])): ?>
                            <div class="p-3 mb-2 alert alert-success"><?=$_SESSION['contacto_exito']?></div>
                        <?php elseif(isset($_SESSION['contacto_error'])): ?>
                            <div class="p-3 mb-2 alert alert-error"><?=$_SESSION['contacto_error']?></div>
                        <?php endif; ?>
						<div class="form-row">
							<div class="form-group col-12 col-md-6">
								<input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
							</div>
							<div class="form-group col-12 col-md-6">
								<input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
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
                                <textarea name="mensaje" class="form-control form-control-lg" placeholder="¿Sobre qué deseas hablarnos?" required></textarea>
                                <small class="form-text text-muted">Todos los campos son obligatorios.</small>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<button type="submit" class="btn btn-success btn-block">Enviar</button>
							</div>
						</div>
                    </form>
                    <?php borrarAlertas(); ?>
				</div>
            </div>
        </div>
    </section>

    <hr class="roja">
    <hr class="morada">
    
    <!-- Footer -->
    <footer class="footer pb-4 pt-4">
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
                    <p class="mb-1">3057045642 - 3057242954</p>
                    <p class="mb-1">coordinacion@ceil.edu.co - rectoria@ceil.edu.co</p>
                    <p class="mb-1">Diagonal 47A #53A - 95, Barrio Venecia</p>
                    <p class="mb-1">Bogotá, Colombia</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal -->
	<div class="modal fade" id="modalMatricula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			 <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Matrículas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
             </div>
             
			 <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    <a href="descarga.php" class="alert-link">Descarga el archivo aquí</a>, diligéncialo y envíalo escaneado al correo electrónico coordinacion@ceil.edu.co
                </div>
			 </div>
			 <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			 </div>
		  </div>
		</div>
	</div>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>