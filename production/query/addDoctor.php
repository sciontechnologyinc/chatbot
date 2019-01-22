<?php
include('../include/db.php');


 if($_GET['a']=='add'){
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
    }else if ($_GET['a']=='select'){
    
    $result = $conn->query("SELECT * FROM d_info");
    $dbdata = array();
    while ( $row = $result->fetch_assoc())  {
      $dbdata[]=$row;
    }
  
   echo json_encode($dbdata);
    }else if($_GET['a'] =='addSchedule'){
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
?>