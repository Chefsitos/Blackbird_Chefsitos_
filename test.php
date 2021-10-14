<?php
	//require_once( 'modelo.php' );
	//require_once( 'persistencia.php' );
	require_once( 'dominio.php' );

	// modelo --------------------------------------------------------------------------
	// usuario
	var_dump( crear_usuario( 'compañy', 'xond1000@gmail.com', 'chefsito' ) );
/*
	// persistencia --------------------------------------------------------------------
	// usuario
	$usu1 = almacenar_usuario( crear_usuario( 'compañy', 1000, 'chefsito', true, true ) );
	if( $usu1 )
		var_dump( $usu1 );
	else
		echo tomar_mensaje_error(), "\n";

	var_dump( recuperar_usuario( 'compañy' ) );

*/
	/*
	// dominio -------------------------------------------------------------------------
	if( $u = registrar_usuario( crear_usuario( 'cromwell', 1001, 'abc1234', false, false ) ) )
		var_dump( $u );
	else
		echo tomar_mensaje_error(), "\n";
	var_dump( recuperar_usuario( 'cromwell' ) );


	if( $u = registrar_usuario( crear_usuario( 'splinter', 1002, 'retnil00', false, true ) ) )
		var_dump( $u );
	else
		echo tomar_mensaje_error(), "\n";
	var_dump( recuperar_usuario( 'splinter' ) );
	*/
?>