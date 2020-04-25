<?php
  include "./session.class.php";
  $session = new Session();
  // session_start();

  echo $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="./file.php">file</a>
</body>
</html>