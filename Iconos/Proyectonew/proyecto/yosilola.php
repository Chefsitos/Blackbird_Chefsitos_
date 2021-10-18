<?php
require_once('interface.php');
require_once('modelo.php');
require_once('dominio.php');
require_once('persistencia.php');
?>

<?php
function presentar_lola() { ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>

	Nombre:<?php $usuario=acceder_usuarios(1);
	echo $usuario->nombre;
	?>


	</p>

</body>
</html>
<?php } ?>