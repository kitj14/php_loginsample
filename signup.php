<?php include 'header.php'; ?>
<style>
	<?php include 'logInStyle.css'; ?>
</style>

<div id="container">
	<a href="logInSample.php" id="home">
		<span class="glyphicon glyphicon-home"></span>Home
	</a>
	<form action="includes/signup.inc.php" method="POST">
		<div class="form-group">
			<label for="first">first name:</label>
			<input type="text" class="form-control" id="email" name="first">
		</div>
		<div class="form-group">
			<label for="last">last name:</label>
			<input type="text" class="form-control" id="pwd" name="last">
		</div>
		<div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" class="form-control" id="pwd" name="uid">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pwd">
		</div>
		<button type="submit" class="btn btn-default" name="register">Register</button>
	</form>
</div>
	
<?php
	include_once 'footer.php';
?>