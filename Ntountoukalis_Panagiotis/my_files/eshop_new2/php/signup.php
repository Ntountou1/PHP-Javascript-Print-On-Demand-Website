<?php 
    require '../vendor/autoload.php';
    $m = new MongoDB\Client ("mongodb://127.0.0.1/");
    echo "Connected successfully<br>";
    


    $db = $m->signedUsers;
    echo "Database selected successfully<br><br>";

    //$collection = $db->createCollection("users");
    //echo "Collection created successfully<br><br>";

    $collection = $db->users;
    echo "Collection selected successfully<br><br>";
    

    $username = $_POST['signup_username'];
    $email = $_POST['signup_email'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $password = $_POST['passwd'];



    $document = array(
        "username" => "$username",
        "email" => "$email",
        "firstName" => "$firstName",
        "lastName" => "$lastName",
        "password" => "$password" );

    $collection->insertOne($document);
    echo "Inserted<br><br>";
    

    echo '<a href="../html/login.php">Back to login</a>';


?>