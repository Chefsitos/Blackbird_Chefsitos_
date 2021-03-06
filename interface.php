<?php

require_once('modelo.php');
require_once ('dominio.php');
require_once('persistencia.php');

function presentar_Home() { ?>
	<!DOCTYPE html>
<html>

 <?php presentar_head(); ?>

		<body>
<?php presentar_menu (); ?>
		<main id="fullpage">
		<header class="section">
			<div class="icono">
				<p>
					<a href="#seccion"><span class="icon-chevron-down-solid"></span></i></a>
				</p>
			</div>
		</header>
		
		<section class="section"> 

			<article class="slide uno">

			<div class="producto"><img src="Iconos/CHEFSITOS.png"></div>

					
					<div class="contenedor-texto">
						<h2 class="titulo">Contamos con <br> recetas <span class="typed"></span></h2>
					</div>

			</article>

			<article class="slide dos">
<!-- 
				<div class="producto2"> 
			<img class="chicas" src="Iconos/chicarras.png">
				 </div>
				 <div class="memo">

						<a href="https://docs.google.com/document/d/117QR42aVBXaouwH1n1-VES2BV7hv3VzHX__B8WnwSGA/edit?usp=sharing" class="rainbow-button" target="blank_" alt="Memoria"></a>

					</div> 
				-->
						<div class="empresa"><img src="Iconos/blackbird.png"></div>
						<div class="Nempresa"><p>Blackbird</p></div>
						<div class="redes">
							<p><a href="https://instagram.com/Blackbird1289"><span class="icon-instagram"></span></a></p>
							<p><a href="https://twitter.com/blackbird1200"><span class="icon-twitter"></span></></a></p>
							<p><a href=""><span class="icon-pinterest"></span></a></p>
							<p><a href=""><span class="icon-facebook"></span></a></p>
							</div>
			</article>
		</section>

			<footer class="section tres">
			<div class="icono-instagram">
				<p>
					<a href="https://www.instagram.com/cchefsitos__uy/?hl=es" target="_blank"><span class="icon-instagram"></span></a>
				</p>
			</div>

			<div class="icono-correo">
				<p>
					<a href="#"><span class="icon-gmail"></span></a>
				</p>
			</div>

		</footer>

	</main>

<!--  fullpage js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/fullpage.js"></script>
<!--complemento a js fullpage  -->
<script src="js/app.js"></script>
<!-- type js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<!-- confihuraciones type js-->
<script src="js/main.js"></script>
</body>


</html>
<?php } ?>
<?php
function presentar_head() {   ?>

<head>
	<title>Pagina principal</title>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
<link rel="Icon" type="icon/png" href="Iconos/CHEFSITOS.png" > 
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/fullpage.css">

	<link rel="stylesheet" type="text/css" href="Iconos/fonts.css">
</head>
<?php } ?>

<?php 
 function presentar_menu() { ?>
<nav class="menu">
		<ul class="nav"> <!-- Creando lista ordenada,le agregamos la clase "nav" para luego editar-->

			<li>
				
				<a href="slide.html">  <span class="icon-home">   </span>  Inicio</a>

			</li>
			
			<li>

				<a href="#">  <span class="icon-cooking">  </span>  Recetas</a>
		
			<ul> <!-- implementando sub menus  --> 
				
				<li><a href="Desayuno.html">  <span class="icon-coffee-solid"></span>Desayuno</a> </li>
				<li><a href="Almuerzo.html">  <span class="icon-pizza-slice-solid"></span>Almuerzo</a></li>
				<li><a href="Cena.html">  <span class="icon-chefman">  </span>Cena</a> </li>
				<li><a href="General.html">  <span class="icon-cuisine"></span>General</a></li></ul>

			</li>
			<li>

				<a href="#">  <span class="icon-apple-alt-solid">  </span>Vegetarianos</a>

			<ul>

				<li><a href="DesayunoV.html">  <span class="icon-coffee-solid"></span>Desayuno</a> </li>
				<li><a href="AlmuerzoV.html">  <span class="icon-pizza-slice-solid"></span>Almuerzo</a></li>
				<li><a href="CenaV.html">  <span class="icon-chefman">  </span>Cena</a> </li>
				<li><a href="GeneralV.html">  <span class="icon-cuisine"></span>General</a></li></ul>

			</li>

			<li>

				<a href="#">  <span class="icon-utensils-solid">  </span>Cel??acos</a>

			<ul>

				<li><a href="DesayunoC.html">  <span class="icon-coffee-solid"></span>Desayuno</a> </li>
				<li><a href="AlmuerzoC.html">  <span class="icon-pizza-slice-solid"></span>Almuerzo</a></li>
				<li><a href="CenaC.html">  <span class="icon-chefman">  </span>Cena</a> </li>
				<li><a href="GeneralC.html">  <span class="icon-cuisine"></span>General</a></li></ul>


			</li>

<li>
	<a href="loginvista.html"><span class="icon-user"></span></a>
</li>
		</ul>
	</nav>
<?php } ?>

<?php 

 function presentar_nopudiste() { ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>hola</title>
</head>
<body>
y la verdad que no pudiste
</body>
</html>
<?php } ?>

<?php 
