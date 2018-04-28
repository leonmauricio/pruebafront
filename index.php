<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio Front End de Navent</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div class="wrapper">
		<div class="slider-overlay">
			<i class="fa fa-heart" aria-hidden="true"></i>
			<div class="destacado">
				Super Destacado
			</div>
			<div class="owl-carousel">
				<div>
					<img src="assets/img/480.jpg">
				</div>
				<div>
					<img src="assets/img/520.jpg">
				</div>
				<div>
					<img src="assets/img/600.jpg">
				</div>
			</div>
			<div class="price_mobile">
				<span>
					U$D
				</span>
				<span class="price_editable" contenteditable="true"></span>
			</div>
			<div class="features_mobile">
				<span>
					380 m&sup2;
				</span>
				<span>
					3 Dormitorios
				</span>
				<span>
					2 Baños
				</span>
				<span>
					2 Cocheras
				</span>
			</div>
		</div>
		<div class="info">
			<div class="info_text">
				<h1 class="title">Si vas a necesitar un pasaje de Lorem Ipsum, necesit&aacute;s estar seguro</h1>
				<span class="location">
					<i class="fas fa-map-marker-alt"></i>
					<b>Juan Fransisco Segu&iacute; 3900</b>, Palermo chico, Palermo. Lorem ipsum dolor sit amet
				</span>
				<p class="description">
					Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta)
				</p>
				<div class="price_desktop">
					<span>
						U$D
					</span>
					<span class="price_editable" contenteditable="true"></span>
					<span class="price_meters">$/m&sup2;</span>
					<span class="result"></span>
				</div>
			</div>
			<div class="features_desktop">
				<span class="meters">
					380 m&sup2;
				</span>
				<span>
					3 Dormitorios
				</span>
				<span>
					2 Baños
				</span>
				<span>
					2 Cocheras
				</span>
			</div>
			<a class="contacto" href="#" data-toggle="modal" data-target="#mailModal">
				CONTACTAR
			</a>
		</div>
		<div id="mailModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Para ser contactado, por favor ingrese su direcci&oacute;n de correo electr&oacute;nico.</h4>
					</div>
					<div class="modal-body">
						<form action="" class="form">
							<div class="form-group">
						    	<label class="form-label" for="email">E-mail</label>
						    	<input id="email" name="email" class="form-input" type="text"/>
						    	<span class="error_message">
						    		Por favor ingrese un mail válido
						    	</span>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<a href="#" class="contacto enviar">ENVIAR</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="http://code.jquery.com/jquery-3.3.1.slim.js"
  integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/site.js"></script>

</body>
</html>