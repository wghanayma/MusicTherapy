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
  <title>Music Therapy - Login</title>
  <link rel="stylesheet" href="./styles/Login.css" />
  <script src="./script/Login.js"></script>
</head>

<body>
  <nav class="navbar shadow fixed-top navbar-expand-md navbar-dark transparent" id="topbar">
    <div class="justify-center" style="margin-left:3.5px;display: inline-flex;">
      <a href="./index.html"><img src="./images/Logo.png" href="./index.html" class="mx-auto d-block" style="width:55px;height:55px"></a>
      <a class="navbar-brand " href="./index.html" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music Therapy</a>
    </div>

  </nav>
  <div class="container box">
    <form class="justify-center" style="width: 100%;max-width: 300px;" method="POST" action="./index.html">
      <label class="text-center">Login</label>
      <label style="display: block;color: #ffaa00;font-size: 18px;">Username :</label>
      <input type="text" required style="display: block;width: inherit;" />
      <label style="display: block;" for="spacing"> </label>
      <label style="display: block;color: #ffaa00;font-size: 18px;">Password :</label>
      <input type="password" required style="display: block;width: inherit;" />
      <label style="display: block;" for="spacing"> </label>
      <label for="signup" style="color: #ffaa00;">Don't have an account ? <a href="./Signup.html">Sign up</a>.</label>
      <label for="forgot-password" style="color: #ffaa00;"><a href="./forgot-mypassword.html">Forgot my Password !</a></label>
      <div style="text-align: center;">
        <button type="submit" class="btn">Login</button>
      </div>
    </form>
  </div>

</body>

</html>