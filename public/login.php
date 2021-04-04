<?php 
SESSION_START();
include('header.php');
$loginError = '';
if (!empty($_POST['username']) && !empty($_POST['pwd'])) {
	include ('Push.php');
	$push = new Push();
	$user = $push->loginUsers($_POST['username'], $_POST['pwd']); 
	if(!empty($user)) {
		$_SESSION['username'] = $user[0]['username'];
		header("Location:index.php");
	} else {
		$loginError = "Invalid username or password!";
	}
}

?>
<title>phpzag.com : Demo Push Notification System with PHP & MySQL</title>
<?php include('container.php');?>
<div class="container">		
	<h2>User Login:</h2>
	<div class="row">
		<div class="col-sm-4">
			<form method="post">
				<div class="form-group">
				<?php if ($loginError ) { ?>
					<div class="alert alert-warning"><?php echo $loginError; ?></div>
				<?php } ?>
				</div>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="username" class="form-control" name="username" required>
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" name="pwd" required>
				</div>  
				<button type="submit" name="login" class="btn btn-default">Login</button>
			</form><br>
			<strong>Test login details:</strong><br>
			<strong>username:</strong> phpzag <br>
			<strong>Pass:</strong> 12345
		</div>
	</div>
</div>	
<?php include('footer.php');?>






