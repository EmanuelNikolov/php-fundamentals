<!DOCTYPE html>
<html>
<head>
    <title>Test1</title>
</head>
<body>
  <form action="TakePostRequest.php" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>
  <p>Welcome <?php echo htmlspecialchars($_GET["name"]) ?><br>
Your email is: <?php echo htmlspecialshars($_GET["email"]) ?>
  </p>
</body>
</html>
