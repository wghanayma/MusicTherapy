<?php
session_save_path("/tmp");
session_start();

if (empty($_SESSION['usernamelogin'])) {
  header("Location: ./login.php");
  exit;
} else {
  $result = $_SESSION['result'];
  if (empty($_SESSION['result'])) {

    print_r($result);
  } else{
    print_r($result);
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./icons/css/all.css">
  <!-- BootStrap CDN for CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <!-- BootStrap CDN for JQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <!-- BootStrap CDN for popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- BootStrap CDN for JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="script/search_result.js">
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
  <script src="jquery.HorizontalBlocks.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search </title>
  <link rel="shortcut icon" href="./images/Logo.png">
  <link rel="stylesheet" href="./icons/css/all.css">
  <link rel="stylesheet" href="./styles/search.css" />
  <link rel="stylesheet" href="./styles/hover.css" />
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



  <div class="modal fade" id="exampleModalLong1" tabindex="1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
            User PlayList
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>
          <p>user</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary"
            style="margin-right: 80px; position: fixed; bottom:3%; right:5%; z-index:1000;">
            Save changes
          </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal"
            style="position: fixed; bottom:3%;right:5%; z-index: 1000;">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModalLong" tabindex="1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
            <p>Global PlayList</p>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>
          <p>Global</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary"
            style="margin-right: 80px; position: fixed; bottom:3%; right:5%; z-index:1000;">
            Save changes
          </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal"
            style="position: fixed; bottom:3%;right:5%; z-index: 1000;">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>


   <!-- Modal -->
<form action="search_result.php" method="POST">
<div class="modal fade" id="exampleModalC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
    <a href="./search.html"><i class="fas fa-search"></i> Search</a>
    <a href="./Your-Library.html"><i class="fas fa-list-music"></i> Your Library</a>
    <a class="division">-------------------------</a>
    <a style="font-size: 20px;" href="#" class="cpl" data-toggle="modal" data-target="#exampleModalC"><i style="margin-left: -9px;" class=" fas fa-file-plus"></i>Create PlayList</a>
  </div>

  <nav class=" navbar shadow navbar-expand-md navbar-dark bg-dark fixed-bottom" style="height: 80px;"></nav>
  <div class="container-fluid">
    <div class="row">

    </div>

      <div class="container">
        <div class="text-center">
          <h1>Search Result </h1>
          <div class="text-center">
            <div class="col-md-3  ">

              <div class="btn-group">
                <button type="button" class="btn add-song    " data-toggle="dropdown">Add Song<span
                    class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Add Music </a></li>
                  <li><a href="#">Add Music</a></li>
                  <li><a href="#">Add Music</a></li>
                  <li><a href="#">Add Music</a></li>
                  <li><a href="#">Add Music</a></li>
                </ul>
              </div>
            </div>


          </div>
        </div>
        <div class="row row-centered">
          <h2>The song</h2>
        </div>
        <div id=" demo " class="carousel slide " data-interval="false" data-ride="carousel">
          <!-- The slideshow -->
          <div class="container carousel-inner no-padding ">

            <div class="carousel-item active ">

              <div class="col-xs-3 col-sm-3 col-md-3 ">

                <div class="ih-item square colored effect6 mrgn-top ">


                  <a href="# ">
                    <div class="img   ">


                      <img
                        src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg "
                        name="quran 1 " alt="img "></div>
                    <div class="info ">
                      <h4 style="color:rgb(210,0,0); ">Song Name</h4>
                      <p>
                      <h5>Artist : Amr Diab</h5>
                        <h5>Genre : Romantic</h5>
                        <h5>Album : Love</h5>
                      </p>

                    </div>



                    </div>

                  </a>

                </div>




             </div>
             <div  id="add_button" class="btn-group flex_nav" type="button">
                  <button data-toggle="dropdown" aria-haspopup="true" aria-expanded="false ">

                    <img id="add_button_img" src="icons/icons8-add-48.png" /></button>
                  </button>
                  <div class="dropdown dropdown-menu">
                    <!-- Button trigger modal -->
                    <button  type="button" class="dropdown-item btn btn-primary" data-toggle="modal"
                      data-target="#exampleModalLong1">user</button>
                    <!-- Modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="dropdown-item btn btn-primary" data-toggle="modal"
                      data-target="#exampleModalLong">global</button>
                    <!-- Modal -->
                  </div>

              </div>


            </div>


            <!-- <div class="carousel-item ">
              <div class="col-xs-3 col-sm-3 col-md-3 ">
                <div class="ih-item square colored effect6 mrgn-top ">
                  <a href="# ">
                    <div class="img img-fluid "><img
                        src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg "
                        name="quran 1 " alt="img "></div>
                    <div class="info ">
                      <h4 style="color:rgb(210,0,0); ">Song Name</h4>
                      <p>
                        <h5>Artist : Amr Diab</h5>
                        <h5>Genre : Romantic</h5>
                        <h5>Album : Love</h5>

                      </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3 ">
                <div class="ih-item square colored effect6 mrgn-top ">
                  <a href="# ">
                    <div class="img img-fluid "><img
                        src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg "
                        name="quran 1 " alt="img "></div>
                    <div class="info ">
                      <h4 style="color:rgb(210,0,0); ">Song Name</h4>
                      <p>
                        <h5>Artist : Amr Diab</h5>
                        <h5>Genre : Romantic</h5>
                        <h5>Album : Love</h5>

                      </p>
                    </div>
                  </a>
                </div>
                <button id="add_button" type="button" class="btn  ">

                  <img id="add_button_img" src="icons/icons8-add-48.png" /></button>
                </button>
              </div>

            </div> -->








          </div>




          <div class="container ">
            <a class="carousel-control-prev " href="#demo" role="button " data-slide="prev "> <span
                class="carousel-control-prev-icon " aria-hidden="true "></span> </a>
            <a class="carousel-control-next " href="#demo" role="button " data-slide="next "> <span
                class="carousel-control-next-icon " aria-hidden="true "></span> </a>
          </div>


        </div>


      </div>






    <nav class=" navbar shadow navbar-expand-lg navbar-dark bg-dark fixed-bottom"
      style=" height: 80px; width:100%; margin-left:0px">
      <div class="row" style="width:100%">
        <div class="col-lg-2">
          <h4 class="sna" style="color: white; text-align: center; margin-top:5px;">
            Nada Sale Male
          </h4>
        </div>
        <audio src="" autoplay loop class="player col-lg-8 " controls>
        </audio>
        <div class="col-lg-2">
        </div>
      </div>
    </nav>
</body>

</html>