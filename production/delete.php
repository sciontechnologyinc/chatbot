<?php
include'include/db.php';
if(isset($_GET['id'])){
	$sql = "DELETE FROM users WHERE user_id =".$_GET['id'];
	if (mysqli_query($conn, $sql)) {
	    header('Location: projects.php');
	}
	else {
    echo "Error",mysqli_error($conn);
  } 
}
?>