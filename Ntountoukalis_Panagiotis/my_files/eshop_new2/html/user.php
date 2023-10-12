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
        <link rel="stylesheet" href="../css/styles_user.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




    <!--sidebar for user-->
     
     <!--end of sidebar-->
    <div class="container">
        <h1 id="div1">test 1</h1>
        <h1 id="div2" class="hidden">test 2</h1>
        <h1 id="div3" class="hidden">test 3</h1>



        <select id="target">
            <option value="">Select...</option>
            <option value="content_1">Option 1</option>
            <option value="content_2">Option 2</option>
            <option value="content_3">Option 3</option>
        <select>


        <div id="content_1" class="hidden">
            Content 1
        </div>
        <div id="content_2" class="hidden">Content 2</div>
        <div id="content_3" class="hidden">Content 3</div>
    </div>
     
    <script>
        document.getElementById('target').addEventListener('change', function () {
                'use strict';
                var visible = document.querySelector('.visible'),   
                    target = document.getElementById(this.value);
                if (visible !== null) {
                    visible.className = 'hidden';
                }
                if (target !== null ) {
                    target.className = 'visible';
                }
        });
    </script>


    <!-- The sidebar -->
    <div class="sidebar" id="target">
        <a class="active" href="#">Home</a>
        <a href="#">News</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
    </div>
    
     


     
  </body>
</html>