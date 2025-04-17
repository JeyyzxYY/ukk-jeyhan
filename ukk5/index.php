<?php 
require "ceklogin.php";
include "fungsiCRUD.php";


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APPLIKASI TO DO LIST</title>
    <link rel="website icon" type="png" href="assets/img/2.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link href="css/styles.css" rel="stylesheet" />
</head>
  <body >
    <?php include "header.php";?>
    <div class="container" height="1000vh">
         <?php 
         include "nav.php";
          include "formAddTodo.php";
        ?>
        <div class="row">
            <!-- todolist -->
             <div class="col-md-8">
                <?php include "allTodo.php" ?>
             </div>
             <div class="col-md-4">
                 <?php include "todoSelesai.php" ?>
                 <br>
                 <?php include "todoBelum.php" ?>
                 <a class="nav-link" style='font-size:20px;color:red' href="logout.php"><center>
                                
                                Logout
                            </a>

             </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>