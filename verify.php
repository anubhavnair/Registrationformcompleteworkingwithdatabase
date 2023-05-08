<html>

<head>
    <style>
        form {
  margin: 20px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-family: Arial, sans-serif;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  text-align: right;
  padding: 10px;
}

td {
  padding: 10px;
}

input[type="password"] {
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

    </style>
</head>


<body>
    


<form action="passwordverification.php">
      
<table>
    <tr><th>Enter Password </th><th><input type="password" name="password"></th></tr>
    <tr><th colspan="2"><input type="submit" name="Verify"></th></tr>
</table>

</form>


</body>
    

</html>


