<?php

session_start();

if(isset($_POST['submit'])){
	
	include 'dbh.inc.php';
	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	//error handlers
	//check if empty
	if(empty($email) || empty($pwd)){
		header("Location: ../logInSample.php?login=empty");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck < 1){
			header("Location: ../logInSample.php?login=error");
			exit();
		}else{
			if($row = mysqli_fetch_assoc($result)){
				//de-hashing the password
				$hashPwdCheck = password_verify($pwd, $row['password']);
				if($hashPwdCheck == false){
					header("Location: ../logInSample.php?login=error");
					exit();
				}else if($hashPwdCheck == true){
					// log in the user here
					$_SESSION['u_first'] = $row['firstname'];
					$_SESSION['u_last'] = $row['lastname'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_username'] = $row['username'];
					header("Location: ../logInSample.php?login=success");
					exit();
				}
			}
		}
	}
	
}else{
	header("Location: ./logInSample.php?login=error");
	exit();
}