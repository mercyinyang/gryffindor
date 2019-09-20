<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Gryffindor</title>
      <meta name="description" content="">
      <meta name="author" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--      <link rel="stylesheet"  href="css/bootstrap.css">-->
        <link rel="stylesheet"  href="css/main.css">
        <link rel="stylesheet" media="screen" href="font-awesome/css/font-awesome.css">
        <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64"  href="image/gryffindor.png">
    </head>
    <body>
        <div class="contain">                                     
            <div  class="form">
                <br><br>
                <form id="signup-form" method="POST">
                 <div id="error"></div> 
                  <br><br>
                  <br><br>
                   <div class="head"><span><img src="image/gryffindor.png" class="img-fluid logo" alt=""></span>
                       <center><h2>Create a Gryffindor account</h2></center> 
                       <h5 class="move_top">sign up with</h5> 
                       <p  class="move_top">
                       <a href="#"><img class="social_icon" src="image/search.png" alt=""></a>
                       <a href="#"><img class="social_icon" src="image/facebook.png" alt=""></a>
                       <a href="#"><img class="social_icon" src="image/twitter.png" alt=""></a>
                       </p>  <h5 class="move_top"><p>or</p></h5>
                    </div>
                    <div id="msg"></div>
                    <br><br>
                    <div class="input-group">
                        <input type="text" name="name" id="name" required>
                        <label><i id="fa" class="fa fa-user"></i>&nbsp;Name</label>
                        <span class="error" id="name-error"></span>
                    </div>
                    <div class="input-group">
                        <input type="text" name="email" id="email" required>
                        <label><i id="fa" class="fa fa-envelope-o"></i>&nbsp;E-mail</label>
                        <span class="error" id="email-error"></span>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" id="password" required>
                        <label><i id="fa" class="fa fa-lock " ></i>&nbsp;Password</label>
                        <span class="error" id="password-error"></span>
                    </div>
                    <br>
                    <center><input type="submit" name="submit" class="Login" value="Sign up">
                    <a href="login.php" class="hide"><h6>Login</h6></a>
                    </center>
                   <br><br><br><br>
                </form>
            </div>                    
            <div class="message">
               <br><br><br><br><br>
                <div id="hi">
                    <h1>Hi There...</h1> 
                    <h3  class="move_top">Create your grffindor account, <br>lets get started.</h3>                     
                    <br><br><br><br><br><br><br><br><br>
                    <h6>Already have an account?</h6>
                    <a href="login.php" class="signin">SIGN IN</a>
                </div>
            </div>    
          </div>                
      <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> 
      <script type="text/javascript" src="js/auth-script.js"></script> 
    </body>
    
   
</html>