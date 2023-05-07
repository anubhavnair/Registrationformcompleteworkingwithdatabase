<?php
$name= $_REQUEST["txtname"];
$address= $_REQUEST["txtaddress"];
$mobile_n=$_REQUEST["txtmobile"];

// echo($name);
// echo($address);
// echo($mobile_n);

$con=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con,"rgstn");
mysqli_query($con,"insert into student(sname,saddress,smobile) values('$name','$address','$mobile_n')");

echo("<h1>DATA SAVED SUCCESSFULLY</h1>");

header("location:Registration.html");


?>