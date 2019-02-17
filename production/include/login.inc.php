<?php
if(isset($_POST['login-submit'])){
require 'db.php';
$musername = $_POST['musern'];
$mpassword = $_POST['mpass'];

if (empty($musername) || empty($mpassword)) {
		header("Location: ../login.php?error=emptyfields");
			exit();

}
else {
			$sql = "SELECT * FROM users WHERE user_name=? OR user_email =?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../login.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "ss", $musername, $musername);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);	
		if ($row = mysqli_fetch_assoc($result)) {
			$pwdCheck = password_verify($mpassword, $row['pass']);
			if ($pwdCheck == false) {
			header("Location: ../login.php?error=wrongpassword&musern=".$musername);
			exit();
			}
			else if ($row['status'] == 0) {
				session_start();
		$_SESSION['userId'] =  $row['user_id'];
		$_SESSION['musern'] =  $row['user_name'];
		header("Location: ../login.php?error=status");
		exit();
		}
			else if ($pwdCheck == true && $row['status'] == 1) {
			session_start();
			$_SESSION['userId'] =  $row['user_id'];
			$_SESSION['musern'] =  $row['user_name'];
			
			header("Location: ../index.php?login=success");
		}
		}
		else {
			header("Location: ../login.php?error=wrongpassword");
		}
		}
}
}

else {
		header("Location: ../index.php");
			exit();
}