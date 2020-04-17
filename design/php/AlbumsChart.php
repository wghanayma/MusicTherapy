<!DOCTYPE html>
<html lang="en">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css" />
    <title>Music Therapy - Home of Music</title>
    <!-- <script src="./script/id3-minimized.js"></script> -->
    <!-- <link rel="import" href="http://192.168.1.100:9000/"> -->
    <link rel="stylesheet" href="../icons/css/all.css" />
    <link rel="shortcut icon" href="../images/Logo.png" />
    <link rel="stylesheet" href="./styles/Lists.css" />
</head>

<body>
<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" id="topbar ">
    <button class="navbar-toggler" type="button " onclick="showOrHideSidebar(); ">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div style="margin-left: 3.5px; display: inline-flex;">
        <a href="../index.html "><img src="../images/Logo.png " href="../index.html " class="mx-auto d-block" style="width: 55px; height: 55px;" /></a>
        <a class="navbar-brand" href="../index.html " id="Logo " style="margin-left: 8px; margin-top: 6px;">
            Music Therapy</a>
    </div>

    <button class="navbar-toggler" type="button " data-toggle="collapse " data-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
        <img class="img-fluid img" src="../images/p.svg " alt="Account Image " style="width: 37px; height: 30px;" />
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent ">
        <ul class="navbar-nav mr-auto justify-right">
            <li class="nav-item active">
                <a class="nav-link font-nav-custom-color hora" style="text-align: center; margin-right: 7px;" href="./Login.html ">username</a>
                <span class="sr-only">(current)</span>
            </li>

            <li class="nav-item active">
                <a class="nav-link font-nav-custom-color hora" style="text-align: center; margin-right: 7px;" href="./Login.html ">Logout</a>
                <span class="sr-only">(current)</span>
            </li>
        </ul>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div style="margin-top: 200px;" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Create new playlist
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Playlist Name
                <form class="form-group">
                    <div class="form-control-lg"></div>
                    <input class="form-control" placeholder="New PlayList" />
                </form>
            </div>
            <div class="modal-footer">
                <button style="border-radius: 45%;" type="button" class="btn btn-secondary" data-dismiss="modal">
                    CANCEL
                </button>
                <button style="border-radius: 45%;" type="button" class="btn btn-primary">
                    CREATE
                </button>
            </div>
        </div>
    </div>
</div>

<!-- The sidebar -->
<div class="sidebar bg-dark" id="sidebar " style="padding-top: 35px;">
    <a style="font-size: 20px;" href="../index.html "><i class="fas fa-home"></i> Home</a>
    <a style="font-size: 20px;" href="../waseem/search.html"><i class="fas fa-search"></i> Search</a>
    <a style="font-size: 20px;" href="./initialPLayLIst.html "><i class="fas fa-list-music"></i> Your Library</a>
    <a style="font-size: 20px;" class="division">-----------------------</a>
    <a style="font-size: 20px;" href="#" class="cpl" data-toggle="modal" data-target="#exampleModal"><i style="margin-left: -9px;" class="fas fa-file-plus"></i>Create
        PlayList</a>
</div>

<div class="row" style="margin-top: 170px; width: 100%;">
    <div class="col-lg-4">
    </div>

    <div class="col-lg-4">
        <form method="post" action="AlbumsChart.php">
            <label for="ArtistName" style="color: #ffaa00; font-size: 22px; margin-right: 5px">Artist Name</label>
            <input id="ArtistName" name="get_Artist_Name" type="search"  placeholder="EX:Amr Diab">
            <button style="margin-left: 5px">Get Albums Chart</button>
        </form>
    </div>

    <div class="col-lg-4">
    </div>
</div>

<!--

 -->
<!--

  -->
<?php
$An=$_POST['get_Artist_Name'];
?>
<div class="chart-container" style="position: relative; left: 170px; height: 40vh; width: 70vw; margin-top:100px;">
    <canvas id="myChart" width="400" height="150"></canvas>
</div>

<script>
    let ctx = document.getElementById("myChart").getContext("2d");

    let myChart = new Chart(ctx, {
        type: "doughnut",
        data: {

            <?php
            $a = [
                $An, "Album2", "Album3", "Album4", "Album5", "Album6", "Album7", "Album8", "Album9", "Album10", "Album11", "Album12", "Album13", "Album14", "Album15", "Album16", "Album17", "Album18", "Album19", "Album20", "Album21", "Album22", "Album23",
            ];
            $b = [50, 10, 30, 20, 70, 100, 30, 10, 40, 50, 25, 7, 16, 20, 50, 100, 40, 32, 44, 88, 11, 22, 34];
            ?>
            <?php



            echo "labels:[";
            for ($i = 0; $i < 23; $i++)
                echo "'" . $a[$i] . "',";
            echo " ],";
            ?>

            datasets: [{
                label: "# of Votes",
                <?php

                echo "data:[";
                for ($i = 0; $i < 23; $i++)
                    echo "'" . $b[$i] ."',";
                echo " ],";
                echo " backgroundColor: [";
                for ($i = 0; $i < 23; $i++)

                    echo "'rgba(" . random_int(0, 225) . "," . random_int(0, 225) . "," . random_int(0, 225) . ",1)',";
                echo "],";
                ?>
            }, ],
        },
        options: {
            legend: {
                display: true,

            },
            title: {
                display: true,
                text: "Albums Chart",
                fontSize: 45,
                fontColor: "#ffaa00",
                position: "top",
            },
            tooltips: {
                // Disable the on-canvas tooltip
                enabled: true,
                bodyFontSize: 20,
            },
        },
    });
</script>
</body>

</html>