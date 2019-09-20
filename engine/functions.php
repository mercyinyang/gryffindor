<?php 


function mysql_prep($value ) {
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { 
		   
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysqli_real_escape_string(mysqli_connect('localhost', 'root', '', 'test_project') ,$value );
			
			
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}
	
	
	function protect_value($value){
		
		$secured_value = trim(mysql_prep(htmlentities($value)));
		
		return $secured_value;
		
	}

	

?>