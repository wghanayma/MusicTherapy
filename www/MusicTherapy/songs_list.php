<!DOCTYPE html>
<html lang="en">

<head>


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
        <title>Music Therapy - Home of Music</title>
        <!-- <script src="./script/id3-minimized.js"></script> -->
        <!-- <link rel="import" href="http://192.168.1.100:9000/"> -->
        <link rel="stylesheet" href="./icons/css/all.css">
        <link rel="shortcut icon" href="./images/Logo.png">
        <link rel="stylesheet" href="./styles/SongsList.css">
        <link rel="stylesheet" href="./styles/hover.css" />


    </head>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" id="topbar">
        <button class="navbar-toggler" type="button" onclick="showOrHideSidebar();">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div style="margin-left:3.5px;display: inline-flex;">
            <a href="./index.html"><img src="./images/Logo.png" href="./index.html" class="mx-auto d-block" style="width:55px;height:55px"></a>
            <a class="navbar-brand " href="./index.html" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music Therapy</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img class="img-fluid img" src="./images/p.svg" alt="Account Image"  style="width: 37px;height:30px">
    </button>

        <div class="collapse  navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto justify-right">


                <li class="nav-item active">
                    <a class="nav-link font-nav-custom-color hora" style="text-align: center;margin-right: 7px; " href="./Login.html">username</a>
                    <span class="sr-only">(current)</span>
                </li>

                <li class="nav-item active">
                    <a class="nav-link font-nav-custom-color hora" style="text-align: center;margin-right: 7px; " href="./Login.html">Logout</a>
                    <span class="sr-only">(current)</span>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    Playlist Name
                    <form class="form-group">
                        <div class="form-control-lg"> </div>
                        <input class="form-control" placeholder="New PlayList">
                    </form>
                </div>
                <div class="modal-footer">
                    <button style="border-radius: 45%;" type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                    <button style="border-radius: 45%;" type="button" class="btn btn-primary">CREATE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- The sidebar -->
    <div class="sidebar bg-dark" id="sidebar" style="padding-top: 35px;">
        <a style="font-size: 20px;" href="./index.html"><i class="fas fa-home" ></i > Home</a>
        <a style="font-size: 20px;" href="./search.html"><i class="fas fa-search" ></i > Search</a>
        <a style="font-size: 20px;" href="./Your-Library.html"><i class="fas fa-list-music" ></i > Your Library</a>
        <a style="font-size: 20px;" class="division">-----------------------</a>
        <a style="font-size: 20px;" href="#" class="cpl" data-toggle="modal" data-target="#exampleModal"><i  style="margin-left: -9px;"  class=" fas fa-file-plus" ></i >Create PlayList</a>
    </div>

    <div class="row">

        <div col-lg-1>

        </div>

        <ul class=" ula nav navbar-horizontal active row col-lg-11">

            <li class=" lim nav-link active col-lg-1.5">
                <a href="#">
                    <h2> PlayList</h2>
                </a>
            </li>

            <li class="lim nav-link  active col-lg-1.5">
                <a href="#">
                    <h2> Genre</h2>
                </a>
            </li>
            <li class="lim nav-link active col-lg-1.5">
                <a href="#">
                    <h2> Artists</h2>
                </a>
            </li>
            <li class="lim nav-link active col-lg-1.5">
                <a href="#">
                    <h2> Albums</h2>
                </a>
            </li>





        </ul>


    </div>


    <div class=" row horizontal ">

        <div class="col-lg-4">

        </div>

        <div class="col-lg-4 ">
            <div class="yourlist">

                <p style="color: white; font-size:35px; padding-top: 6px;">

                    Your List
                </p>

            </div>
        </div>


        <div class="col-lg-4">

        </div>


    </div>



    <div class="music row">


        <div class="row">

            <div class="col-lg-3">

                <div class="a ih-item square colored effect6 mrgn-top ">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m.jpeg" name="quran 1" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>


            </div>


            <div class="col-lg-3">
                <div class="b ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m1.jpeg" name="quran 2" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m2.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m3.webp" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>

        </div>
        <div class="row">

            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top ">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m1.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m2.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top ">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m3.webp" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>

        </div>
        <div class="row">

            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m1.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m2.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m3.webp" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>

        </div>
        <div class="row">

            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m1.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m2.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m3.webp" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m1.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m2.jpeg" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>

                            </p>
                        </div>
                    </a>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="ih-item square colored effect6 mrgn-top">
                    <a href="#">
                        <div class="img img-fluid"><img src="./images/m3.webp" alt="img"></div>
                        <div class="info">
                            <h2 style="color:rgb(210,0,0);">Song Name</h2>
                            <p>
                                <h4 class="h4c">
                                    Artist : Amr Diab
                                </h4>

                                <h4 class="h4c">
                                    Genre : Romantic

                                </h4>

                                <h4 class="h4c">

                                    Album : Love

                                </h4>


                            </p>
                        </div>
                    </a>

                </div>

            </div>



        </div>


    </div>
    <nav class=" navbar shadow navbar-expand-lg navbar-dark bg-dark fixed-bottom" style=" height: 80px; width:100%; margin-left:0px">

        <div class="row" style="width:100%; ">

            <div class="col-lg-2">
                <h4 class="sna" style="color: white; text-align: center; margin: 0px;">

                </h4>
            </div>

            <audio src="" autoplay loop class="player col-lg-8 " controls>

        </audio>


            <div class="col-lg-2">


            </div>


        </div>

    </nav>



    <script src="../script/SongsList.js">
    </script>

</body>

</html>