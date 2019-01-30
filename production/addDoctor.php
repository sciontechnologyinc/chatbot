<?php
session_start();
include'include/db.php';

if(isset($_POST['dbtn_submit'])){

$sql = "INSERT INTO d_info(d_fullname, d_email, d_address, d_number, d_telephone, d_school, d_specialt)
VALUES ('".$_POST['fullname']."', '".$_POST['email']."', '".$_POST['address']."', '".$_POST['number']."', '".$_POST['telephone']."', '".$_POST['school']."', '".$_POST['specialties']."')";
if (mysqli_query($conn, $sql)) {
  header('Location:index.php');
}
else {
  echo "Error". mysqli_error($conn);
}
}
?>
