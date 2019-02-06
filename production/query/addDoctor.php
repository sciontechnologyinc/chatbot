<?php
include('../include/db.php');


 if($_GET['a']=='add'){
  $firstname = $_POST['firstname'];   
 $lastname = $_POST['lastname'];   
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$telephone = $_POST['telephone'];
$school = $_POST['school'];
$specialties = $_POST['specialties'];
 
 $sql = "INSERT INTO doctors(firstname, lastname, email, address, mobile, telephone, school, specialties)
 VALUES ('$firstname', '$lastname', '$email', '$address' ,'$mobile', '$telephone', '$school', '$specialties')";

 mysqli_query($conn, $sql);
    }else if ($_GET['a']=='select'){
    
    $result = $conn->query("SELECT * FROM doctors");
    $dbdata = array();
    while ( $row = $result->fetch_assoc())  {
      $dbdata[]=$row;
    }
  
   echo json_encode($dbdata);
    }
    
    
    else if($_GET['a'] =='addSchedule'){
        $iddoctor = $_POST['iddoctor'];
        $day = $_POST['day'];
        $timein = $_POST['timein'];
        $timeout = $_POST['timeout'];
        $status = $_POST['status'];

         $result = $conn->query("SELECT id_doctor,day FROM schedule WHERE id_doctor = '$iddoctor' AND day='$day' ");
         if($result->num_rows == 0) {
            $sql = "INSERT INTO schedule(id_doctor, day, timein, timeout, status)
            VALUES ('$iddoctor', '$day','$timein','$timeout','$status')";
              mysqli_query($conn, $sql);
         } else {
            $sql = "UPDATE schedule SET timein ='$timein',timeout= '$timeout' WHERE id_doctor ='$iddoctor' AND day='$day'";
            mysqli_query($conn, $sql);
         }
        
    }

    else if($_GET['a'] =='showSchedule'){
      $iddoctor = $_POST['iddoctor'];

       $result = $conn->query("SELECT * FROM schedule WHERE id_doctor = '$iddoctor'");
       $dbdata = array();
       while ( $row = $result->fetch_assoc())  {
         $dbdata[]=$row;
       }
       echo json_encode($dbdata);
      
  }
?>