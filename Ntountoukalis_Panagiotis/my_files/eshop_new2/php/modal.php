<?php 
    require '../vendor/autoload.php';
    $m = new MongoDB\Client ("mongodb://127.0.0.1/");
    echo "Connected successfully<br>";
    


    $db = $m->signedUsers;
    echo "Database selected successfully<br><br>";

    //$collection = $db->createCollection("modal");
    //echo "Collection created successfully<br><br>";

    $collection = $db->modal;
    echo "Collection selected successfully<br><br>";
    

    

    //insert first values for each row for the first time and then change them every time user clicks each button

   // $document = array(
     //   "happy_users" => "0",
       // "mediocre_users" => "0",
        //"sad_users" => "0");

    //$collection->insertOne($document);
    //echo "Inserted<br><br>";
    

    $cursor = $collection->find();
    foreach($cursor as $document){

        if ( isset( $_POST['happy_user'] )) {
            $total_users=$document["happy_users"]+1;
            echo $total_users;
            $collection->updateOne(array("happy_users"), array('$set'=>array("happy_users"=>$total_users)));
        }

        else if ( isset( $_POST['mediocre_user'] )) {
            $total_users=$document["mediocre_users"]+1;
            $collection->updateOne(array('$set'=>array("mediocre_users"=>$total_users)));

        }

        else if ( isset( $_POST['sad_user'] )) {
            $total_users=$document["sad_users"]+1;
            $collection->updateOne(array('$set'=>array("sad_users"=>$total_users)));

        }

    }

    echo $collection;
   // echo "Signup";
    header('Location: ../html/products.php');

?>