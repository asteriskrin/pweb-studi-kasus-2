<!DOCTYPE html>
<html>
  <head>
    <title>Vidios</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- HTML5 Navigation Links -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Vidios</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md">
          <!-- HTML5 Video Tag -->
          <video class="mt-4" width="100%" controls>
            <source src="asset/file_example_MP4_480_1_5MG.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <span class="hashtag">#earth</span>
          <span class="hashtag">#earth</span>
          <div class="d-flex flex-row">
            <div class="flex-grow-1">
              <h1>Rotating Earth Video</h1>
              <p>160,293 views - July 23, 1996</p>
            </div>
            <div class="align-self-center">
              <a href="#" class="btn btn-success">LIKE (0)</a>
              <a href="#" class="btn btn-danger">DISLIKE (90)</a>
            </div>
          </div>
          <hr>
          <div class="d-flex flex-row">
            <img src="asset/profile0.png" width="50" height="50" class="rounded-circle">
            <div class="flex-grow-1 ml-4">
              <span class="font-weight-bold">Mang Wazowski</span>
                <p>This is earth rotating video! Enjoy!</p>
                <p>Thanks for watching!</p>
                <span>Written on 24 July, 1996 on 07:00 AM</span>
            </div>
            <div>
              <button class="btn btn-danger">Subscribe</button>
            </div>
          </div>
          <hr>
          <h2 class="mb-4">6 Comments</h2>
          <div class="d-flex flex-col align-items-center mt-2">
            <img src="asset/profile0.png" width="50" class="rounded-circle">
            <div class="d-flex flex-column flex-grow-1 ml-4 p-2 border rounded">
              <span class="font-weight-bold">Mang Wazowski</span>
              <p>GGWP!</p>
              <span>Written on 24 July, 1996 on 07:00 AM</span>
            </div>
          </div>
          <div class="d-flex flex-col align-items-center mt-2">
            <img src="asset/profile0.png" width="50" class="rounded-circle">
            <div class="d-flex flex-column flex-grow-1 ml-4 p-2 border rounded">
              <span class="font-weight-bold">Mang Wazowski</span>
              <p>It's awesome!</p>
              <span>Written on 24 July, 1996 on 07:02 AM</span>
            </div>
          </div>
          <div class="d-flex flex-col align-items-center mt-2">
            <img src="asset/profile0.png" width="50" class="rounded-circle">
            <div class="d-flex flex-column flex-grow-1 ml-4 p-2 border rounded">
              <span class="font-weight-bold">Mang Wazowski</span>
              <p>No wonder why I feel like studying HTML at 3 P.M everyday</p>
              <span>Written on 24 July, 1996 on 07:03 AM</span>
            </div>
          </div>
          <div class="d-flex flex-col align-items-center mt-2">
            <img src="asset/profile0.png" width="50" class="rounded-circle">
            <div class="d-flex flex-column flex-grow-1 ml-4 p-2 border rounded">
              <span class="font-weight-bold">Mang Wazowski</span>
              <p>Rollin rollin</p>
              <span>Written on 24 July, 1996 on 07:04 AM</span>
            </div>
          </div>
          <form action="" method="POST" class="mt-4">
            <div class="d-flex flex-col align-items-center mt-2">
              <img src="asset/profile0.png" width="50" class="rounded-circle">
              <textarea class="form-control ml-4" placeholder="Write your comments..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary float-right mt-2">Comment</button>
          </form>
        </div>
        <div class="col-12 col-md-3">
          <h2>Recommendation</h2>
          <?php for ($i = 0; $i < 5; $i++) { ?>
          <a href="#" class="d-flex flex-row border align-items-center p-2">
            <img src="asset/thumb0.png" class="mw-30">
            <div class="d-flex flex-column flex-grow-1 p-1">
              <span class="text-">How high quality food...</span>
              <span class="text-secondary">Indonesian Food</span>
              <span class="text-secondary">17K views - 2 weeks ago</span>
            </div>
          </a>
          <?php } ?>
          <a href="#" class="btn btn-secondary btn-block mt-4">Load more video</a>
        </div>
      </div>
    </div>
    <!-- HTML5 Footer Tag -->
    <footer class="bg-dark text-light p-2 mt-4">
      <div class="container-fluid">
        <p class="m-0">&copy; Kelompok 1 Pemrograman Web F 2021<br>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
