<?php
include('db.php');
if($_GET['a']=='add'){   
 $firstname = $_POST['firstname'];   
 $lastname = $_POST['lastname'];  
 $Username = $_POST['Username']; 
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$status = $_POST['status'];
 
 $sql = "INSERT INTO users(user_firstn, user_lastn, user_name, user_email, user_mobile, status)
 VALUES ('$firstname', '$lastname', '$Username', '$email', '$mobile', '$status')";

 mysqli_query($conn, $sql);

}else if($_GET['a']=='showData'){
    $result = $conn->query("SELECT * FROM users WHERE archive = 0");
    $dbdata = array();
       while ( $row = $result->fetch_assoc())  {
         $dbdata[]=$row;
       }
       echo json_encode($dbdata);
}else if($_GET['a']=='editData'){
    $id = $_POST['id'];
    
    $result = $conn->query("SELECT * FROM users WHERE id='$id'");
    $dbdata = array();
       while ( $row = $result->fetch_assoc())  {
         $dbdata[]=$row;
       }
       echo json_encode($dbdata);
}else if($_GET['a']=='updateUser'){
    $id = $_POST['id'];
 $firstname = $_POST['user_firstn'];   
 $lastname = $_POST['user_lastn'];  
 $Username = $_POST['user_name']; 
$email = $_POST['user_email'];
$mobile = $_POST['user_mobile'];
$status = $_POST['status'];

    $sql = "UPDATE users SET user_firstn ='$firstname',user_lastn= '$lastname',user_name = '$Username', user_email = '$email', user_mobile = '$mobile', status = '$status'  WHERE id ='$id'";
    mysqli_query($conn, $sql);
}else if ($_GET['a'] == 'deleteUser'){
  $id = $_POST['id'];
  $sql = "UPDATE users SET archive ='1' WHERE id = '$id'";
      mysqli_query($conn, $sql);
}

else if($_GET['a']=='showData1'){
    $result = $conn->query("SELECT * FROM users WHERE archive = 1");
    $dbdata = array();
       while ( $row = $result->fetch_assoc())  {
         $dbdata[]=$row;
  
          
       
       }
       echo json_encode($dbdata);
}
else if($_GET['a']=='archiveData'){
    $id = $_POST['id'];
    $sql = "UPDATE users SET archive ='0', status = 1 WHERE id ='$id'";
    mysqli_query($conn, $sql);
}
else if ($_GET['a'] == 'deleteUser1'){
  $id = $_POST['id'];
  $sql = "DELETE FROM users WHERE id = '$id'";
      mysqli_query($conn, $sql);
}
?>