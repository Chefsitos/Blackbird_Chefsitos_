<?php
require_once('modelo.php');
require_once('persistencia.php');
function acceder_usuario($codigou){
	return recuperar_usuario($codigou);
}
function guardar_usuario($usuario){
	return   almacenar_usuario($usuario);
}
/*
function validar_correo($correo){
preg_match(pattern, subject)
}
function validar_nombreu($nombreu){
preg_match(pattern, subject)
}
function validar_contrasenia($contrasenia){
preg_match(pattern, subject)
}*/
/*
function validar_usuarios($usario){if(!$usuario instanceof usuarios)
	return null;

	if(!(preg_match('/^[a-z]+$/', $usuario->nombreu)) )
return null;

return $usuario;
/*
}
function acceder_planetas(){
//temporal hasta contra con capa de persistencia

return [ crear_planeta('mercurio', 0.4),
         crear_planeta('venus', 0.94),
         crear_planeta('tierra', 1.0),
         crear_planeta('marte', 0.53),
        crear_planeta('jupiter' 11.2),
         crear_planeta('saturno',9.41) ];
         
return recuperar_planetas();
}

function incluir_planeta($planeta){
	if( !validar_planeta( $planeta) )
		return null;
	return almacenar_planeta( $planeta);
}
*/


?>