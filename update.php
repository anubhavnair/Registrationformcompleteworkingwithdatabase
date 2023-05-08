<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updation Form</title>

    <style>
        table {
  border-collapse: collapse;
  margin: auto;
}

th, td {
  padding: 10px;
  text-align: left;
}

th {
  background-color: #003366;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #e6e6e6;
}

h1 {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 30px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #003366;
}

input[type=submit], input[type=reset] {
  background-color: #003366;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 10px;
}

input[type=submit]:hover, input[type=reset]:hover {
  background-color: #002147;
}

th[colspan="2"] {
  background-color: #002147;
  text-align: center;
  padding: 20px;
  color: white;
}

    </style>
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