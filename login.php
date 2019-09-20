<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>HNG</title>
      <meta name="description" content="">
      <meta name="author" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--      <link rel="stylesheet"  href="css/bootstrap.css">-->
        <link rel="stylesheet"  href="css/main2.css">                
      <link rel="stylesheet" media="screen" href="font-awesome/css/font-awesome.css">
      <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64"  href="image/gryffindor.png">
    </head>
    <body>           
        <div class="contain">             
            <div  class="form">
                <br><br>
                <form > 
                    <br><br><br><br>
                    <h1>Welcome Back!</h1> 
                    <h3  class="move_top">Welcome to grffindor, <br>Kindly fill in your details.</h3>                     
                    <br><br><br><br><br>
                    <h6>Dont have an account?</h6>
                    <a href="index.php" class="signin">SIGN UP</a>
                   <br><br><br><br>
                </form>
            </div>

            <div class="message">
                <br><br><br><br> 
                <div id="hi">
                    <div class="head"><span><img src="image/gryffindor-silver.png" class="img-fluid logo" alt=""></span>
                       <h2>Sign in to Gryffindor</h2> 
                       <p  class="move_top">
                       <a href="#"><img class="social_icon" src="image/search.png" alt=""></a>
                       <a href="#"><img class="social_icon" src="image/facebook.png" alt=""></a>
                       <a href="#"><img class="social_icon" src="image/twitter.png" alt=""></a>
                       </p>  <h5 class="move_top"><p>or</p></h5></div>
                    <form action="engine/auth.php" method="POST">
                        <div id="error"></div>
                        <br><br>
                        <div class="input-group">
                            <input type="text" name="login_email" id="login-email">
                            <label><i id="fa" class="fa fa-envelope-o"></i>&nbsp;E-mail</label>
                            <span class="error" id="email-err"></span>
                        </div>
                        <div class="input-group">
                            <input type="password" name="login_password" id="login-password">
                            <label><i id="fa" class="fa fa-lock"></i>&nbsp;Password</label>
                            <span class="error" id="password-err"></span>
                        </div>
                        <center><input type="submit" name="submit" id="login-btn" class="Login" value="Sign in">
                        <p><a href="index.php" class="hide"><h6>Sign up</h6></a></p></center>
                    </form>
                </div>
                <br><br><br> <br>                                    
            </div>                    
        </div>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> 
        <script type="text/javascript" src="js/auth-script.js"></script> 
    </body>
</html>
