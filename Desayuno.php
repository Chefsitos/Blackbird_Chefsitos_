<?php
require_once('interface.php');
require_once('modelo.php');
require_once('dominio.php');
require_once('persistencia.php');
?>
<?php
function paginon_si(){
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Desayuno</title>
	<!--Idioma español-->
	<meta charset="utf-8">
    		<link rel="stylesheet" type="text/css" href="css/Desayuno.css">
<link rel="Icon" type="icon/png" href="Iconos/CHEFSITOS.png" > 
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/fullpage.css">

	<link rel="stylesheet" type="text/css" href="Iconos/fonts.css">
</head>
<body>
	<p>

	Nombre:<?php $usuario=acceder_usuario('1');
	echo $usuario->nombreu;
	?>
	</p>
<nav class="menu">
		<ul class="nav"> <!-- Creando lista ordenada,le agregamos la clase "nav" para luego editar-->

			<li>
				
				<a href="slide.html">  <span class="icon-home">  </span>  Inicio</a>

			</li>
			
			<li>

				<a href="recetas.html">  <span class="icon-cooking">  </span>  Recetas</a>
		
			<ul> <!-- implementando sub menus  --> 
				
				<li><a href="Desayuno.html">  <span class="icon-coffee-solid"></span>Desayuno</a> </li>
				<li><a href="Almuerzo.html">  <span class="icon-pizza-slice-solid"></span>Almuerzo</a></li>
				<li><a href="Cena.html">  <span class="icon-chefman"> </span>Cena</a> </li>
				<li><a href="General.html">  <span class="icon-cuisine"></span>General</a></li></ul>

			</li>
			<li>

				<a href="">  <span class="icon-apple-alt-solid">  </span>Vegetarianos</a>

			<ul>

				<li><a href="Desayuno.html">  <span class="icon-coffee-solid"></span>Desayuno</a> </li>
				<li><a href="Almuerzo.html">  <span class="icon-pizza-slice-solid"></span>Almuerzo</a></li>
				<li><a href="Cena.html">  <span class="icon-chefman">  </span>Cena</a> </li>
				<li><a href="General.html">  <span class="icon-cuisine"></span>General</a></li></ul>

			</li>

			<li>

				<a href="">  <span class="icon-utensils-solid">  </span>Celíacos</a>

			<ul>

				<li><a href="Desayuno.html">  <span class="icon-coffee-solid"></span>Desayuno</a> </li>
				<li><a href="Almuerzo.html">  <span class="icon-pizza-slice-solid"></span>Almuerzo</a></li>
				<li><a href="Cena.html">  <span class="icon-chefman">  </span>Cena</a> </li>
				<li><a href="General.html">  <span class="icon-cuisine"></span>General</a></li></ul>


			</li>

		</ul>
	</nav>
<main id="fullpage">
	<header class="section">
		<article class="slide uno">
<!--	<div class="johan"><img class="uno" src="Iconos/facturas.jpg"><img class="dos" src="Iconos/ensaladafrutas.jpg"><img  class="tres" src="Iconos/torta.jpg"><img class="cuatro" src="Iconos/panqueques.jpg"></div>
		</article>
		<article class="slide dos"></article>
		<article class="slide tres"></article>
		<article class="slide cuatro"></article>
	</header>
</main> -->
	<!--  fullpage js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/fullpage.js"></script>
<!--complemento a js fullpage  -->
<script src="js/desayuno.js"></script>
</body>
</html>
<?php } ?>