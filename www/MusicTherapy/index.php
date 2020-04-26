<?php
session_save_path("/tmp");
session_start();
if (empty($_SESSION['usernamelogin'])) {
  header("Location: ./login.php");

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
  <title>Music Therapy - Home of Music</title>
  <!-- <script src="./script/id3-minimized.js"></script> -->
  <!-- <link rel="import" href="http://192.168.1.100:9000/"> -->
  <link rel="shortcut icon" href="./images/Logo.png">
  <link rel="stylesheet" href="./icons/css/all.css">
  <link rel="stylesheet" href="./styles/index.css" />
  <script src="./script/index.js"></script>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" id="topbar">
        <button class="navbar-toggler" type="button" onclick="showOrHideSidebar();">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div style="margin-left:3.5px;display: inline-flex;">
            <a href="./index.php"><img src="./images/Logo.png" href="./index.php" class="mx-auto d-block" style="width:55px;height:55px"></a>
            <a class="navbar-brand " href="./index.php" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music Therapy</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img class="img-fluid img" src="./images/p.svg" alt="Account Image"  style="width: 37px;height:30px">
    </button>

        <div class="collapse  navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto justify-right">


                <li class="nav-item active">
                    <a class="nav-link font-nav-custom-color hora" style="text-align: center;margin-right: 7px; " href="./information_overview.php"><?php echo $_SESSION['usernamelogin'];?></a>
                    <span class="sr-only">(current)</span>
                </li>

                <li class="nav-item active">
                    <a class="nav-link font-nav-custom-color hora" style="text-align: center;margin-right: 7px; " href="./logout.php">Logout</a>
                    <span class="sr-only">(current)</span>
                </li>

            </ul>
        </div>
    </nav>

 <!-- Modal -->
<form action="playlists.php" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div style=" margin-top:200px;" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new playlist
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

              <form class="form-group" >
                    <label> Playlist Name</label>
                    <input name = "name_playlist"class="form-control" placeholder="New PlayList" required>
                    <label>Type</label>
                    <select name = "type_playlist" class="form-control">
                        <option  value= 1 > Public</option>
                        <option  value= 0 > Private</option>

                    </select>
                </form>
            </div>
            <div class="modal-footer">
                <button style="border-radius: 45%;" type="button" class="btn btn-secondary"
                        data-dismiss="modal">CANCEL</button>
                <button name="create"style="border-radius: 45%;" type="submit" class="btn btn-primary">CREATE</button>
  </form>
               <?php


      if(isset($_POST['create'])){


$stmtID=md5(mt_rand());
$namePlaylist= $_POST['name_playlist'];
$typePlaylist=intval($_POST['type_playlist']);
$sql = "INSERT INTO Playlists VALUES (?,?,?,?,?,?,?,?);";
$stmt = $pdo->prepare($sql);
$stmt->execute([ $stmtID,$_SESSION['userIDlogin'], $namePlaylist, date("Y/m/d"),$typePlaylist,NULL,date("Y/m/d"),NULL]);
                }
        ?>
            </div>
        </div>
    </div>
</div>
  <!-- The sidebar -->
  <div class="sidebar bg-dark" id="sidebar" style="padding-top: 35px;">
    <a href="./index.php"><i class="fas fa-home"></i> Home</a>
    <a href="./search.php"><i class="fas fa-search"></i> Search</a>
    <a href="./playlists.php"><i class="fas fa-list-music"></i> Your Library</a>
    <a class="division">-------------------------</a>
    <a style="font-size: 20px;" href="#" class="cpl" data-toggle="modal" data-target="#exampleModal"><i style="margin-left: -9px;" class=" fas fa-file-plus"></i>Create PlayList</a>

  </div>
  <!-- TODO -->

  <!-- TODO Edit Navbar -->
  <nav class=" navbar navbar-expand-md navbar-dark bg-dark fixed-bottom z-index-0 h-80px" id="bottombar">
    <img src="" id="Cover">
    <audio src="http://192.168.1.100:9000/Aitana%20-%20Spoiler/01%20Nada%20Sale%20Mal.m4a" autoplay class="col-md-12 player " controls>
    </audio>
  </nav>

  <?php
  echo '<h5 class="text text-success" style=" padding-top:105px; text-align: center;margin-top:50px; font-size: 30px">' . $_SESSION['usernamelogin'] . ' </h5>'; ?>

</body>

</html>