<?php
session_start();
include'include/db.php';
if(isset($_POST['btn_submit'])){
  $sql = "UPDATE users set d_fullname ='".$_POST['fullname']."', d_email = '".$_POST['email']."',d_address = '".$_POST['address']."', d_number = '".$_POST['number']."',d_telephone = '".$_POST['telephone']."',_school = '".$_POST['school']."', d_specialt = '".$_POST['specialties']."' WHERE d_id = '".$_POST['txt_id']."' ";
  if (mysqli_query($conn, $sql)) {
    
    header('Location: projects.php');
  } else {
    echo "Error",mysqli_error($conn);
  } 
}
$id = '';
$firstname = '';
$lastname = '';
$username = '';
$email = '';
$mobile = '';
$status = '';
if(isset($_GET['id'])){
  $sql = "SELECT * FROM users WHERE user_id =".$_GET['id'];
  $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) 
{
  $row = mysqli_fetch_assoc($result);
  $id = $row['d_id']; 
  $fulltname = $row['user_firstn'];
  $lastname = $row['user_lastn'];
  $username = $row['user_name'];
  $email = $row['user_email'];
  $mobile = $row['user_mobile'];
  $status = $row['status'];
}
}
?>