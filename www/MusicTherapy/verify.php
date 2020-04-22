<?php
  include './db_conn.php';

    session_save_path("/tmp");
    session_start();
  $userN=$_SESSION['username'];
  $sql = "SELECT Email FROM UserTable Where UserName=?;";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$userN]);
  $result=$stmt->fetchAll();
  foreach ($result as $email) {
    $emailV=$email['Email'];
  }
  $_SESSION['emailVerify']=$emailV;
  if(isset($_POST['Verify'])){
    $userCode=$_POST['verifyCode'];
    $sql = "SELECT verified,Email FROM UserTable Where UserName=?;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userN]);
    $result=$stmt->fetchAll();
    foreach ($result as $code) {
      $codeV=$code['verified'];


    }
    if($codeV==$userCode){
      sleep(1);

      header("Location: ./login.php?verified");
    }
  }


?>


<!DOCTYPE html>
<html>

<head>
  <!-- BootStrap CDN for CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <!-- BootStrap CDN for JQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <!-- BootStrap CDN for popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- BootStrap CDN for JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./images/Logo.png">
  <title>Music Therapy - Verify</title>
  <link rel="stylesheet" href="./styles/Verify.css" />
  <script src="./script/Verify.js"></script>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" id="topbar">
    <div class="justify-center" style="margin-left:3.5px;display: inline-flex;">
      <a href="./index.html"><img src="./images/Logo.png" href="./index.html" class="mx-auto d-block" style="width:55px;height:55px"></a>
      <a class="navbar-brand" href="./index.html" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music Therapy</a>
    </div>
  </nav>
  <div class="container">
    <!-- TODO -->
    <form method="post" action="./verify.php">
      <h1 style="text-align: center;">Please Check Your E-Mail</h1>
      <!-- <h4>Verify your email address to gain access to your account.</h4> -->
      <h4 style="text-align: center;">We sent an Email to
      <?php
     if (empty($_SESSION['emailVerify']))
     header("Location: ./login.php");
       else echo $_SESSION['emailVerify'];

     ?>
      with a code to verify your account.</h4>

      <div class="container" style="padding-top: 50px;">
        <h3 style="text-align: center;">Please Enter Your Code Here:</h3>
        <input required class="form-control input-width justify-center" name="verifyCode" type="number" name="VerificationCode" placeholder="Verification Code">
        <button type="submit" name="Verify" class="btn btn-success btn-block justify-center Verify-btn" type="button">Verify</button>
        <?php

          if (isset($_POST['Verify'])){

            if($codeV!=$userCode){

              echo '<h5 class="text text-danger" style="text-align: center;margin-top:50px; font-size: 30px">Wrong Code. </h5>';

            }


          }

        ?>

        <h5 style="text-align: center;margin-top:50px;">if you did not receive an email check the spam folder or <a href="./verify_password.php" name="newV" style="color: #ffaa00;">Press here to request a new one</a></h5>
        <!-- TODO -->
        <h5 style="text-align: center;">if you are having a trouble, send us an email
          <a href="./support.php" style="color: #ffaa00;">Here</a>
        </h5>
      </div>

    </form>
  </div>
</body>

</html>
