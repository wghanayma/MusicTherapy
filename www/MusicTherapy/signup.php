<?php
include './db_conn.php';
include './PHPMailerAutoload.php';
session_save_path("/tmp");
session_start();
if (isset($_POST['signup'])) {
  $mail = new PHPMailer;
  $userName = $_POST['uname'];
  $firstname = $_POST['fname'];
  $midname = $_POST['mname'];
  $lastname = $_POST['lname'];
  $email = $_POST['email'];
  $confEmail = $_POST['emailConfirm'];
  $password = $_POST['pwd'];
  $passwordConfirm = $_POST['passwordConfirm'];
  $gender = $_POST['gender'];
  $day = $_POST['day'];
  $month = $_POST['month'];
  $year = $_POST['year'];
  $bday = date_create($year . "/" . $month . "/" . $day);
  #Checking User

  $sql = "SELECT UserName FROM UserTable WHERE UserName=?;";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$userName]);
  $stmt->fetchAll();
  $NOU = $stmt->rowCount();
  #Checking Email
  $sql = "SELECT Email FROM UserTable Where Email=?;";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$email]);
  $stmt->fetchAll();
  $NOE = $stmt->rowCount();
  if ($NOE != 0 || $NOU != 0 || $password != $passwordConfirm || $email != $confEmail) {
    # Will not be executed if one of the above is false
  } else {
    #Will be executed if only the username doesn't exist in the
    #database and the email don't exist and the two password are equals.
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
    $mail->addAddress($email, $firstname . " " . $lastname);
    $mail->Subject = "Verification Code";
    $code = generateRandomInt();
    $mail->Body = "<h3>Your Verification Code is :</h3><br><h1>" . $code . "</h1>";
    $mail->AltBody = "Your Verification Code is :<br>" . $code;
    // if (!$mail->send()) {
    //   echo "Mailer Error: " . $mail->ErrorInfo;
    // } else {
    //   // echo "Message sent!";
    // }
    $mail->send();
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO UserTable VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = $pdo->prepare($sql);
    $idu = md5($userName);
    $stmt->execute([$idu, $userName, $firstname, $midname, $lastname, $hashedpassword, date_format($bday, "Y/m/d"), $email, "user", $gender, $code, "-1"]);
    $_SESSION['username'] = $userName;
    $_SESSION['email'] = $email;
    unset($_SESSION["usernameloginV"]);
    header("Location: ./verify.php?success");
  }
}
?>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./styles/Signup.css">
  <script type="text/javascript" src="http://code.jQuery.com/jquery-latest.min.js"></script>
  <script src="./script/Signup.js"></script>
  <script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
  }
  </script>
  <title>Music Therapy - Sign up</title>
</head>

<body frameborder="0" scrolling="no" onload="resizeIframe(this)">
  <nav class="navbar shadow fixed-top navbar-expand-md navbar-dark transparent" id="topbar">
    <div class="justify-center" style="margin-left:3.5px;display: inline-flex;">
      <a href="./index.html"><img src="./images/Logo.png" href="./index.html" class="mx-auto d-block"
          style="width:55px;height:55px"></a>
      <a class="navbar-brand " href="./index.html" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music Therapy</a>
    </div>
  </nav>

  <div class="container-fluid" style="color: #ffaa00;">
    <form method="POST" action="./signup.php" class="is-valid justify-center" style="max-width: 500px;">
      <div style="text-align: center;">
        <a href="./index.html"><img src="./images/Logo.png" href="./index.html" class="mx-auto d-block"
            style="width:150px;height:150px"></a>
        <label style="font-size: 30px;">Sign Up</label>
      </div>
      <div class="form-group">
        <label for="text">Username :</label>
        <input type="text" class="form-control" placeholder="Username" name="uname" id="uname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please Enter an Username.</div>
      </div>
      <div class="form-group">
        <label for="text">First Name :</label>
        <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please Enter an FirstName.</div>
      </div>
      <div class="form-group">
        <label for="text">Middle Name :</label>
        <input type="text" class="form-control" placeholder="Middle Name (optional)" name="mname" id="mname">
      </div>
      <div class="form-group">
        <label for="text">Last Name :</label>
        <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please Enter an Last Name.</div>
      </div>
      <div class="form-group">
        <label for="email">Email Address :</label>
        <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill Your Email.</div>
      </div>
      <div class="form-group">
        <label for="email">Confirm Email Address :</label>
        <input name="emailConfirm" class="form-control" type="email" placeholder="Confirm Email Address" id="confemail"
          required />
        <div id="validMessage"></div>
      </div>
      <div class="form-group">
        <label for="pwd">Password :</label>
        <input type="password" class="form-control" placeholder="Enter password" name="pwd" id="pwd" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback" id="confirmemail">Please Enter a Password.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Confirm Password :</label>
        <input name="passwordConfirm" type="password" class="form-control" placeholder="Confirm password" id="confpwd"
          required>
      </div>
      <div class="form-group">
        <label for="my-input">Birth Date :</label><br>
        <div style="text-align: center;">
          <label for="day">Day :</label><select name="day" id="day" style="width: 70px;height: 30px;"></select>
          <label for="month">Month :</label><select name="month" id="month" style="width: 70px;height: 30px;"></select>
          <label for="year">Year :</label><select name="year" id="year" style="width: 90px;height: 30px;"></select>
        </div>
      </div>
      <div class="form-group">
        <label for="male">Gender :</label>
        <input type="radio" id="male" name="gender" value="male" checked>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
      </div>
      <div style="text-align: center;">
        <button type="submit" name="signup" class="btn btn-primary justify-center">Sign up</button>
      </div>
      <div style="text-align: center;">
        <?php
        if (isset($_POST['signup'])) {
          if ($NOU != 0) {
            echo "<label class='text text-danger' style='font-size: 30px '  name=\"message\">The Username has been taken please choose another one</label>";
            exit();
          } else if ($NOE != 0) {
            echo "<label class='text text-danger' style='font-size: 30px '  name=\"message\">The Email has been used please choose another one</label>";
            exit();
          } else if ($email != $confEmail) {
            echo "<label class='text text-danger' style='font-size: 30px ' name=\"message\">The emails don't match</label>";
            exit();
          } else if ($password != $passwordConfirm) {
            echo "<label class='text text-danger' style='font-size: 30px ' name=\"message\">The passwords don't match</label>";
            exit();
          }
        }
        ?>
      </div>
    </form>
  </div>

</body>

</html>