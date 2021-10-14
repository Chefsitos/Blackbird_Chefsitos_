<?php 
require_once('modelo.php');
require_once('dominio.php');

define('BD','pgsql:host=localhost;port=5432;dbname=Chefsitos;user=postgres;password=johanrosano');
function coneccion_bd(){
	static $bd;
	if (!isset($bd)) {
		$con = new PDO(BD,'postgres','johanrosano',array(PDO::ATTR_PERSISTENT=>true));
		$bd = $con;
	}
	return $bd;
}

function almacenar_usuario($usuario){
	if(!$usuario instanceof usuario)
		return null;
	//$sql = sprintf("insert into usuarios (nombreu,correo,contrasenia,codigou) values('%s','%s','%s','%d')", $usuario->nombreu,$usuario->correo,$usuario->contrasenia,$usuario->codigou);
	$sql = sprintf("insert into usuarios (nombreu,correo,contrasenia) values('%s','%s','%s')", $usuario->nombreu,$usuario->correo,$usuario->contrasenia);
	if (coneccion_bd()->exec ($sql)>0)
	return $usuario;
echo coneccion_bd()->errorInfo()[2];
return null;
}

//persistencia recuperar_usuarios
function recuperar_usuarios(){
	$usuarios=[];
	$sql="select nombreu from usuarios  order by nombreu ";}
/*function recuperar_usuario($codigou){
//$usuarios = [];
$sql = "select nombreu from usuarios  where nombreu='%s ' and codigou='1'";

//foreach(coneccion_bd()->query ($sql) as $fila)
//$usuarios[] = crear_usuarios ($fila['nombreu']);
return $usuarios;


}
*/
/*
function recuperar_usuario($nombreu){
	$sql = sprintf("select * from usuarios where codigou=%d",$nombreu);
	if($fila = coneccion_bd()->query($sql)->fetch())
		
		return crear_usuario($fila['nombreu'],$fila['contrasenia'],$fila['codigou'],$fila['rol_normal'],$fila['rol_admin']);
	
	//echo coneccion_bd()->errorInfo()[2];
	return null;
}
*/
/*
function recuperar_usuario($nombreu){
	$sql = sprintf("select * from usuarios where nombreu='%s'",$nombreu);
	if($fila = coneccion_bd()->query($sql)->fetch())
		// _atencion_ con el orden de los parámetros que le pasan a crear_usuario
		return crear_usuario( $fila['nombreu'], $fila['correo'], $fila['contrasenia']);

	//echo coneccion_bd()->errorInfo()[2];
	return null;
}
*/
// planetas
/*
function recuperar_usuarios() {
   $usuarios =[];

   $sql = "select usuarios.*,recetas.* from usuarios,recetas "; 
    foreach( conection_bd()->query($sql) as $fila )
     if ($usuario = crear_usuario( crear_receta) ($fila['nombre'])) )
         $usuarios [] = $usuario;
     
     echo conection_bd() ->errorInfo()[2];
     return $usuarios;

}


*/




?>