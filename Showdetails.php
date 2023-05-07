<?php

$con=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con,"rgstn");
$row=mysqli_query($con,"select *from student");
$SNO=0;


echo("<table border='1'>");

echo("<tr><th colspan='5'>Registered Student Details</th></tr>");

echo("<tr>");
echo("<th> Serial Number </th>");
echo("<th> Roll Number</th>");
echo("<th> Student Name</th>");
echo("<th> Student Address </th>");
echo("<th> Student Mobile Number</th>");
echo("</tr>");


while($data=mysqli_fetch_array($row)){
$SNO++;
    echo("<tr align='center'>");

    echo("<td>");
    echo($SNO);
    echo("</td>");
    echo("<td>");
    echo($data["sid"]);
    echo("</td>");
    echo("<td>");
    echo($data["sname"]);
    echo("</td>");
    echo("<td>");
    echo($data["saddress"]);
    echo("</td>");
    echo("<td>");
    echo($data["smobile"]);
    echo("</td>");


    echo("</tr>");
}





echo("</table>");

?>