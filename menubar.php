<?
	if(isset($_POST['login'])){
	include_once 'include/config.php';
    $config = new Config();
    $db = $config->getConnection();
    include_once 'include/loginuser.php';
    
    $login = new Login($db);
    $login->userid = $_POST['fusername'];
    $login->passid = $_POST['fpassword'];
         if($login->login()){
              echo "<script>location.href='user.php'</script>";  
          }else{
              echo "<script>alert('Maaf kombinasi Username dan Password yang anda masukkan salah, silahkan coba lagi!')</script>";       
          }


	}
?>



<div class="menu-bar">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/logo.jpg" class="img-responsive" alt="" /></a>
				</div>
				<div class="top-menu">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>|
						<li class="active"><a href="restaurants.php">Restaurants</a></li>|
						<li class="active"><a href="about us.php">About Us</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<form method="post">
				<div class="login-section">
					<ul>
						<li>
							<li><input type="text"  length="14" name="fusername" placeholder="Username" class="form-control" style="width:100px;" required autofocus></li>
							<li><input type="password"   name="fpassword" placeholder="Password" class="form-control" style="width:100px;" required autofocus></li>
							<input type="submit" name="login" class="btn btn-default" value="Login">
						</li> |						
						<li><a href="join-us.php">Join Us</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>


