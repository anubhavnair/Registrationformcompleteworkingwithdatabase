   
    <?php

$con=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con,"rgstn");
$row=mysqli_query($con,"select *from student");
$SNO=0;



if(isset($_REQUEST["status"])){
    if($_REQUEST["status"]==1){
        echo("Data Deleted");
    }
    else if($_REQUEST["status"]==2){
        echo("Data DataUpdated");
    }
}


echo("<table border='1'>");

echo("<tr><th colspan='7'>Registered Student Details</th></tr>");

echo("<tr>");
echo("<th> Serial Number </th>");
echo("<th> Roll Number</th>");
echo("<th> Student Name</th>");
echo("<th> Student Address </th>");
echo("<th> Student Mobile Number</th>");
echo("<th> Status</th>");
echo("<th> Update</th>");
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
    echo("<td>");
    $x=$data["sid"];
    echo("<a  id ='deleteoption'href='delete.php?roll=$x' style='text-decoration:none;'>Delete</a>");
    echo("</td>");
    echo("<td>");
    $y=$data["sid"];
    echo("<a href='update.php?id=$y' style='text-decoration:none;' id='updateoption'>Upate</a>");
    echo("</td>");



    
    
    echo("</tr>");
}





echo("</table>");

?>
</html>