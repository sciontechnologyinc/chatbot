<?php
include('db.php');
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

}else if($_GET['a']=='showData'){
    $result = $conn->query("SELECT * FROM doctors WHERE archive = 0");
    $dbdata = array();
       while ( $row = $result->fetch_assoc())  {
         $dbdata[]=$row;
       }
       echo json_encode($dbdata);
       
}else if($_GET['a']=='editData'){
    $id = $_POST['id'];
    
    $result = $conn->query("SELECT * FROM doctors WHERE id='$id'");
    $dbdata = array();
       while ( $row = $result->fetch_assoc())  {
         $dbdata[]=$row;
       }
       echo json_encode($dbdata);
}else if($_GET['a']=='updateUser'){
    $id = $_POST['id'];
 $firstname = $_POST['firstname'];   
 $lastname = $_POST['lastname'];   
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$telephone = $_POST['telephone'];
$school = $_POST['school'];
$specialties = $_POST['specialties'];
    
    $sql = "UPDATE doctors SET firstname ='$firstname',lastname= '$lastname',email = '$email', address = '$address', mobile = '$mobile', telephone = '$telephone', school = '$school', specialties = '$specialties'  WHERE id ='$id'";
    mysqli_query($conn, $sql);
}else if ($_GET['a'] == 'deleteUser'){
  $id = $_POST['id'];
  $sql = "UPDATE doctors SET archive ='1' WHERE id = '$id'";
      mysqli_query($conn, $sql);
    }
    else if($_GET['a']=='showData1'){
    $result = $conn->query("SELECT * FROM doctors WHERE archive = 1");
    $dbdata = array();
       while ( $row = $result->fetch_assoc())  {
         $dbdata[]=$row;
  
          
       
       }
       echo json_encode($dbdata);
}
else if($_GET['a']=='archiveData'){
    $id = $_POST['id'];
    $sql = "UPDATE doctors SET archive ='0' WHERE id ='$id'";
    mysqli_query($conn, $sql);
}
else if ($_GET['a'] == 'deleteUser1'){
  $id = $_POST['id'];
  $sql = "DELETE FROM doctors WHERE id = '$id'";
      mysqli_query($conn, $sql);
}
    else if ($_GET['a']=='select'){
    
    $result = $conn->query("SELECT * FROM doctors where archive = '0'");
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