<?php


$pass = $_REQUEST["password"];
$con = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($con, "rgstn");
$result = mysqli_query($con, "select *from verify ");
$row = mysqli_fetch_array($result);

if (isset($pass)) {



    if ($pass == $row["password"]) {
        header("location:Showdetails.php");
    } else {
        echo ("wrong Password");
    }

}
?>