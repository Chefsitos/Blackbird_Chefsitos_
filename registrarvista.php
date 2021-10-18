
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Chefsitos Registro</title> 
	
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/login.css">
	<link rel="Icon" type="icon/png" href="Iconos/CHEFSITOS.png" > 


</head>  
<body>
        <div id="particles-js"></div>
 <form class="formulario" method="POST" action="insertar.php">
    
    <h1>Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Nombre Completo" name="Nombre">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" name="Correo"> 

         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="Contraseña">
         
         </div>
         <input type="submit" value="Registrate" class="button" name="Registrate">
         
         <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.html">Iniciar Sesion</a></p>
     </div>
    </form>
<div class="flechita">
<a href="../Desayuno.html">
<img  class="flechasa" src="../Iconos/Flechasa.png">
</a>


</div>
       <!-- JS Particles.js -->
    <script src="js/particles.min.js"></script>
    <script src="js/parti.js"></script>
</body>
</html>
