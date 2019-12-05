<?php include('regis_process.php');?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Passion Pizza</title>
  <!-- MDB icon
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
    
    <body>

<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand for-logo" style="color:white">Passion Pizza</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">

    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
<!--
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
-->
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="cart.php">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </li>
     
        <?php
          if (isset($_SESSION['customer_id'])): ?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"> <?php echo $_SESSION['name']; ?></i>
        </a>    
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="logout.php" name = 'logout'>Log out</a>
<!--          <a class="dropdown-item" href="#">Sign Up</a>-->
        </div>
          </li>
         <?php else: ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>    
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="" data-toggle="modal" data-target="#modalLRForm">Log in</a>
<!--          <a class="dropdown-item" href="#">Sign Up</a>-->
        </div>
          </li>
           <?php endif; ?>
    
    </ul>
  </div>
</nav>
<!--/.Navbar -->
    
 <div class="jumbotron card card-image" style="background-image: url(img/banner.jpg); background-position: center; background-size: cover;">
  <div class="text-white text-center py-5 px-4">
    <div>
        <h1 class="for-logo" >Passion Pizza</h1>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Tastes more than you imagine</strong></h2>
      <p class="mx-5 mb-5">Order now and receive in 30!
      </p>
      <a class="btn btn-outline-white btn-md" href="#pizza_menu"><i class="fas fa-clone left"></i> View our menu</a>
    </div>
  </div>
</div>

     <?php include('menu.php'); ?>
        
        
        <footer class="text-center">
            copyright &copy; passion pizza 2019
        </footer>
        
 <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
            <form action="regis_process.php" method="post">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate" name="email1">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" name="pwd1" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput11" >Your password</label>
              </div>
              <div class="text-center mt-2">
                <button type = "submit" name = "login_submit" class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
                </form>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#panel8" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
            <form method="post" action="regis_process.php">
            <div class="md-form form-sm mb-5">
                <i class="fas fa-user prefix"></i>
                <input type="text" id="modalLRInput1" name="name" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Name</label>
              </div>
            

              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput2" name ="email" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
              </div>

            <div class="md-form form-sm mb-5">
                <i class="fas fa-phone prefix"></i>
                <input type="text" id="modalLRInput3" name="phone" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Phone Number</label>
              </div>
            
            <div class="md-form form-sm mb-5">
                <i class="fas fa-address-card prefix"></i>
                <input type="text" id="modalLRInput4" name="address" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Address</label>
              </div>
            <div class="md-form form-sm mb-5">
                <i class="fas fa-city prefix"></i>
                <input type="text" id="modalLRInput12" name="city" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">City</label>
              </div>
            <div class="md-form form-sm mb-5">
                <i class="fas fa-city prefix"></i>
                <input type="text" id="modalLRInput12" name="state" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">State</label>
              </div>
               <div class="md-form form-sm mb-5">
                <i class="fas fa-map-pin prefix"></i>
                <input type="text" id="modalLRInput12" name="zip" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Zipcode</label>
              </div>
                
              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" name="pwd" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput14" name="rpwd" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button name= "regis_submit" type="regis_submit" class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>
                </form>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
        
        
        
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
