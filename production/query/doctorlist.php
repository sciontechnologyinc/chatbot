<?php
include('../include/db.php');

$result = $conn->query("SELECT * FROM d_info");
$dbdata = array();
while ( $row = $result->fetch_assoc())  {
    $dbdata[]=$row;
}

$file = fopen('../../JSON/doctorlist.json','w');
fwrite($file,json_encode($dbdata));

$url = '../../JSON/doctorlist.json';
$data = file_get_contents($url);
$characters = json_decode($data);
?>