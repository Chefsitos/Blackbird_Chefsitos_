<?php 

/*require_once(persistencia.php);/*
$con=sqrlv_connect($servername,$conexion);
   $Nombre=$_REQUEST["nombreu"];
   $Correo=$_REQUEST["correo"];
   $Contraseña=$_REQUEST["contrasenia"];

   $query ="INSERT INTO usuarios (nombreu,correo,contrasenia,codigou)  VALUES('$nombreu','$correo',
   '$contrasenia','2')";
   $res = sqlsrv_prepare($con,$query);

   if (sqlsrv_execute($res)) {
   echo "Datos insertados correctamente";

   }
   else {
   	echo "Error al insertar los datos";
   }

$p=null;
if (isset($_REQUEST['Nombre'],['Correo'],['Contraseña']) {
  $p=$_REQUEST['Nombre'],['Correo'],['Contraseña'];
}
*/
  require_once( 'dominio.php' );
require_once('inutils.php');
require_once('interface.php');
  $nombre = any_request( 'Nombre' );
  $correo = any_request( 'Correo' );
  $contrasenia = any_request( 'Contra' );
 
  // correo no va por ahora porque usuario _no_ tiene ese atributo
   
  if( $usu = guardar_usuario( crear_usuario( $nombre, $correo, $contrasenia ,1) ) )
  // problema con codigou, es clave primaria ( nombre usuario _no_ es clave! )
    // pagina o funcion para usuario registrado
    presentar_Home();
  //var_dump( $usu );
 
   
  else
    // pagina o función para usuario con problemas en registro
    //echo tomar_mensaje_error(), "\n";
presentar_nopudiste();

?> 