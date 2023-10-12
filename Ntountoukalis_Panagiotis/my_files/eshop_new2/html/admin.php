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
    <link rel="stylesheet" href="../css/styles_admin.css">

  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <h1>hello admin</h1>

    <table name = "userDetails">
      <tr>
          <th>Username</th>
          <th>Password</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Email</th>
          <th>Delete User</th>
          <th>Edit User</th>
      </tr>
      <?php 
      echo '<h2>Registered users:</h2><br>';
    
      require '../vendor/autoload.php';
      $m = new MongoDB\Client ("mongodb://127.0.0.1/");
    
      $db = $m->signedUsers;

      $collection = $db->users;

    $cursor = $collection->find();
    foreach ($cursor as $document){
      ?>

      <tr>
        <td>
          Username: <?php echo $document["username"];?>
        </td>
        <td>
         Password: <?php echo $document["password"];?>
        </td>
        <td>
          First name: <?php echo $document["firstName"];?>
        </td>
        <td>
          Last name: <?php echo $document["lastName"];?>
        </td>
        <td>
          Email: <?php echo $document["email"];?>
        </td>
        <td>
        <form name="delete_form" method="post" action="../php/delete_user.php">
          <input type="hidden" name="delete_user" value="<?php echo $document["username"] ?>" />
          <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
        </form>     
        </td>
        <td>
          <form name="change_form" method="post" action="../php/edit_user_changes.php">
            <input type="hidden" name="edit_user" value="<?php echo $document["username"] ?>" />
            <button type="submit" name="edit_btn" class="btn btn-primary">EDIT</button>
          </form>
        </td>
      </tr>
      

    <?php  
    }
      
    ?>
    ?>
    </table>



    <?php 

      $collection2 = $db->modal;
      $cursor2 = $collection2->find();
      
      foreach ($cursor2 as $document2){?>
    <div class="users_critics">
      <h3>Happy users: <?php echo $document2["happy_users"];?></h3>
      <h3>Mediocre users: <?php echo $document2["mediocre_users"];?></h3>
      <h3>Sad users: <?php echo $document2["sad_users"];?></h3>
    </div>

    <?php  
    }
      
    ?>

    <?php  $timeSinceLogin =( time () - $_SESSION ['timer']) /60; //time in minutes.
           echo "Last user logged in for: " . $timeSinceLogin . " minutes";
     ?>
    
  </body>
</html>