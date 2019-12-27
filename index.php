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

	<section id="carrera">
		<div data-type="parallax" data-speed="10">
			<h2>Producción y estilismo de moda</h2>
		</div>
					
	<div class="row-md-4 redes">
		<a href="https://www.instagram.com/sofiperezysantia/?hl=es-la"><i class="fab fa-instagram" style="color:white"></i></a>
		<a href="https://twitter.com/sofipys"><i class="fab fa-twitter" style="color:white"></i></a>
		<a href="https://www.facebook.com/sofiaperezysantia/"><i class="fab fa-facebook-f" style="color:white"></i></a>
		<a href="https://www.pinterest.es/sofipys/"><i class="fab fa-pinterest-p" style="color:white"></i></a>
		<a href="https://www.linkedin.com/in/sofiaperezysantia/?originalSubdomain=ar"><i class="fab fa-linkedin-in" style="color:white"></i></a>
	</div>

	</section>
	
	<section id="profileCard">
		<div class="row no-gutters">
			<div class="col">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
					  <div class="col-md-4">
						<img src="img/fotoperfil2.jpg" class="card-img" alt="fotoPerfil">
					  </div>
					  <div class="col-md-8">
						<div class="card-body">
						  <h5 class="card-title">Welcome!</h5>
						  <p class="card-text">Hi, I'm Sofía and I'm a fashion producer and stylist. In my webpage you can find some of my productions and magazine covers, ENJOY!!!</p>
						  <p class="card-text"><small class="text-muted">Last updated 2 days ago</small></p>
						</div>
					  </div>
					</div>
				  </div>
			</div>
			<div class="col">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-8">
							<div class="card-body">
							  <h5 class="card-title">Bienvenido!</h5>
							  <p class="card-text">Hola, soy Sofía y soy productora y estilista de moda. En mi página web vas a encontrar alguna de mis producciones y tapas de revista, QUÉ DISFRUTES!!!</p>
							  <p class="card-text"><small class="text-muted">Last updated 2 days ago</small></p>
							</div>
						  </div>
					  <div class="col-md-4">
						<img src="img/fotoperfil.jpg" class="card-img" alt="fotoPerfil">
					  </div>
					  
					</div>
				  </div>
			</div>
		</div>
		
	</section>


	<section>
		<h2 class="work">@sofiperezysantia</h2>
		<div>
			<?php

			function getRequest($urlParam){
				//Initialize cURL.
				$ch = curl_init();
				//Set the URL that you want to GET by using the CURLOPT_URL option.
				curl_setopt($ch, CURLOPT_URL, $urlParam);
				//Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				//Execute the request.
				$data = curl_exec($ch);
				//Close the cURL handle.
				curl_close($ch);
				//Transforma el texto plano en json
				return json_decode($data, true);
			}
	
			$ACCESS_TOKEN = "EAAe5EBgo4FEBAF66tswVWpcuJuAzgg1EVt12fuRZAmA7vOTetw4YIJeEkdaZAMBUMfgL3pzbtZBzf07rMqjxpAgSB2azJm30GiE85mHZAEkf1qbi6fPVX8eYA1euzAUppMs2c0wFfcXno9Kb0vuzpPrUnKBTxJxrzkByDb97B1HhxIND9O45wr6uUHZCp8hyn1qlZCHummaQZDZD";
			//The URL with parameters / query string.
			// $url = "https://graph.facebook.com/v5.0/me?fields=id&access_token=".$ACCESS_TOKEN;
	
			// $dataFbId = getRequest($url);
			// echo $dataFbId["id"];
	
			// $url = "https://graph.facebook.com/v5.0/me/accounts?fields=instagram_business_account&access_token=".$ACCESS_TOKEN;
			// $dataIgAccounts = getRequest($url);
			
			// echo json_encode($dataIgAccounts);
	
			// INSTAGRAM BUSSINESS ID 17841424977504511
	
			$url = "https://graph.facebook.com/v5.0/17841424977504511/media?access_token=".$ACCESS_TOKEN;
			$igFeedData = getRequest($url);
			$igFeed = $igFeedData["data"];
	
			for ($i=0; $i < count($igFeed) ; $i++) { 
				$url = "https://graph.facebook.com/v5.0/".$igFeed[$i]["id"]."?fields=media_url,media_type,timestamp&access_token=".$ACCESS_TOKEN;
				$igMedia = getRequest($url);
				$f = $igMedia["media_url"];
				$m = $igMedia["media_type"];
				if($m == "IMAGE")
					echo "<img width='100px' height='100px' src='$f'/>";
			}
	
			$url = "https://graph.facebook.com/v5.0/17841424977504511/stories?access_token=".$ACCESS_TOKEN;
			$igFeedData = getRequest($url);
			$igFeed = $igFeedData["data"];
			
	
			for ($i=0; $i < count($igFeed) ; $i++) { 
				$url = "https://graph.facebook.com/v5.0/".$igFeed[$i]["id"]."?fields=media_url,media_type,timestamp&access_token=".$ACCESS_TOKEN;
				$igMedia = getRequest($url);
				$f = $igMedia["media_url"];
				$m = $igMedia["media_type"];
				if($m == "IMAGE")
					echo "<img width='100px' height='100px' src='$f'/>";
			}
		?>
		</div>
	</section>


	

	<footer>
		<div class="form-style-8">
		<h2>Contact me!</h2>
		<form action="mailto:ftorregrossajeff@gmail.com" method="POST" id="formContacto">
		  <input type="text" name="field1" placeholder="Name" name="nombre" id="nombre" required/>
		  <input type="email" name="field2" placeholder="Email" maxlength="270" name="email" id="email" required/>
		  <textarea placeholder="Message" name="mensaje" id="mensaje"></textarea>
		  <input type="submit" value="Send" />
		</form>
		<div id="mensaje"></div>
	  </div>
	  </footer>





	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/jquery.simpleparallax.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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

	<script>
		$(document).ready(function(){
			ACCESS_TOKEN = "EAAe5EBgo4FEBAGOmrJq4OpamUFOpq6i8ZBUkNm5meKZANnbR4kh9wd4ZBEJTIFklQ5g2BZCRVIQqZAwV35iZCbcov45fxZBxWxeBAuZBmx0sftbEbPOAZAyrj2V8rPVe96xT8Xh3dZBXVZBqoyXBI60S5wakUa3HOfh015ZCysqlz05H8efeO2PHYHIcl6pXPBElVPZCQ1REnHZAZCWTQZDZD";
			$.ajax("https://graph.facebook.com/v5.0/me?fields=id&access_token="+ACCESS_TOKEN, function(data, status){
				alert("Data: " + data + "\nStatus: " + status);
			});
		
		})
	</script>	

</body>
</html>