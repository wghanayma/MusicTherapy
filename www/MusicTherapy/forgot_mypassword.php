<?php

include './PHPMailerAutoload.php';
if (isset($_POST['send'])) {
  include './db_conn.php';
  $emailp = $_POST['emailp'];
  $sql = "SELECT Email FROM UserTable Where Email=?;";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$emailp]);
  $stmt->fetchAll();
  $NOFR = $stmt->rowCount();
  if ($NOFR != 0) {
    session_save_path("/tmp");
    session_start();
    $_SESSION["RPEmail"] = $emailp;
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "musictherapy56@gmail.com";
    $mail->Password = "Musictherapy10";
    $mail->setFrom('musictherapy56@gmail.com', 'Music Therapy');
    $mail->addReplyTo('musictherapy56@gmail.com', 'Music Therapy');
    $mail->addAddress($emailp, "you");
    $mail->Subject = "Password reset code";
    $newcode = generateRandomInt();
    $mail->Body = "<h3>Your use this code to reset password :</h3><br><h1>" . $newcode . "</h1>";
    $mail->AltBody = "Your use this code to reset password :<br>" . $newcode;
    $mail->send();
    $sql = "UPDATE UserTable SET FCode=" . $newcode . " Where Email=?;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$emailp]);
    header("Location: ./reset_pass_code.php?resetpassword");
  }
}
?>

<!DOCTYPE html>

<html>

<head>
  <!-- BootStrap CDN for CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <!-- BootStrap CDN for JQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <!-- BootStrap CDN for popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- BootStrap CDN for JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
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
      <a href="./index.php"><img src="./images/Logo.png" href="./index.php" class="mx-auto d-block" style="width:55px;height:55px"></a>
      <a class="navbar-brand" href="./index.php" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music Therapy</a>
    </div>
  </nav>
  <div class="container">
    <!-- TODO -->
    <form method="post" action="forgot_mypassword.php">
      <h1 style="text-align: center;">Password Reset</h1>
      <!-- <h4>Verify your email address to gain access to your account.</h4> -->
      <h4 style="text-align: center;">Enter your email address, if it exist we will send you an email<br> with a New
        Password.</h4>
      <div class="container">
        <h3 style="color: #ffaa00;">Email Address:</h3>
        <input name="emailp" required class="form-control" type="email" name="VerificationCode" placeholder="Email Address">
        <button type="submit" name="send" class="btn btn-success btn-block justify-center Verify-btn" type="button">Send</button>
        <!-- TODO -->

        <!-- <?php
              if (isset($_POST['send'])) {
                if ($NOFR == 0)
                  echo '<h5 class="text text-danger" style="text-align: center;margin-top:50px; font-size: 30px">Wrong Email </h5>';
                else
                  echo '<h5 class="text text-success" style="text-align: center;margin-top:50px; font-size: 30px">Sent Succefully,Check your email. </h5>';
              }

              ?> -->
        <h5 style=" text-align: center; ">if you are having a trouble, send us an email
          <a href="./support.php " style="color: #ffaa00;">Here</a>
        </h5>
      </div>

    </form>
  </div><?php

include './PHPMailerAutoload.php';
if (isset($_POST['send'])) {
  include './db_conn.php';
  $emailp = $_POST['emailp'];
  $sql = "SELECT Email FROM UserTable Where Email=?;";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$emailp]);
  $stmt->fetchAll();
  $NOFR = $stmt->rowCount();
  if ($NOFR != 0) {
    session_save_path("/tmp");
    session_start();
    $_SESSION["RPEmail"] = $emailp;
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "musictherapy56@gmail.com";
    $mail->Password = "Musictherapy10";
    $mail->setFrom('musictherapy56@gmail.com', 'Music Therapy');
    $mail->addReplyTo('musictherapy56@gmail.com', 'Music Therapy');
    $mail->addAddress($emailp, "you");
    $mail->Subject = "Password reset code";
    $newcode = generateRandomInt();
    $mail->Body = "<h3>Your use this code to reset password :</h3><br><h1>" . $newcode . "</h1>";
    $mail->AltBody = "Your use this code to reset password :<br>" . $newcode;
    $mail->send();
    $sql = "UPDATE UserTable SET FCode=" . $newcode . " Where Email=?;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$emailp]);
    header("Location: ./reset_pass_code.php?resetpassword");
  }
}
?>

<!DOCTYPE html>

<html>

<head>
  <!-- BootStrap CDN for CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <!-- BootStrap CDN for JQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <!-- BootStrap CDN for popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- BootStrap CDN for JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
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
      <a href="./index.php"><img src="./images/Logo.png" href="./index.php" class="mx-auto d-block" style="width:55px;height:55px"></a>
      <a class="navbar-brand" href="./index.php" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music Therapy</a>
    </div>
  </nav>
  <div class="container">
    <!-- TODO -->
    <form method="post" action="forgot_mypassword.php">
      <h1 style="text-align: center;">Password Reset</h1>
      <!-- <h4>Verify your email address to gain access to your account.</h4> -->
      <h4 style="text-align: center;">Enter your email address, if it exist we will send you an email<br> with a New
        Password.</h4>
      <div class="container">
        <h3 style="color: #ffaa00;">Email Address:</h3>
        <input name="emailp" required class="form-control" type="email" name="VerificationCode" placeholder="Email Address">
        <button type="submit" name="send" class="btn btn-success btn-block justify-center Verify-btn" type="button">Send</button>
        <!-- TODO -->

        <!-- <?php
              if (isset($_POST['send'])) {
                if ($NOFR == 0)
                  echo '<h5 class="text text-danger" style="text-align: center;margin-top:50px; font-size: 30px">Wrong Email </h5>';
                else
                  echo '<h5 class="text text-success" style="text-align: center;margin-top:50px; font-size: 30px">Sent Succefully,Check your email. </h5>';
              }

              ?> -->
        <h5 style=" text-align: center; ">if you are having a trouble, send us an email
          <a href="./support.php " style="color: #ffaa00;">Here</a>
        </h5>
      </div>

    </form>
  </div>
</body>



</html>
</body>



</html>