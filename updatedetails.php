<?php

session_start();
$name=$_REQUEST["txtname"];
$address=$_REQUEST["txtaddress"];
$mobile=$_REQUEST["txtmobile"];

echo($_SESSION["idnumber"]);

$id=$_SESSION["idnumber"];

$con=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con,"rgstn");
mysqli_query($con,"update student set sname='$name',saddress='$address',smobile='$mobile' where sid=$id");


header("location:ShowDetails.php?status=2");





?>