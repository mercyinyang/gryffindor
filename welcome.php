<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64"  href="image/gryffindor.png">
</head>
<body>
	<ul>
  <br>
	  <li class="home"><a href="#home"><img src="image/gryffindor-silver.png" style="width: 30%;" alt=""></a></li>
	  <li class="gallery"><a href="engine/logout.php">Sign Out</a></li>
	</ul>
    <?php
    include('engine/database.php');
    $sql = "SELECT * FROM users WHERE id ={$_SESSION['user_id']}";
    $result = mysqli_query($mycon);
    $details = mysqli_fetch_array($result);
    ?>
	<div class="container">
		<span class="hello">Hello, <?php echo $details['name']; ?></span>
		<span class="welcome">WELCOME TO GRYFFINDOR</span>
		<span class="motto">Courage, Bravery and Determination</span><br>
		<h5><p class="copyright">Gryffindor &copy; HNG 2019</p></h5>

	</div>
	</body>
		
</html>
