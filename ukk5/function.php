<?php
if (session_status() == PHP_SESSION_NONE) {

    session_start();
}

// koneksi
$con = mysqli_connect("localhost", "root", "", "baru");

// login
if(isset($_POST['login'])) {
    // initiate variabel

$username = $_POST['username'];
$password = $_POST['password'];

$check  = mysqli_query($con, "SELECT * FROM user WHERE username='$username' and password='$password'");
$hitung = mysqli_num_rows($check);

if($hitung>0) {
    

    $_SESSION['login'] = 'true';
    header('location:index.php');
} else {
 echo ' 
  <script>alert("Username atau Password Salah");
   window.location.href="login.php"
  </script>
 ';
}
}



?>