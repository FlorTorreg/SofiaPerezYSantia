<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sofia Perez Y Santia</title>

	<script src="https://kit.fontawesome.com/2b43fbad9f.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:100|Poiret+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Limelight&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<header>
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-8 container-fluid col-8">
					<h1>SOFÍA PEREZ Y SANTÍA</h1>
				</div>
				<div class="col-md-4 col-4">
					<div class="row">
						<div class="col-12">
							<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: white">
							<a class="navbar-brand" href="#"></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item active">
											<a class="nav-link" href="index.php">Me<span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="work.php">Work</a>
										</li>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="contacto.php">Contact Me</a>
										</li>	
									</ul>
								</div>
							</nav>
						</div>
				</div>
			</div>
		</div>		
	</header>

    <section id="contactMe">
		<div class="form-style-8">
			<h2>Contact me!</h2>
			<div id="formulario">
				<form id="frm">
					<input type="text" placeholder="Name" name="nombre" id="nombre" required/>
					<input type="email" placeholder="Email" name="email" id="email" required/>
					<textarea placeholder="Message" name="comentario" id="comentario"></textarea>
					<input type="submit" value="Send" />
				</form>
			<div id="mensaje"></div>
			</div>
		</div>
		  <div id="redesContact">
		  	<a href="https://www.instagram.com/sofiperezysantia/?hl=es-la"><i class="fab fa-instagram" style="color:black"></i></a>
			<a href="https://twitter.com/sofipys"><i class="fab fa-twitter" style="color:black"></i></a>
			<a href="https://www.facebook.com/sofiaperezysantia/"><i class="fab fa-facebook-f" style="color:black"></i></a>
			<a href="https://www.pinterest.es/sofipys/"><i class="fab fa-pinterest-p" style="color:black"></i></a>
			<a href="https://www.linkedin.com/in/sofiaperezysantia/?originalSubdomain=ar"><i class="fab fa-linkedin-in" style="color:black"></i></a>
		  </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery.simpleparallax.js"></script>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		//$(document).on("ready", function(){
		$(document).ready(function(){
			
			$("form").submit(function(evento){
			//evitar el evento por default (de HTML)
			evento.preventDefault();

			//Borramos el contenido del contenedor del Mensaje
			$("#mensaje").html("");

			//Es necesario enviar a PHP una cadena de acurdo al siguiente formato: "enviarDatos.php?nombre=Jose&apellido=Perez&email=mail@mail"

			//aplicamos serialize()
			var datos = $(this).serialize();
			console.log(datos);

			//Enviamos los datos (a php) por medio de AJAX
			$.ajax({
				url:"enviarDatos.php",
				method:"POST",
				data:datos,
				/*beforeSend: function(){
                        $("#mensaje").html("Procesando, espere por favor...");
                },*/
				success:function(respuesta){
					//$("#mensaje").html("");
					//console.log(respuesta);
					$('#mensaje').append(respuesta);
					$('#mensaje').addClass("alert alert-success");
				},
				error:function(){
					//$("#mensaje").html("");
					$('#mensaje').append("Error en el envio");
					$('#mensaje').addClass("alert alert-danger");
				}
			});
		    });
		});

	</script>
</body>
</html>