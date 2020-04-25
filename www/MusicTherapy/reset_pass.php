<?php
session_save_path("/tmp");
session_start();


if (isset($_POST['SetPass'])) {

  $new = $_POST['NewPass'];
  $Rnew = $_POST['RepeatNewPass'];

  if ($new == $Rnew) {
    $sql = "UPDATE UserTable SET Password='" . $code . "'Where Email=?;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
  }
}





?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Latest compiled and minified CSS -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jsmediatags/3.9.3/jsmediatags.js"></script>
  <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
  <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>

  <title>Music Therapy - Edit Account Information </title>
  <!-- <script src="./script/id3-minimized.js"></script> -->
  <!-- <link rel="import" href="http://192.168.1.100:9000/"> -->
  <link rel="shortcut icon" href=".././images/Logo.png">
  <link rel="stylesheet" href=".././icons/css/all.css">
  <link rel="stylesheet" href="./styles/edit_account_information_overview.css" />
  <script src=".././script/index.js"></script>
</head>

<body>
  <nav class="navbar shadow fixed-top navbar-expand-md navbar-dark transparent" id="topbar">
    <div class="justify-center" style="margin-left:3.5px;display: inline-flex;">
      <a href="./index.html"><img src="./images/Logo.png" href="./index.html" class="mx-auto d-block" style="width:55px;height:55px"></a>
      <a class="navbar-brand " href="./index.html" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music Therapy</a>
    </div>
  </nav>


  <div class="container h-100" style="margin-top:10%">


    <div class=" row h-100 justify-content-center align-items-center ">
      <div class="container ">

        <div class="row ">

          <div class="col-md-6 offset-md-2 ">.
            <div class="form-group ">
              <h2 style="display:block; color: #ffaa00; margin-bottom:50px;">Change Your Password </h2>
            </div>
            <div class="form-group ">
              <label style="display: block;color: #ffaa00; " for="pwdNewPassword">New Password:</label>
              <input name="NewPass" type="password" class="form-control" placeholder="Enter New Password">
            </div>
            <div class="form-group ">
              <label style="display: block;color: #ffaa00; " for="pwdRepeatNewPassword ">Repeat New Password:</label>
              <input name="RepeatNewPass" type="password" class="form-control" placeholder="Enter Repeat Password">
            </div>
            <div class="form-group">
              <div class="text-center ">
                <button nane="SetPass" type="submit" class="btn btn-primary">Set New Password</button>
              </div>
            </div>
          </div>
        </div>




      </div>
    </div>

  </div>




  <!-- TODO -->

  <!-- TODO Edit Navbar -->
  <nav class=" navbar navbar-expand-md navbar-dark bg-dark fixed-bottom z-index-0 h-80px " id="bottombar ">
    <img src=" " id="Cover ">
    <audio src="http://192.168.1.100:9000/Aitana%20-%20Spoiler/01%20Nada%20Sale%20Mal.m4a " autoplay class="col-md-12 player " controls>
    </audio>
  </nav>
</body>

</html>