<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luna Verde</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
   <link rel="stylesheet"href="styles.css">
  <script defer src="script.js"></script>
</head>
<body>
  <header>
   
<nav>
  <a href="index.php" class="logo-link">
    <img src="view/images/logo.png" alt="Logo Luna Verde" style="height: 40px; vertical-align: middle; margin-right: 4px;">
    <div class="nav-left">LUNA VERDE</div>
  </a>

  <div class="nav-right">
    <a href="#inicio">Inicio</a>
    <a href="#catalogo">Catalogo</a>
	<a href="carrito.php">🛒</a>

    <?php if (isset($_SESSION['usuario'])): ?>
      <span style="color: white; margin: 0 10px;">Hola, <?= htmlspecialchars($_SESSION['nombre']) ?></span>
      <a href="logout.php" style="color: white; font-weight: bold;">Cerrar sesión</a>
    <?php else: ?>
      <a href="login.html">👤</a>
    <?php endif; ?>

  </div>
</nav>	
  </header>

  <main>
	
    <section id="inicio" class="hero">
      <h1><span>LUNA</span><span class="letra-v">V</span><span>ERDE</span></h1>
      <p>
        Encuentra tus productos de cosmética y maquillaje de interés, <br />
        desde labiales, bases, sombras, brochas, hasta accesorios de belleza y mucho más.
      </p>
    </section>

    <section id="catalogo" class="destacados">
      <h2>Productos Destacados</h2>
      <p>Conoce nuestros productos más vendidos y mejor valorados.</p>

      <div class="cards">
        <div class="card">
          <img src="view/images/baseli.png" alt="Base líquida HD" />
          <a class="product-title" href="base.html">Base líquida HD "Piel Perfecta"</a>
          <a class="category" href="#">cosmeticos</a>
          <p>Cobertura media-alta, acabado natural, FPS 15.</p>
		  <div class="producto" data-nombre="Base líquida HD" data-precio="39.99">
			<p>Precio: $39.999</p>
			<button class="agregar-carrito">Agregar al carrito</button>

		</div>
          <div class="stars">⭐⭐⭐⭐⭐</div>
        </div>

        <div class="card">
          <img src="view/images/correctorflu.jpg" alt="Corrector fluido" />
          <a class="product-title" href="corrector.html">Corrector fluido "Toque de Luz"</a>
          <a class="category" href="#">cosmeticos</a>
          <p>Ilumina ojeras y cubre imperfecciones.</p>
		  <div class="producto" data-nombre="Corrector fluido" data-precio="29.99">
			<p>Precio: $29.999</p>
			<button class="agregar-carrito">Agregar al carrito</button>
		</div>
          <div class="stars">⭐⭐⭐⭐⭐</div>
        </div>

        <div class="card">
          <img src="view/images/ruvor.png" alt="Polvo compacto" />
          <a class="product-title" href="polvo.html">Rubor en polvo "Sonrisa Rosa"</a>
          <a class="category" href="#">cosmeticos</a>
          <p>Tonos rosados para un look fresco</p>
		  <div class="producto" data-nombre="Rubor en polvo" data-precio="19.99">
			<p>Precio: $19.999</p>
			<button class="agregar-carrito">Agregar al carrito</button>
		</div>
          <div class="stars">⭐⭐⭐⭐⭐</div>
        </div>
        
		<div class="card">
		<img src="view/images/delineador_liquido.jpg" alt="Delineador líquido" />
		<a class="product-title" href="delineador_liquido.html">Delineador líquido "Precisión Total"</a>
		<a class="category" href="#">Maquillaje</a>
		<p>Trazo intenso y duradero</p>
		<div class="producto" data-nombre="Delineador líquido Precisión Total" data-precio="29.99">
			<p>Precio: $29.999</p>
			<button class="agregar-carrito">Agregar al carrito</button>
		</div>
		<div class="stars">⭐⭐⭐⭐⭐</div>
		</div>

		<div class="card">
		<img src="view/images/brillo_labial.jpg" alt="Brillo labial" />
		<a class="product-title" href="brillo_labial.html">Brillo labial "Luz Radiante"</a>
		<a class="category" href="#">Maquillaje</a>
		<p>Labios hidratados con brillo intenso</p>
		<div class="producto" data-nombre="Brillo labial Luz Radiante" data-precio="18.00">
			<p>Precio: $18.000</p>
			<button class="agregar-carrito">Agregar al carrito</button>
		</div>
		<div class="stars">⭐⭐⭐⭐⭐</div>
		</div>

		<div class="card">
			<img src="view/images/mascara.jpg" alt="Máscara de pestañas" />
			<a class="product-title" href="mascara.html">Máscara de pestañas "Volumen Extremo"</a>
			<a class="category" href="#">Cosméticos</a>
			<p>Para unas pestañas más largas y voluminosas</p>
			<div class="producto" data-nombre="Máscara de pestañas Volumen Extremo" data-precio="39.99">
				<p>Precio: $39.999</p>
				<button class="agregar-carrito">Agregar al carrito</button>
			</div>
			<div class="stars">⭐⭐⭐⭐⭐</div>
		</div>

		<div class="card">
			<img src="view/images/sombra.jpg" alt="Paleta de sombras" />
			<a class="product-title" href="sombra.html">Paleta de sombras "Tonos tierra"</a>
			<a class="category" href="#">Cosméticos</a>
			<p>Perfecta para looks naturales o intensos</p>
			<div class="producto" data-nombre="Paleta de sombras Tonos tierra" data-precio="79.99">
				<p>Precio: $79.999</p>
				<button class="agregar-carrito">Agregar al carrito</button>
			</div>
			<div class="stars">⭐⭐⭐⭐⭐</div>
		</div>

       <div class="card">
		<img src="view/images/limpiador_facial.jpg" alt="Limpiador facial" />
		<a class="product-title" href="limpiador_facial.html">Limpiador facial "Piel Radiante"</a>
		<a class="category" href="#">Facial</a>
		<p>Limpieza profunda para todo tipo de piel</p>
		<div class="producto" data-nombre="Limpiador facial Piel Radiante" data-precio="25.99">
			<p>Precio: $25.999</p>
			<button class="agregar-carrito">Agregar al carrito</button>
		</div>
		<div class="stars">⭐⭐⭐⭐</div>
		</div>
		<div class="card">
		<img src="view/images/exfoliante_facial.jpg" alt="Exfoliante facial" />
		<a class="product-title" href="exfoliante_facial.html">Exfoliante facial "Suavidad Total"</a>
		<a class="category" href="#">Facial</a>
		<p>Elimina impurezas y células muertas</p>
		<div class="producto" data-nombre="Exfoliante facial Suavidad Total" data-precio="22.90">
			<p>Precio: $22.900</p>
			<button class="agregar-carrito">Agregar al carrito</button>
		</div>
		<div class="stars">⭐⭐⭐⭐</div>
		</div>
		
    </section>

	<script>
  document.querySelectorAll('.agregar-carrito').forEach(button => {
    button.addEventListener('click', function() {
      const productoDiv = this.closest('.producto');
      const nombre = productoDiv.getAttribute('data-nombre');
      const precio = productoDiv.getAttribute('data-precio');

      // Enviar datos al servidor para agregar al carrito
      fetch('agregar_carrito.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `nombre=${encodeURIComponent(nombre)}&precio=${encodeURIComponent(precio)}`
      })
      .then(response => response.text())
      .then(data => {
        if(data.trim() === 'ok'){
          alert(`Producto "${nombre}" agregado al carrito.`);
        } else {
          alert('Error al agregar el producto.');
        }
      })
      .catch(() => alert('Error de conexión.'));
    });
  });
</script>


    <a href="https://api.whatsapp.com/send?phone=573229425702" target="_blank" class="whatsapp">💬</a>
  </main>
  
 <!--============================
=            Footer            =
=============================-->

	<footer>
		<section id="goodbye" class="text-center">
			<div class="container">
				<h3> ACERCA DE NOSOTROS </h3>
				<div class="row">

					<div class="col-lg-6 col-md-6 goodbye-info">
						<div class="accordion" id="accordionFlushExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingOne">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#flush-collapseOne" aria-expanded="false"
										aria-controls="flush-collapseOne">
										¿Quienes somos?
									</button>
								</h2>
								<div id="flush-collapseOne" class="accordion-collapse collapse"
									aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">Nuestro proyecto formativo está conformado por dos participantes,
										quienes somos estudiantes de la Uniagustiniana.
										Hemos estado analizando, desarrollando y diseñando este proyecto
										durante un proceso académico de 4 semestres.
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#flush-collapseTwo" aria-expanded="false"
										aria-controls="flush-collapseTwo">
										¿Cual es el alcance del proyecto formativo?
									</button>
								</h2>
								<div id="flush-collapseTwo" class="accordion-collapse collapse"
									aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">Nuestro principal objetivo es la creación de un proyecto
										enfocado en el desarrollo de una página web para la venta de productos cosméticos,
										como: maquillaje, cremas faciales, labiales, sombras, brochas, entre otros artículos de belleza.
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#flush-collapseThree" aria-expanded="false"
										aria-controls="flush-collapseThree">
										¿Cuales son los productos que ofrece nuestra pagina web?
									</button>
								</h2>
								<div id="flush-collapseThree" class="accordion-collapse collapse"
									aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">Principalmente nos enfocamos en la venta de productos cosméticos,
										ya sean maquillaje, cuidado facial, cuidado corporal, entre otros.</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#flush-collapseFour" aria-expanded="false"
										aria-controls="flush-collapseFour">
										¿Cual son los lugares de ventas de nuestros productos?
									</button>
								</h2>
								<div id="flush-collapseFour" class="accordion-collapse collapse"
									aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">Por el momento nuestro sistemna operativo solo es a
										traves de la WEB
										y a nivel de Bogota D.c, estamos trabajando para el un futuro expandir nuestros
										servicios.<code><i class="bi bi-heart"></i></code>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingFive">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#flush-collapseFive" aria-expanded="false"
										aria-controls="flush-collapseFive">
										¿Que tipo de pagos son posibles?
									</button>
								</h2>
								<div id="flush-collapseFive" class="accordion-collapse collapse"
									aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">Contamos con diferentes metodos de pago, como: PSE,
										Nequi, Daviplata, Tarjetas Credito o Debito y Trasferencias Bancarias.
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingSix">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#flush-collapseSix" aria-expanded="false"
										aria-controls="flush-collapseSix">
										¿Tienes algunas sugerencia o queja?
									</button>
								</h2>
								<div id="flush-collapseSix" class="accordion-collapse collapse"
									aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label">A continuacion
												puedes enviarnos un correo electronico con tu opinion.<br>Tu
												correo</label>
											<input type="email" class="form-control" id="exampleFormControlInput1"
												placeholder="name@gmail.com">
										</div>
										<div class="mb-3">
											<label for="exampleFormControlTextarea1" class="form-label">Tu
												comentario</label>
											<textarea class="form-control" id="exampleFormControlTextarea1"
												rows="3"></textarea>
											<button type="submit" class="btn btn-primary">Enviar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 goodbye-info">
						<div class="card" style="width: 18rem;">
							<img src="view/images/home/card.gif" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Nuestro Equipo</h5>
								<p class="card-text">¿Quieres conocer mas sobre los participantes de nuestro proyecto
									formativo?
									solo da clic aqui:
								</p>
								<a href="about-us.html" class="btn btn-primary">Explorar</a>
							</div>
						</div>
					</div>


	</footer>

	<footer>
		<!-- Container Start -->
		<section id="terms" class="text-left">
			<div class="container">
				<div class="row">
					<h5>INFORMACION ADICIONAL</h5>

					<div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
						<!-- About -->
						<div class="block about">
							<!-- footer logo -->
							<a class="navbar-brand logoP" href="index.php"><img
									src="view/images/logo.png" class="logot" alt="Logo"style="height: 70px; width: auto;"></a>
							<!-- description -->
							<p class="alt-color">El proyecto LunaVerde está enfocado en el mundo del maquillaje y el cuidado personal, 
								buscando satisfacer las necesidades estéticas de nuestros clientes. 
								Nos especializamos en ofrecer productos de alta calidad que realzan la belleza natural,
								 apoyando el crecimiento de emprendedores y apasionados del maquillaje.
							</p>
						</div>
					</div>

					<!-- Link list -->
					<div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
						<div class="block">
							<h4>Contactos</h4>
							<ul>
								<li><a href="https://api.whatsapp.com/send?phone=573229425702">Celular: +57 3229425702</a></li>
								<li><a href="https://api.whatsapp.com/send?phone=573227257705">Celular: +57 3227257705</a></li>
								<li><a href="">Telefono: 1299382</a></li>
								<li><a href="https://www.google.com/maps/place/Bogot%C3%A1/@4.6486206,-74.2726211,11z/data=!3m1!4b1!4m6!3m5!1s0x8e3f9bfd2da6cb29:0x239d635520a33914!8m2!3d4.7109886!4d-74.072092!16zL20vMDFkenlj?entry=ttu&g_ep=EgoyMDI1MDUxNS4xIKXMDSoASAFQAw%3D%3D">Bogota D.c, Colombia</a></li>
								
							</ul>
						</div>
					</div>

					<!-- Link list -->
					

				</div>
			</div>
			</div>
			</div>

		</section>
		<!-- Container End -->
	</footer>

	<footer>
		<section id="contacto" class="text-center">
			<div class="container">
				<h3> NUESTRAS REDES SOCIALES </h3>
				<div class="row">
					<div class="col-lg-12 col-md-12 goodbye-info">
						<a href="https://x.com/?lang=es"><button type="button" class="btn btn-outline-primary"><i class="bi bi-twitter"></i></i></button></a>
						<a href="https://www.tiktok.com/@glosski.bq"><button type="button" class="btn btn-outline-secondary"><i class="bi bi-tiktok"></i></button></a>
						<a href="https://www.instagram.com/yonheyb?igsh=MXd6emNmOXQ5eWFhNg=="><button type="button" class="btn btn-outline-success"><i class="bi bi-instagram"></i></button></a>
						<a href="https://www.youtube.com/@bakabakamx"><button type="button" class="btn btn-outline-danger"><i class="bi bi-youtube"></i></button></a>
						<a href="https://www.facebook.com/?locale=es_LA"><button type="button" class="btn btn-outline-warning"><i class="bi bi-facebook"></i></button></a>
						<p>Copyright © 2023. Designed & Developed by Themefisher</p>

		</section>
	</footer>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JS (necesario para accordion) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

