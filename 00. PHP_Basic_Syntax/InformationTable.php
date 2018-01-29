<?php
  $name = "Gosho";
  $phoneNum = "088945107";
  $age = 23;
  $address = "Slivnica";
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Table</title>
</head>
<body>
<table>
    <tr>
        <td>Name</td>
        <td><?php echo $name ?></td>
    </tr>
    <tr>
        <td>Phone Number<br></td>
        <td><?php echo $phoneNum ?></td>
    </tr>
    <tr>
        <td>Age<br></td>
        <td><?php echo $age ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address ?></td>
    </tr>
</table>
</body>
</html>