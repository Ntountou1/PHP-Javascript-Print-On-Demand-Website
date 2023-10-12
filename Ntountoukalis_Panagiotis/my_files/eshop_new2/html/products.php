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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/styles_products.css">
    <script src="../js/store.js" async></script>
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



     <h1 class="text-center">Upload image</h1>
    <!--make user upload his photo to print-->
    <div class="upload_image mx-auto">
      <input type="file" id="image_input" accept="image/png, image/jpg">
      
      <div id="display_image"></div>

    </div>

    <script>
      const image_input = document.querySelector("#image_input");
      image_input.addEventListener("change", function() {
      const reader = new FileReader();
      reader.addEventListener("load", () => {
      const uploaded_image = reader.result;
      document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
});
   reader.readAsDataURL(this.files[0]);
});
    </script>
    

    



    
     

    <div class="container">
      <div class="row">

        <!--Card 1-->
        <div class="col-md-4">
          <div class="card mt-3">
            <div class="product align-items-center p-2 text-center">
              <img class="item-image" src="../photos/homepage/stock1.jpg" alt="" class="rounded" width="160">
              <h5 class="item-name">T-Shirt</h5>


              <!--card info-->
              <div class="mt-3 info">
                <p class="text1 d-block">Φούτερ από βαμβακερό ύφασμα. Γιακάς με ρυθμιζόμενη κουκούλα και μακρύ μανίκι. Τυπώματα σε αντίθεση μπροστά και στην πλάτη. Τελειώματα σε ριπ.</p>
                <p class="text1"> τουλάχιστον 50% από οργανικό βαμβάκι.</p>
                <div class="cost mt-3 text-dark">
                  <p class="item-price">$29.99</p>
                  <div class="star mt-3 align-items-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>


              <!--button-->
              <div class="p-3 cart text-center text-white mt-3 cursor">
                <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                <button class="btn btn-danger" type="bytton"><i class="fa fa-heart"></i></button>
              </div>

            </div>
          </div>
        </div>



        <!--Card 2-->
        <div class="col-md-4">
          <div class="card mt-3">
            <div class="product align-items-center p-2 text-center">
              <img class="item-image" src="../photos/homepage/stock2.jpg" alt="" class="rounded" width="160">
              <h5 class="item-name">Cards</h5>


              <!--card info-->
              <div class="mt-3 info">
                <p class="text1 d-block">ΕΠΑΓΓΕΛΜΑΤΙΚΕΣ ΚΑΡΤΕΣ ΔΙΠΛΕΣ ΜΕ ΠΙΚΜΑΝΣΗ</p>
                <p class="text1"> Κάρτες διπλές για να χωρέσουν το μήνυμα σας αλλά και για να ξεχωρίσουν από την συνηθισμένη διάσταση. Περιλαμβάνουν πίκμανση για εύκολο δίπλωμα.</p>
                <div class="cost mt-3 text-dark">
                  <p class="item-price">$0.99</p>
                  <div class="star mt-3 align-items-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                  </div>
                </div>
              </div>


              <!--button-->
              <div class="p-3 cart text-center text-white mt-3 cursor">
                <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                <button class="btn btn-danger" type="bytton"><i class="fa fa-heart"></i></button>
              </div>

            </div>
          </div>
        </div>


        <!--Card 3-->
        <div class="col-md-4">
          <div class="card mt-3">
            <div class="product align-items-center p-2 text-center">
              <img class="item-image" src="../photos/homepage/stock3.jpg" alt="" class="rounded" width="160">
              <h5 class="item-name">Cup</h5>


              <!--card info-->
              <div class="mt-3 info">
                <p class="text1 d-block">Κεραμική Κούπα</p>
                <p class="text1"> • Υλικό: Κεραμικό

                • Διαστάσεις: 9,52 εκ. ύψος x 10,16 εκ. διάμετρος

                • Ασφαλές για χρήση σε πλυντήριο πιάτων και φούρνο μικροκυμάτων.

                • Χωρητικότητα: 470ml</p>
                <div class="cost mt-3 text-dark">
                  <p class="item-price">$2.99</p>
                  <div class="star mt-3 align-items-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>


              <!--button-->
              <div class="p-3 cart text-center text-white mt-3 cursor">
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                <button class="btn btn-danger" type="bytton"><i class="fa fa-heart"></i></button>
              </div>

            </div>
          </div>
        </div>

      </div>


    </div>

      <!--cart total money-->
    <section class="container content-section cart-info">
      <h2 class="section-header">CART</h2>
      <div class="cart-row">
          <span class="cart-item cart-header cart-column">ITEM</span>
          <span class="cart-price cart-header cart-column">PRICE</span>
          <span class="cart-quantity cart-header cart-column">QUANTITY</span>
      </div>
      <div class="cart-items">
          <!--<div class="cart-row">
              <div class="cart-item cart-column">
                  <img class="cart-item-image" src="../photos/homepage/stock1.jpg" width="100" height="100">
                  <span class="cart-item-title">T-Shirt</span>
              </div>
              <span class="cart-price cart-column">$29.99</span>
              <div class="cart-quantity cart-column">
                  <input class="cart-quantity-input" type="number" value="1">
                  <button class="btn btn-danger" type="button">REMOVE</button>
              </div>
          </div>
          <div class="cart-row">
              <div class="cart-item cart-column">
                  <img class="cart-item-image" src="../photos/homepage/stock2.jpg" width="100" height="100">
                  <span class="cart-item-title">Cards</span>
              </div>
              <span class="cart-price cart-column">$0.99</span>
              <div class="cart-quantity cart-column">
                  <input class="cart-quantity-input" type="number" value="2">
                  <button class="btn btn-danger" type="button">REMOVE</button>
              </div>
          </div>-->
      </div>
      <div class="cart-total">
          <strong class="cart-total-title">Total</strong>
          <span class="cart-total-price">$0</span>
      </div>

      <button  class="btn btn-primary btn-purchase button_popup"  type="button" data-target="#popup_modal" data-toggle="modal">PURCHASE</button>
      <!--modal-->
      <div class="modal " id="popup_modal">
        <div class="popup-header">
          <h1>Ευχαριστούμε για την προτίμησή σας!</h1>
          <button data-dismiss="modal">&times</button>
        </div>
        
        <h3>Πριν φύγετε, θα θέλαμε να μας πείτε την εμπειρία σας με την σελίδα μας!</h3>
        <h4>Πόσο ευχαριστημένος μείνατε με την σελίδα μας;</h4>

        <div class="row">
          <form action="../php/modal.php" method="post">
            <div class="col-sm">
              <button  name="happy_user" type="submit" class="btn btn-success"><i class="fa fa-smile-o" aria-hidden="true"></i></button>
        
            </div>
            <div class="col-sm">
              <button  name="mediocre_user" type="submit" class="btn btn-warning"><i class="fa fa-meh-o" aria-hidden="true"></i></button>
              
            </div>
            <div class="col-sm">
              <button  name="sad_user" type="submit" class="btn btn-danger"><i class="fa fa-frown-o" aria-hidden="true"></i></button>
              
            </div>
          </form>
        </div>
      </div>
      <div class="overlay"></div>
  </section>


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
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://www.unipi.gr/unipi/el/"> ds.unipi.gr</a>
    </div>
    <!-- Copyright -->
  
  </footer>


  </body>
</html>