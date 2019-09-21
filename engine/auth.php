<?php
session_start();
include_once 'database.php';
include_once 'functions.php';

if (isset($_POST['name'])) {
	
	$email_pattern = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
	$string_pattern = "/^[a-zA-Z ]*$/";
	$error = array();
	$data = array();
	$email = protect_value($_POST['email']);         // protect 
	$name = protect_value($_POST['name']);
	$password = protect_value($_POST['password']);
	// validate the variables
    // if any of these variables don't exist, add an error to our $error array
	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST
		['password'])) {
		if (empty($_POST['name'])) {
			$error['name'] = "name is required";
		}
		if (empty($_POST['password'])) {
			$error['password'] = "password is required";
		}
		if (empty($_POST['email'])) {
			$error['email'] = "email is required";
		}

			
	}
	if (!preg_match($string_pattern, $name)) {
			
			$error['name'] = "only texts and white space";
	}
	if (!preg_match($email_pattern, $email)) {
			
			$error['email'] = "Enter valid Email";
	}
	if (!empty($password)) {
		if (strlen($password) < 8) {
			
			$error['password'] = "Password should be minimum of eight (8) characters";
		}
	}
	
	if (empty($error)) {
		$query ="SELECT * FROM users WHERE email = '$email' LIMIT 1";
	  	$result = $mycon->query($query);
		if (mysqli_num_rows($result) > 0) {
			$erroremail = true;
			$error['email'] = "Email already exist";
		}else{
			$encrpt_password = password_hash("$password", PASSWORD_DEFAULT);
			$sql = "INSERT INTO users()
					 VALUES(NULL, '$name', '$email', '$encrpt_password')";
			$sql_exe = $mycon->query($sql);
			if ($sql_exe) {
				
				$data['message'] = "Account created sucessfully.";
					 
			}
			
		}
		
	}

	if ( !empty($error)) {
        $data['success'] = false;
        $data['errors']  = $error;
    } else {
		$data['success'] = true;
	}
	// return to ajax
    echo json_encode($data);
}

if (isset($_POST['login_email'])) {
	$error = array();
	$data = array();
	$email_pattern = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
	if (empty($_POST['login_email']) || empty($_POST['login_password']) ) {
		if (empty($_POST['login_password'])) {
			$error['password'] = "password is required";
		}
		if (empty($_POST['login_email'])) {
			$error['email'] = "email is required";
		}
	}
	else{
		$email = protect_value($_POST['login_email']);         // protect the variables =======
		$password = protect_value($_POST['login_password']);
		if (!preg_match($email_pattern, $email)) {
			$error['email'] = "Enter valid Email";
		}
		if (empty($error)) {
			$sql = "SELECT * FROM users WHERE email='$email'";
		  	$resultset = $mycon->query($sql); 
			$row = mysqli_fetch_array($resultset);		
			if(password_verify($password, $row['password'])){				
				$_SESSION['user_id'] = $row['id'];
				$data['message'] = "logged-in";
			} else {				
				$error['login'] = "Invalid login parameters";
			}
		}

	}
	if ( !empty($error)) {
        $data['success'] = false;
        $data['errors']  = $error;
    } else {
		$data['success'] = true;
	}
	echo json_encode($data);

}
?>

