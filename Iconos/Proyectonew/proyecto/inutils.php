<?php
    // request to types
    function parametrea( $fmt, $req, $item ) {
        if( !isset( $req[$item] ) )
            return null;

        switch( $fmt) {
            case 'd':
                return intval( $req[$item] );
            case 'f':
                return floatval( $req[$item] );
            default:
                return $req[$item];
        }
    }
    function int_request( $item ) {
        return parametrea( 'd', $_REQUEST, $item );
    }
    function float_request( $item ) {
        return parametrea( 'f', $_REQUEST, $item );
    }
    function any_request( $item ) {
        return parametrea( '?', $_REQUEST, $item );
    }


	// are types
    function are_some_array( $callback, $elementos ) {
        if( !is_array( $elementos ) )
            return false;

        foreach( $elementos as $elemento )
			if( !call_user_func( $callback, $elemento ) )
                return false;

        return true;
    }
    function are_ints() {
        return are_some_array( 'is_int', func_get_args() );
    }
    function are_floats() {
        return are_some_array( 'is_float', func_get_args() );
    }
    function are_strings() {
        return are_some_array( 'is_string', func_get_args() );
    }
    function are_bools() {
        return are_some_array( 'is_bool', func_get_args() );
    }

	// date times
	define( 'REG_FECHA_COMPLETA','/^[0-9]{4}\-(0[1-9]|1[0-2])\-(0[1-9]|[12][0-9]|3[01])$/' );
	define( 'REG_HORA_24_COMPLETA','/^([01][0-9]|2[0-3])\:[0-5][0-9]\:[0-5][0-9]$/' );
	define( 'REG_HORA_24_H_M','/^([01][0-9]|2[0-3])\:[0-5][0-9]$/' );


	function dateval( $sdate ) {
		if( !is_string( $sdate ) )
			return null;

		if( preg_match( REG_FECHA_COMPLETA, $sdate ) )
			return date_create_from_format( "Y-m-d", $sdate );

		return null;

	}
	function timeval( $stime ) {
		if( !is_string( $stime ) )
			return null;

		if( preg_match( REG_HORA_24_COMPLETA, $stime ) )
			return date_create_from_format( "H:i:s", $stime );
		if( preg_match( REG_HORA_24_H_M, $stime ) )
			return date_create_from_format( "H:i", $stime );

		return null;
	}
	function inteval( $sinte ) {
		if( !is_string( $sinte ) )
			return null;
		return date_interval_create_from_date_string( $sinte );
	}

	function strdate( $date ) {
		if( !$date instanceof DateTime )
			return null;

		return date_format( $date, "Y-m-d" );
	}
	function strtime( $time ) {
		if( !$time instanceof DateTime )
			return null;

		return date_format( $time, "H:i:s" );
	}

	function date_now() {
		return date_create();
	}
	function date_age( $date ) {
		if( !$date instanceof DateTime )
			return -1;

		$ahora = date_create();
		if( $date > $ahora )
			return 0;

		return date_diff( $ahora, $date );
	}
	function date_back( $sinte ) {
		if( !is_string( $sinte ) )
			return null;

		return date_sub( date_create(), inteval( $sinte ) );
	}
	function date_forward( $sinte ) {
		if( !is_string( $sinte ) )
			return null;

		return date_add( date_create(), inteval( $sinte ) );
	}

	function time_secs( $time ) {
		if( !$time instanceof DateTime )
			return 0;

		return intval( date_format( $time, 'H' ) ) * 3600 + intval( date_format( $time, 'i' ) ) * 60 + intval( date_format( $time, 's' ) );
	}
	function in_time_range( $time, $stdesde, $sthasta ) {
		if( !( $time instanceof DateTime && are_strings( $stdesde, $sthasta ) ) )
			return false;

		$secs = time_secs( $time );
		return $secs >= time_secs( timeval( $stdesde ) ) && $secs <= time_secs( timeval( $sthasta ) );
	}
/*
	// edad via fecha nacimiento entre 18 y 65 años
	var_dump( dateval( '1965-05-06') < date_back( '18 years' ) );
	var_dump( dateval( '1965-05-06') > date_back( '65 years' ) );

	var_dump( date_forward( '1 day' ) );
	// persiodo a partir de mañana y por 30 dias
	var_dump( dateval('2021-10-17') >= date_forward( '1 day' ) && dateval('2021-10-17') <= date_forward( '31 days' ) );
*/

	// validaciones
	define( 'REG_PALABRA', '/^[a-záéíóúñ]+$/i' );
	define( 'REG_PALABRA_EXTENDIDA', '/^[a-záéíóúñ][a-záéíóúñ0-9]{0,19}$/i' );
	define( 'REG_DENOMINACION', '/^[a-záéíóúñ]+( *[a-záéíóúñ]+){0,6}$/i' );
	define( 'REG_DENOMINACION_EXTENDIDA', '/^[a-záéíóúñ0-9]+( *[a-záéíóúñ0-9]+){0,6}$/i' );
	define( 'REG_SIGLA', '/^[a-z](\.[a-z])*\.?$/i' );
	define( 'REG_EMAIL','/^[a-z0-9]+([\.\-_][a-z0-9]+)*@[a-z0-9][a-z0-9_\-]+(\.[a-z0-9][a-z0-9_\-]+)*\.[a-z]+$/i' );
	define( 'REG_PASS', '/^[a-z0-9:;_\.\+\*\-]+$/i' );

	function validar_reg_exp( $reg, $tex ) {
		if( !are_strings( $reg, $tex ) )
			return false;
		return preg_match( $reg, $tex );
	}
	function validar_palabra( $texto ) {
		return validar_reg_exp( REG_PALABRA, $texto );
	}
	function validar_palabra_extendida( $texto ) {
		return validar_reg_exp( REG_PALABRA, $texto );
	}
	function validar_denominacion( $texto ) {
		return validar_reg_exp( REG_DENOMINACION, $texto );
	}
	function validar_denominacion_extendida( $texto ) {
		return validar_reg_exp( REG_DENOMINACION_EXTENDIDA, $texto );
	}
	function validar_sigla( $texto ) {
		return validar_reg_exp( REG_SIGLA, $texto );
	}
	function validar_email( $texto ) {
		return validar_reg_exp( REG_EMAIL, $texto );
	}
	function validar_pass( $texto ) {
		return validar_reg_exp( REG_PASS, $texto );
	}


	// ultimo mensaje error
	$gerror_msg='';
	function cargar_mensaje_error( $mensaje ) {
		global $gerror_msg;
		$gerror_msg = $mensaje;
		return null;
	}
	function tomar_mensaje_error() {
		global $gerror_msg;
		return $gerror_msg;
	}
	function cargar_traducir_mensaje_error( $clase, $mensaje ) {
		global $gerror_msg;
		if( preg_match( '/Duplicate (entry|key)/i', $mensaje ) )
			$gerror_msg = $clase . " existente";
		else
			$gerror_msg = $mensaje;

		return null;
	}
	
	// bool
	function boolval( $abool ) {
		return intval( $abool ) != 0;
	}
?>
