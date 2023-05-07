<?php
$x=$_REQUEST["roll"];
$con=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con,"rgstn");
mysqli_query($con,"delete from student where sid=$x");

echo("Data is Deleted");
header("location:Showdetails.php?status=1");



?>