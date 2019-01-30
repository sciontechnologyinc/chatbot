<?php
include'include/db.php';
if(isset($_GET['id'])){
	$sql = "DELETE FROM d_info WHERE d_id =".$_GET['id'];
	if (mysqli_query($conn, $sql)) {
	    header('Location: doctorslist.php');
	}
	else {
    echo "Error",mysqli_error($conn);
  } 
}
?>