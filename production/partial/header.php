<?php
session_start();
if (!(isset($_SESSION['musern']))){
header("Location: login.php");  
}
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- eta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon2.png" type="image/ico" />
    <title>Fe Del Mundo Medical Center | </title>
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="../build/css/custom.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="css/clockpicker.css">
    <link rel="stylesheet" href="css/clockpicker12hour.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

</head>