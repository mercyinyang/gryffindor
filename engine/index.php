<!DOCTYPE html>
<html>
<head>
	<title>Login & create</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	

</head>
<body>
	<section>
		<div>
			<div class="pos-f-t">
			  <div class="collapse" id="navbarToggleExternalContent">
			    <div class="bg-dark p-4">
			      <h5 class="text-white h4">Collapsed content</h5>
			      <span class="text-muted">Toggleable via the navbar brand.</span>
			    </div>
			  </div>
			  <nav class="navbar navbar-dark bg-dark">
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			  </nav>
			</div>
		</div>
		<hr>
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
                        <div class="card border-info">
                            <div class="card-header bg-info text-white">
                                <h3 class="text-center">Login</h3>
                            </div>
                            <div class="card-body">
                                <form id="login-form" method="POST">
								  <div id="error"></div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Email address</label>
								    <input type="text" class="form-control is-valid-" id="login-email" aria-describedby="emailHelp" placeholder="Enter email" name="login_email">
								    <div class="invalid-feedback" id="email-err"></div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputPassword1">Password</label>
								    <input type="password" class="form-control" id="login-password" placeholder="Password" name="login_password">
								    <div class="invalid-feedback" id="password-err"></div>
								  </div>
								  <button type="submit" class="btn btn-primary" name="signin_btn" id="signin-btn">Submit</button>
								</form>
                            </div>
                        </div>
                    </div>
					<div class="col-md-6">
                        <div class="card border-info">
                            <div class="card-header bg-info text-white">
                                <h3 class="bg-info text-center">Sign up</h3>
                            </div>
                            <div class="card-body">
                                <form  id="signup-form" method="POST">
								  <div class="form-group">
									  <div id="msg"></div>
									  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">username</label>
								    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
								  	<div class="invalid-feedback" id="username-error"></div>
								  </div>
								  <div class="form-group">
								    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
								    <div class="invalid-feedback" id="email-error"></div></div>
								  
								  <div class="form-group">
								    <label for="exampleInputPassword1">Password</label>
								    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
								    <div class="invalid-feedback" id="password-error"></div>
								  </div>
								  <button id="signup-btn" type="submit" class="btn btn-primary" name="signup_btn">Submit</button>
								</form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
		</div>
	</section>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	        $("#signup-form").submit(function(e){
	                e.preventDefault();
	              	var formData = $("#signup-form").serialize();
	                $.ajax({
	                    type: "POST",
	                    url: "engine/auth.php",
	                    data: formData,
	                    dataType   : 'json'

	                })
		            .done(function(data) {
		            	console.log(data);
		            	if ( ! data.success) {
		            		$('#username, #password, #email').removeClass('is-invalid');
		            		$('#username, #password, #email').removeClass('is-valid');
		            		$('#username-error, #email-error, #password-error').html('');
		            		if (data.errors.username) {
		            			
		            			$('#username').addClass('is-invalid');
                				$('#username-error').html(data.errors.username);
		            		}else{
		            			$('#username-error').addClass('is-valid');
		            		}
		            		if (data.errors.email) {
		            			
		            			$('#email').addClass('is-invalid'); 
                				$('#email-error').html(data.errors.email);
		            		}else{
		            			$('#email-error').addClass('is-valid');
		            		}


		            		if (data.errors.password) {
		            			
		            			$('#password').addClass('is-invalid');
                				$('#password-error').html(data.errors.password);
		            		}else{
		            			$('#password-error').addClass('is-valid');
		            		}

		            	}
		            	else{
		            		$('#username, #password, #email').removeClass('is-invalid');
		            		$('#username, #password, #email').removeClass('is-valid');
		            		$('#username-error, #email-error, #password-error').html('');

		            		$("#msg").fadeIn(1000, function(){                        
						        $("#msg").html('<div class="alert alert-success"> <span class="fa fa-good"></span> &nbsp;'+data.message+'<a href ="">click here</a> </div>');                                
						    });
		            	}

		                
		            })
		            .fail(function(data) {
				        console.log(data);
				    });

		        
	                return false;
	            });


	         $("#login-form").submit(function(e){
	                e.preventDefault();
	              	var formData = $("#login-form").serialize();
	                $.ajax({
	                    type: "POST",
	                    url: "engine/auth.php",
	                    data: formData,
	                    dataType   : 'json'

	                })
		            .done(function(data) {
		            	console.log(data);
		            	if ( ! data.success) {
		            		$('#login-email, #login-password').removeClass('is-invalid');
		            		$('#email-err, #password-err').html('data.errors.email');
		            		if (data.errors.email) {
		            			$('#login-email').addClass('is-invalid'); 
                				$('#email-err').html(data.errors.email);
		            		}
		            		if (data.errors.password) {
		            			$('#login-password').addClass('is-invalid'); 
                				$('#password-err').html(data.errors.password);
		            		}
		            		if (data.errors.login) {
								$("#error").fadeIn(1000, function(){                        
							        $("#error").html('<div class="alert alert-danger">'+data.errors.login+'</div>');                                
							    });
		            		}

		            	}
		            	else{
		            		if (data.message = "logged-in") {
		            			location.assign("welcome.php");
		            		}
		            	}   
		            })
		            .fail(function(data) {
				        console.log(data);
				    });

		        
	                return false;
	            });
	    });
	</script>
</body>
</html>