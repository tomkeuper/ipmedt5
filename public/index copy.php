<?php 
SESSION_START();
include('header.php');
?>
<title>phpzag.com : Demo Push Notification System with PHP & MySQL</title>
<script src="notification.js"></script>
<?php include('container.php');?>
<div class="container">		
	<h2>Example: Push Notification System with PHP & MySQL</h2>	
	<h3>User Account </h3>
	<?php if(isset($_SESSION['username']) && $_SESSION['username'] == 'admin') { ?>
		<a href="manage_notification.php">Manage Notification</a> | 
	<?php } ?>
	<?php if(isset($_SESSION['username']) && $_SESSION['username']) { ?>
		<a href="logout.php">Logout</a>
	<?php } else { ?>
		<a href="login.php">Login</a>
	<?php } ?>
	<hr> 
	<?php if (isset($_SESSION['username'])) { ?>
		<h4>Welcome back <strong><?php echo $_SESSION['username']; ?></strong></h4>	
	<?php } ?>	
	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/push-notification-system-with-php-mysql/">Back to Tutorial</a>		
	</div>
</div>	
<?php include('footer.php');?>
