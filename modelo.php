<?php

class usuario {
	public $codigou;
	public $nombreu;
	public $contrasenia;
	public $correo;


}
 function crear_usuario($nombreu,$correo,$contrasenia,$codigou){
 	//if (!(is_int($codigou) && is_string($nombreu) && is_string($contrasenia) && is_bool($rol_admin) && is_bool($rol_normal)))
 	//	return null;
 	$usuario = new usuario;
 	$usuario->codigou=$codigou;
 	$usuario->nombreu=$nombreu;
 	$usuario->contrasenia=$contrasenia;
 	$usuario->correo=$correo;
 	return $usuario;
 }


 class recetas {
	public $codigor;
	public $nombrer;
	public $tipo_normal;
	public $tipo_vegetariano;
	public $tipo_celiaco;
	


}
 function crear_recetas ($codigor,$nombrer,$tipo_normal,$tipo_celiaco,$tipo_vegetariano){
 //	if (!(is_int($codigor) && is_string($nombrer) && is_bool($tipo_normal) && is_bool($tipo_celiaco) && is_bool($tipo_vegetariano)))
 	//	return null;
 	$recetas = new recetas;
 	$recetas->codigor=$codigor;
 	$recetas->nombrer=$nombrer;
 	$recetas->tipo_normal=$tipo_normal;
 	$recetas->tipo_vegetariano=$tipo_vegetariano;
 	$recetas->tipo_celiaco=$tipo_celiaco;

 
return $recetas;
}
 class invitado {
	public $codigoi;
	
}
 function crear_invitados($codigoi){
 	//if (!(is_int($codigoi)))
 		//return null;
 	$invitado = new invitado;
 	$invitado->codigoi=$codigoi;
 	return $invitado;

 }

 



?>

<?php 
//tests
//modelo
//var_dump(crear_planeta('jupiter',11.2));
?>