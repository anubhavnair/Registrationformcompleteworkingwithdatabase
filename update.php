<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updation Form</title>
</head>

<body>

<?php
     session_start();
    $con=mysqli_connect("127.0.0.1","root","");
    $_SESSION["idnumber"]=$_REQUEST["id"];
    $id=$_REQUEST["id"];
    mysqli_select_db($con,"rgstn");
    $tabledata=mysqli_query($con,"select *from student where sid=$id");
    $row=mysqli_fetch_array($tabledata);
    $sid=$row["sid"];
    $name=$row["sname"];
    $address=$row["saddress"];
    $mobile=$row["smobile"];



?>

    <table border="1">
        <form action="updatedetails.php">

            <tr>
                <th colspan="2">
                    <h1>Updation Form</h1>
                </th>
            </tr>
            <tr>
                <th>Enter Your Name</th>
                <td><input type="text" name="txtname" value=<?php echo($name); ?>></td>
            </tr>
            <tr>
                <th>Enter Your Address</th>
                <td><input type="text" name="txtaddress" value=<?php echo($address); ?>></td>
            </tr>
            <tr>
                <th>Enter Your Mobile Number</th>
                <td><input type="text" name="txtmobile"  value=<?php echo($mobile); ?>></td>
            </tr>
            <tr>
                <th align="right"><input type="submit" value="Update Now">
                  
                </th>
                <th align="left"><input type="reset"></th>


            </tr>
        </form>

    </table>


</body>

</html>