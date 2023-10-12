<?php session_start();?>

<?php 

echo "HII";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    

    <?php 
      
      require '../vendor/autoload.php';
      $m = new MongoDB\Client ("mongodb://127.0.0.1/");

      $db = $m->signedUsers;

      $collection = $db->users;

      if ( isset( $_POST['edit_btn'] )) {
        
        $id = $_POST['edit_user'];
        $cursor = $collection->find(array('username'=>$id) );
        //$collection->deleteMany(array("username"=>$id));
        //header('Location: ../html/admin.php');
        //echo $collection;
        foreach ($cursor as $document)
        {
            ?>

            
      <form action="update_user.php" method="POST">

        <input type="hidden" name="edit_id" value="<?php echo $document["username"]?>">
        <div class="form-group">
            <label> Username </label>
            <input type="text" name="edit_username" value="<?php echo $document["username"]?>"class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="edit_password" value="<?php echo $document["password"]?>" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label>First name</label>
            <input type="text" name="edit_firstname" value="<?php echo $document["firstName"]?>" class="form-control" placeholder="Enter First name">
        </div>
        <div class="form-group">
            <label>Last name</label>
            <input type="text" name="edit_lastname" value="<?php echo $document["lastName"]?>" class="form-control" placeholder="Enter Last name">
        </div> 

        <div class="form-group">
            <label>Password</label>
            <input type="text" name="edit_email" value="<?php echo $document["email"]?>" class="form-control" placeholder="Enter Email">
        </div> 
            <a href="../html/admin.php" class="btn btn-danger">Cancel</a>
            <button type="submit" name="update_btn" class="btn btn-primary">Update</button>

      </form>


    <?php

        }
      }
    
    ?>


  </body>
</html>