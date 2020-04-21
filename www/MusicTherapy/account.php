<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./icons/css/all.css">
  <!-- BootStrap CDN for CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <!-- BootStrap CDN for JQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <!-- BootStrap CDN for popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- BootStrap CDN for JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
  <script src="jquery.HorizontalBlocks.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Account </title>
  <link rel="shortcut icon" href="./images/Logo.png">
  <link rel="stylesheet" href="./icons/css/all.css">
  <link rel="stylesheet" href="./styles/account.css" />

</head>

<body>

  <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" id="topbar">
    <button class="navbar-toggler" type="button" onclick="showOrHideSidebar();">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div style="margin-left:3.5px;display: inline-flex;">
      <a href="./index.html"><img src="./images/Logo.png" href="./index.html" class="mx-auto d-block" style="width:55px;height:55px"></a>
      <a class="navbar-brand " href="./index.html" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music
                Therapy</a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img class="img-fluid img" src="./images/p.svg" alt="Account Image" style="width: 37px;height:30px">
        </button>

    <div class="collapse  navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto justify-right">
        <li class="nav-item active">
          <label class="nav-link font-nav-custom-color" style="text-align: right; margin-right: 7px;" href="./Login.html">username </label>
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
  <div class="sidebar shadow">
    <a class="navbar-brand" href="./index.html" id="Logo">Music Therapy</a>
    <a href="./index.html"><i class="fas fa-home"></i> Home</a>
    <a href="./search.html"><i class="fas fa-search"></i> Search</a>
    <a href="./Albums.html"><i class="fas fa-album-collection"></i> Albums</a>
    <a href="./Your-Library.html"><i class="fas fa-list-music"></i> Your Library</a>
  </div>

  <nav class=" navbar shadow navbar-expand-md navbar-dark bg-dark fixed-bottom" style="height: 80px;"></nav>
  <div class="container-fluid">
    <div class="row">
      <div class="sidebar shadow ">
        <a class="navbar-brand" href="./index.html" id="Logo">Music Therapy</a>
        <a href="./index.html"><i class="fas fa-home"></i> Home</a>
        <a href="./search.html"><i class="fas fa-search"></i> Search</a>
        <a href="./Albums.html"><i class="fas fa-album-collection"></i> Albums</a>
        <a href="./Your-Library.html"><i class="fas fa-list-music"></i> Your Library</a>
      </div>

    </div>
    <div class="jumbotron   ">
      <div class="container">


      </div>
      <div class="row row-centered">

        <h2>Recommended </h2>
      </div>
      <div id=" demo " class="carousel slide " data-interval="false " data-ride="carousel ">
        <!-- The slideshow -->
        <div class="container carousel-inner no-padding ">
          <div class="carousel-item active ">

            <div class="col-xs-3 col-sm-3 col-md-3 ">

              <div class="ih-item square colored effect6 mrgn-top ">


                <a href="# ">
                  <div class="img   ">


                    <img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
              <button id="add_button" type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg">

                  <img id="add_button_img" src="icons/icons8-add-48.png" /></button>
              </button>


            </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="container">
                    <h2>Playlist</h2>
                    <div class="list-group">
                      <a href="#" class="list-group-item active">Night Music </a>
                      <a href="#" class="list-group-item">Night Music</a>
                      <a href="#" class="list-group-item">Night Music</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
              <button id="add_button" type="button" class="btn">

                <img id="add_button_img" src="icons/icons8-add-48.png" /></button>
              </button>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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


          </div>
          <div class="carousel-item ">
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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

          </div>
          <div class="carousel-item ">
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
                  <div class="info ">
                    <h6 style="color:rgb(210,0,0); ">Song Name</h2>
                      <p>
                        <h3>
                          Artist : Amr Diab
                        </h3>
                        <h3>
                          Genre : Romantic
                        </h3>
                        <h3>
                          Album : Love
                        </h3>

                      </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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


          </div>
        </div>
        <div class="container ">
          <a class="carousel-control-prev " href="#demo" role="button " data-slide="prev "> <span class="carousel-control-prev-icon " aria-hidden="true "></span> </a>
          <a class="carousel-control-next " href="#demo" role="button " data-slide="next "> <span class="carousel-control-next-icon " aria-hidden="true "></span> </a>
        </div>

      </div>
      <hr style="margin:15px">



      <div class="row row-centered">
        <h2>Your List <span class="fa fa-star checked "></span>
        </h2>
      </div>
      <div id=" demo " class="carousel slide " data-interval="false " data-ride="carousel ">
        <!-- The slideshow -->
        <div class="container carousel-inner no-padding ">
          <div class="carousel-item active ">

            <div class="col-xs-3 col-sm-3 col-md-3 ">

              <div class="ih-item square colored effect6 mrgn-top ">


                <a href="# ">
                  <div class="img   ">


                    <img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
              <button id="add_button" type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg">

                  <img id="add_button_img" src="icons/icons8-add-48.png" /></button>
              </button>


            </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="container">
                    <h2>Playlist</h2>
                    <div class="list-group">
                      <a href="#" class="list-group-item active">Night Music </a>
                      <a href="#" class="list-group-item">Night Music</a>
                      <a href="#" class="list-group-item">Night Music</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
              <button id="add_button" type="button" class="btn">

                <img id="add_button_img" src="icons/icons8-add-48.png" /></button>
              </button>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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


          </div>
          <div class="carousel-item ">
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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

          </div>
          <div class="carousel-item ">
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
                  <div class="info ">
                    <h6 style="color:rgb(210,0,0); ">Song Name</h2>
                      <p>
                        <h3>
                          Artist : Amr Diab
                        </h3>
                        <h3>
                          Genre : Romantic
                        </h3>
                        <h3>
                          Album : Love
                        </h3>

                      </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 ">
              <div class="ih-item square colored effect6 mrgn-top ">
                <a href="# ">
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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
                  <div class="img img-fluid "><img src="https://image.shutterstock.com/z/stock-photo-sleeping-disorders-as-a-reason-for-insomnia-293777093.jpg " name="quran 1 " alt="img "></div>
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


          </div>
        </div>
        <div class="container ">
          <a class="carousel-control-prev " href="#demo" role="button " data-slide="prev "> <span class="carousel-control-prev-icon " aria-hidden="true "></span> </a>
          <a class="carousel-control-next " href="#demo" role="button " data-slide="next "> <span class="carousel-control-next-icon " aria-hidden="true "></span> </a>
        </div>

      </div>
    </div>

  </div>
  <nav class=" navbar shadow navbar-expand-lg navbar-dark bg-dark fixed-bottom" style=" height: 80px; width:100%; margin-left:0px">
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