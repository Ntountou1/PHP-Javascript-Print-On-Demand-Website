<?php session_start();?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles_contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <li class="nav-item active"><a class="nav-link" href="./index.php"> Home </a></li>
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




    <div class="wrapper">
        <div class="overlay">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-9">
                    <div class="contact-us text-center">
                        <h3>Contact Us</h3>
                        <p class="mb-5">Επικοινωνήστε άμεσα μαζί μας! Είμαστε εδώ για να σας βοηθήσουμε!</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-5 text-center px-3 contact-info">
                                    <div class="d-flex flex-row align-items-center"> <span class="icons"><i class="fa fa-map-marker"></i></span>
                                        <div class="address text-left"> <span>Διεύθυνση</span>
                                            <p>Καραολή και Δημητρίου 80, Πειραιάς 185 34</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"></i></span>
                                        <div class="address text-left"> <span>Τηλέφωνο</span>
                                            <a class="phone_number" href="tel:+30 123 456 7890">+30 123 456 7890</a></p>	
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-envelope-o"></i></span>
                                        <div class="address text-left"> <span>Email</span>
                                            <a class="email" href="mailto:contact@bbbootstrap.com">contact@bbbootstrap.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center px-1">
                                    <div class="forms p-4 py-5 bg-white">
                                        <h5>Send Message</h5>
                                        <div class="mt-4 inputs"> <input type="text" class="form-control" placeholder="Name"> <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Type your message"></textarea> </div>
                                        <div class="button mt-4 text-left"> <button class="btn btn-dark">Send</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>