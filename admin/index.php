  <?php
  require_once('../config/koneksi_db.php') ;
  require_once('../config/config.php') ;
  ?>
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- <link rel="stylesheet" href="../asset/demon.css"> -->
      <link rel="stylesheet" href="../asset/sexy.css">
      <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
      <style>
        body{
              background-image: url("../img/beach.jpg");
              background-size: cover;
              background-repeat: no-repeat;
              background-position: center;
              background-attachment: fixed;
              height: 100%;
          }
      </style>
  </head>
  <body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="../img/mntp1.png"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form  action="ceklogin.php" method="POST">
            <div class="d-flex flex-row align-items-center justify-content-lg-center">
              <h1 class="mb-0 me-3 text-uppercase" style="font-family: 'Koulen', cursive;">&nbsp; &nbsp;Welcome Member !!!</h1>
            </div>
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Login First</p>
            </div>

            <!-- User input -->
            <div class="form-outline mb-4">
              <input type="text" name="username" id="username" class="form-control form-control-lg"
                placeholder="Enter a valid username" />
              <label class="form-label" for="username">Username</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" name="password" id="password" class="form-control form-control-lg"
                placeholder="Enter password" />
              <label class="form-label" for="password">Password</label>
            </div>
            <div class="d-flex row justify-content-between align-items-">

              <!-- Login -->
                  <div class="col-4">
                    <button 
                      type="submit" name="btnlogin" value="login" class="btn btn-primary btn-lg"style="padding-left: 2.5rem; padding-right: 2.5rem;">Login
                    </button>
                  </div>
                  <div class="col-4"></div>
                  <div class="col-4"></div>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <p class="small fw-bold mt-1 pt-1 mb-0">Don't have an account?
                  <a href="home.php?modul=mod_userlogin&act=add"class="link-danger">Register</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- modal untuk tampilkan loading -->
  <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/javascript/main.js" type="text/javascript"></script>
  </body>
