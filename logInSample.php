<?php include 'header.php'; session_start();?>
<style>
	<?php include 'logInStyle.css'; ?>
</style>

<div id="container">
	<a href="logInSample.php" id="home">
		<span class="glyphicon glyphicon-home"></span>Home!
	</a>
	<?php
		if(isset($_SESSION['u_email'])){
			echo '<form action="includes/logout.inc.php" method="POST">
					<button type="submit" class="btn btn-default" name="submit">Logout</button>
				</form>';
		}else{
			echo '<form action="includes/login.inc.php" method="POST">
		<div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pwd">
		</div>
		<button type="submit" class="btn btn-default" name="submit">Login</button>
		<a href="signup.php" class="btn btn-default">Sign up</a>
	</form>';
		}
	?>


</div>

<?php
	include_once 'footer.php';
?>
