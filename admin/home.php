    <?php
    require_once('../config/koneksi_db.php') ;
    require_once('../config/config.php') ;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Home</title>
        <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/bootstrap/sidemenu.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:white ;"> <b>  Selamat Datang Admin...</b></a>
          <ul class="navbar-nav ms-auto mb-2 mb">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../admin/index.php" style="color: white;">  <b> | Sign Out</b></a>
            </li>
          </ul>
      </div>
    </nav>
      <div class="row pt-5">
          <div class="col-md-2 pt-2"> 
            <div> 
                <?php
              include_once('menu.php') ;
              ?>
            </div>
          </div>  
          <div class="col-md-10 pt-4"> 
              <?php
              if(isset($_GET['modul'])){
                  include "".$_GET['modul']."/index.php";
              }
              ?>
          </div>
          <div class="col-md-1"> 
      </div>
    </body>
    <footer class="footer bg-primary" style="position:fixed; bottom:0 ; " >
        <div class="d-flex justify-content-center">
          <b><h6 style="color:white;"> <i class="bi bi-code"> </i> Design by Arudi and Mad <i class="bi bi-code"> </i></h6></b> 
        </div>
    </footer>
    </html>