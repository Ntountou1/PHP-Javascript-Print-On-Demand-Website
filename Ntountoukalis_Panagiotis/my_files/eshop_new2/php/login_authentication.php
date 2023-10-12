<?php session_start();?>


<?php 

    require '../vendor/autoload.php';
    $m = new MongoDB\Client ("mongodb://127.0.0.1/");
    echo "Connected successfully<br>";
    
    $db = $m->signedUsers;
    echo "Database selected successfully<br><br>";
    //$collection = $db->createCollection("testtable");
  //  echo "Collection selected successfully<br><br>";
    $collection = $db->users;
    echo "Collection selected successfully<br>";
    


    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST['password']; //check signup.php for other sessions
    $signedUser = true;


    $cursor = $collection->find( array('username'=>$_SESSION["username"],
                                       'password'=> $_SESSION["password"]) );
    foreach ($cursor as $document){
      $signedUser = false; 
    }

    if ($signedUser){
      echo "Wrong inputs<br>";
      echo("<button onclick=\"location.href='../html/login.php'\">Back to Login Page</button>");
      
    }
    else{
      if ($_SESSION["username"] =="admin"){  //a=admin for now and pass=a for now
        echo "<script> location.href='../html/admin.php'; </script>";
        $_SESSION ['timer'] = time(); //for user to show time
        echo "1";
        exit;
    }
     else{
       echo "<script> location.href='../html/index.php'; </script>";
       echo "2";
       exit;
      }
    }


    //$collection->deleteMany(array("username" => "admin"));

   // $cursor = $collection->find( );
   // foreach ($cursor as $document){
     // echo $document["username"];
      //echo $document["password"];
      //echo "<br>";
    //}


    

    




    


?>