<?php
include_once '../../include/config.php';
    $config = new Config();
    $db = $config->getConnection();
    include_once '../../include/login.php';
    
if($_POST){
    $login = new Login($db);
    $login->userid = $_POST['username'];
    $login->passid = md5($_POST['password']);
         if($login->login()){
              echo "<script>location.href='../'</script>";  
          }else{
              echo "<script>alert('Maaf kombinasi Username dan Password yang anda masukkan salah, silahkan coba lagi!')</script>";       
          }
}
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Calm breeze login screen</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <div class="wrapper">
	<div class="container">
		<h1>Login Administrator</h1>
		<form method="post" class="form" action="#" >
			<input type="text"  name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="login" Value="Login"> 
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='js/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
