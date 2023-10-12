<?php session_start();?>

<!doctype html>
<html lang="en">
  <head>
    <title>Printor</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .session_username{
        color:red;
      }
    </style>


  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




   



        <!-- Navigation -->
        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="../photos/homepage/logo.png"></a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                 <span class="navbar-toggler-icon"></span>
               </button>
             <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto"><!--ml-auto gia na einai ta styoixeia stin deksia meria-->
                <li class="nav-item active"><a class="nav-link" href="#"> Home </a></li>
                <li class="nav-item"><a class="nav-link" href="./products.php"> Products </a></li>
                <li class="nav-item"><a class="nav-link" href="./contact.php"> Contact us </a></li>
                <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                
               <?php 
                if (isset($_SESSION["username"]) && isset($_SESSION["password"])){ ?>
                  <li class="nav-item user-nav-item"><a class="nav-link" href="user.php"> User Profile </a></li>
                  <p class="session_welcome">Welcome <div class="session_username_welcome"><?php echo $_SESSION["username"]?></div></p>
                  <div class="login_button">
                  <i class="fa fa-sign-in" aria-hidden="true"></i>
                  <a href="../php/logout.php" class="btn btn-light" role="button" aria-pressed="true">Αποσύνδεση</a>
                  </div>
               <?php }
                else{ ?>
                  <div class="login_button">
                  <i class="fa fa-sign-in" aria-hidden="true"></i>
                  <a href="./login.php" class="btn btn-light" role="button" aria-pressed="true">Σύνδεση</a>
                  </div>
              <?php  }
               ?>
               
             </ul>
             </div> 
            </div> 
           </nav>

                
           <!--Welcome-->
           <div class="welcome container-fluid padding">
            <div class="row text-center ">
              <div class="col-12">
                <img src="../photos/homepage/logo_large_transparent.png"alt="">
                <h1>Οικολογική εκτύπωση, πώς ζούσατε χωρίς αυτή;<h1>
              </div>
              <div class="col-12">
                
                <h3>Καλώς ήρθατε στην ιστοσελίδα μας!</h3>
              </div>
            </div>
          </div>


            <!--About us-->

            

          <!--search bar-->
          

        <div class="row height d-flex justify-content-center align-items-center">
          <div class="col-md-8">
              <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Τι ψάχνετε;"> <button class="btn btn-primary">Search</button> </div>
          </div>
      </div>



<div class="container-fluid padding">
  <div class=" row padding">
     <div class="col-lg-6">
         <h2>About us</h2>
         <h4 class="about_us_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis quae labore, cum quas voluptatem aspernatur quisquam officiis consectetur perspiciatis temporibus dolor culpa similique doloribus voluptatum quis porro ipsa repudiandae? Ab?</h4>
         <br>
     </div>
     <div class="col-lg-6">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/GlnFylwdYH4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
  </div>
  </div>


<!--Intro welcome-->





<div class="container-fluid">
  <div class="row  text-center">
    <div class="col-12">
      <h1 class="display-4">What we offer</h1>
      <hr class="style1">
    </div>
  </div>

  
</div>

<div class="container-fluid">
  <div class="row padding">
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="../photos/homepage/stock1.jpg" alt="">
        <div class="card-body text-center">
          <h3>Φούτερ 29.99€</h3>
          <a href="./products.php" class="btn btn-success" role="button" aria-pressed="true">Αποκτείστε το!</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top"src="../photos/homepage/stock2.jpg" alt="">
        <div class="card-body text-center">
          <h3>Επαγγελματικές κάρτες 0.99€</h3>
          <a href="./products.php" class="btn btn-success" role="button" aria-pressed="true">Αποκτείστε το!</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="../photos/homepage/stock3.jpg" alt="">
        <div class="card-body text-center">
          <h3>Κούπες 1.99€</h3>
          <a href="./products.php" class="btn btn-success" role="button" aria-pressed="true">Αποκτείστε το!</a>
        </div>
      </div>
    </div>
  </div>
</div>



<!--live chat-->
<input type="checkbox" id="check"> <label class="chat-btn" for="check"> <i class="fa fa-commenting-o comment"></i> <i class="fa fa-close close"></i> </label>
<div class="wrapper">
    <div class="header">
        <h6>Let's Chat - Online</h6>
    </div>
    <div class="text-center p-2"> <span>Please fill out the form to start chat!</span> </div>
    <div class="chat-form"> <input type="text" class="form-control" placeholder="Name"> <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Your Text Message"></textarea> <button class="btn btn-success btn-block">Submit</button> </div>
</div>



<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="https://www.unipi.gr/unipi/el/"> PRINTOR</a>
  </div>
  <!-- Copyright -->

</footer>

  </body>
</html>