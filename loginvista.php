<?php 
requiere_once(persistencia.php);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Chefsitos Inicio de sesión</title> 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/login.css">
	<link rel="Icon" type="icon/png" href="Iconos/CHEFSITOS.png" > 

</head>  
<body>
    <div id="particles-js"></div>
    <form class="formulario" method="POST" action="insertar.php">
    
    <h1>Login</h1>
     <div class="contenedor">
     
     
           
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" name="Correo" >
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="Contraseña">
         
         </div>
         <input type="submit" value="Login" class="button">
        
         <p>¿No tienes una cuenta? <a class="link" href="registrarvista.html">Registrate </a></p>
     </div>
    </form>
     <!-- JS Particles.js -->
    <script src="js/particles.min.js"></script>
    <script src="js/parti.js"></script>
</body>
</html>
<?php 

