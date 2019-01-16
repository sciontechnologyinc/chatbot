<?php
include('../include/db.php');


 $name = $_POST['fullname'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $number = $_POST['number'];
 $telephone = $_POST['telephone'];
 $school = $_POST['school'];
 $specialties = $_POST['specialties'];

 $sql = "INSERT INTO d_info(d_fullname, d_email, d_address, d_number, d_telephone, d_school, d_specialt)
 VALUES ('$name', '$email','$address','$number','$telephone','$school','$specialties')";

 mysqli_query($conn, $sql);

?>