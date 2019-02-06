<?php

if(isset($_POST['signup-submit'])){
	require 'db.php';

	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$username =$_POST['username'];
	$mobile =$_POST['mobilenum'];
	$email =$_POST['user-email'];
	$password =$_POST['pass'];
	$rpassword =$_POST['rpass'];
	


	if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($mobile) || empty($password) || empty($rpassword)) {
		header("Location: ../login.php?error=emptyfieldsfirstname=".$firstname. "&lastname=". $lastname. "&username=".$username. "&user-email=".$email);
		exit();
	}

	else if (!filter_var($username, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
		header("Location: ../login.php?error=invalidusername1&firstname=".$firstname. "&lastname=". $lastname. "user-email=".$email);
		exit();
	}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../login.php?error=invalidsusername&user-email=".$username);
		exit();
	}
	
		else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
		header("Location: ../login.php?error=invaliduser-email&username=".$email."&firstname".$firstname. "&lastname=". $lastname);
		exit();
	}
	else if(!preg_match("/^\d{11}+$/",$mobile)) {
		header("Location: ../login.php?error=invalidnumber&user-email=".$email."&username=".$username."&firstname=".$firstname. "&lastname=". $lastname);
		exit();
	}
	elseif ($password !== $rpassword) {
	 		header("Location: ../login.php?error=passwordchecked&firstname=".$firstname. "&lastname=". $lastname."&username=".$username."&user-email=".$email."&mobilenum=".$mobile); 	
		exit();
	}
	else{
		$sql = "SELECT user_name FROM users WHERE user_name=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../login.php#signup-submit?error=sqlerror"); 	
		exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
			header("Location: ../login.php?error=usertaken&firstname=".$firstname. "&lastname=". $lastname."&user-email=".$email."&mobilenum=".$mobile); 	
		exit();
			}
			else {
				$sql = "INSERT INTO users (user_firstn, user_lastn, user_name, user_email, user_mobile,status,role, pass) VALUES (?, ?, ?, ?, ?, 0, 0, ?)";

				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../login.php?error=sqlerror"); 	
		exit();

		}
		else{
			$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt, "ssssss",$firstname, $lastname, $username, $email, $mobile, $hashedPwd);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			header("Location: ../login.php?signup=success"); 	
		exit();
		}

			}
		}
	}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else {
		header("Location: ../login.php"); 	
		
		exit();
}

?>