<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <!-- BootStrap CDN for JQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <!-- BootStrap CDN for popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- BootStrap CDN for JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jsmediatags/3.9.3/jsmediatags.js"></script>
  <title>Admin Page</title>
  <!-- <script src="./script/id3-minimized.js"></script> -->
  <!-- <link rel="import" href="http://192.168.1.100:9000/"> -->
  <link rel="shortcut icon" href=".././images/Logo.png">
  <link rel="stylesheet" href=".././icons/css/all.css">
  <link rel="stylesheet" href="./styles/admin_page.css" />
  <script src=".././script/index.js"></script>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" id="topbar">
    <button class="navbar-toggler" type="button" onclick="showOrHideSidebar();">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="margin-left:3.5px;display: inline-flex;">
      <a href="./index.html"><img src=".././images/Logo.png" href="./index.html" class="mx-auto d-block" style="width:55px;height:55px"></a>
      <a class="navbar-brand " href="./index.html" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music Therapy</a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <img class="img-fluid img" src=".././images/p.svg" alt="Account Image"  style="width: 37px;height:30px">
    </button>

    <div class="collapse navbar-collapse right-items" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto justify-right">
        <li class="nav-item active">
          <a class="nav-link font-nav-custom-color" style="text-align: right; margin-right: 7px;" href="./Login.html">Username </a>
          <span class="sr-only">(current)</span>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-nav-custom-color" style="text-align: right;margin-right: 7px; " href="./Login.html">Logout</a>
          <span class="sr-only">(current)</span>
        </li>

      </ul>
    </div>
  </nav>
  <!-- The sidebar -->
  <div class="sidebar bg-dark" id="sidebar" style="padding-top: 35px;">
    <a href="./index.html"><i class="fas fa-home"></i> Home</a>
    <a href="./search.html"><i class="fas fa-search"></i> Search</a>
    <a href="./Your-Library.html"><i class="fas fa-list-music"></i> Your Library</a>
    <a class="division">-------------------------</a>
    <a><i class="fas fa-file-plus"></i>Create Playlist</a>
  </div>
  <!-- TODO -->
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">

      <div class="form-group">
        <label class="text-center " style="display: block;color: #ffaa00;font-size: 24px; ">Upload your song</label>
        <div class="custom-file">
          <input type="file" accept=".m4a,.flac,.mp3" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>

      </div>
    </div>
  </div>

  <!-- TODO Edit Navbar -->
  <nav class=" navbar navbar-expand-md navbar-dark bg-dark fixed-bottom z-index-0 h-80px " id="bottombar ">
    <img src=" " id="Cover ">
    <audio src="http://192.168.1.100:9000/Aitana%20-%20Spoiler/01%20Nada%20Sale%20Mal.m4a " autoplay class="col-md-12 player " controls>
    </audio>
  </nav>
</body>

</html>