<?php

if(isset($_POST['signup-submit'])){
	require 'db.php';

	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$username =$_POST['username'];
	$email =$_POST['user-email'];
	$password =$_POST['pass'];
	$rpassword =$_POST['rpass'];

	if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($rpassword)) {
		header("Location: ../signup.php?error=invalidfirstname=".$firstname. "&lastname=". $lastname. "&username=".$username. "&user-email=".$email);
		exit();
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
		header("Location: ../signup.php?error=invalidfirstnamelastnameusernameuser-email");
		exit();
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invaliduser-username=".$username);
		exit();
	}
		else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
		header("Location: ../signup.php?error=invaliduser-email&username=".$email."&firstname".$firstname. "&lastname=". $lastname);
		exit();
	}
	elseif ($password !== $rpassword) {
	 		header("Location: ../signup.php?error=password&firstname".$firstname. "&lastname=". $lastname."&username=".$username); 	
		exit();
	}
	else{
		$sql = "SELECT user_name FROM users WHERE user_name=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror"); 	
		exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_init($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
			header("Location: ../signup.php?error=usertaken&firstname".$firstname. "&lastname=". $lastname."&user-email".$email); 	
		exit();
			}
			else {
				$sql = "INSERT INTO users (user_firsn, user_lastn, user_name, user_email, pass) VALUES (?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror"); 	
		exit();

		}
		else{
			$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt, "sssss",$firstname, $lastname, $username, $email, $hashedPwd);
			mysqli_stmt_init($stmt);
			header("Location: ../signup.php?signup=success"); 	
		exit();
		}

			}
		}
	}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else {
		header("Location: ../signup.php"); 	
		exit();
}
?>