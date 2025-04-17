<?php
require 'functions.php';

if(isset($_POST["register"])) {

    if(registrasi($_POST) > 0 ) {
        echo "<script> 
        alert('user baru berhasil ditambahkan!')
        </script>";
    } else {
        echo mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body class="bg-dark">
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registrasi</h3></div>
                                    <div class="card-body">

       
        <style>
            label { 
                display: block;
            }
            /* From Uiverse.io by barisdogansutcu */ 
/* From Uiverse.io by gksckt */ 
/* From Uiverse.io by cssbuttons-io */ 
button {
    
  padding: 1.3em 3em;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  margin: 0 auto;
}

button:hover {
  background-color: #23c483;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}

button:active {
  transform: translateY(-1px);
}
    </style>
    <form action="" method="post">
        
        <div class="form-floating mb-3">
        <input class="form-control" id="inputEmail" name="username" type="text" placeholder="Enter Username" required/>
        <label for="inputEmail">Username</label>
        </div>
            
        <div class="form-floating mb-3">
        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" required />
        <label for="inputPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
        <input class="form-control" id="inputPassword2" name="password2" type="password" placeholder="Password" required />
        <label for="inputPassword2">Konfirmasi Password</label>
        </div>
            <!-- <li>
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2">
            </li> -->
            
            <div class="d-flex align-items-center justify-content-between mt-10 mb-0">
                <!-- <button type="submit" name="register">Register !</button> -->
               <button  type="submit" name="register"   >Register</button>
            </div>
            <br>
            Sudah punya akun? <a href="login.php"> Login disni!</a>
    </form>
</div>
</div>
                                 
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </main>
         </div>
         
     </div>

</body>
</html>