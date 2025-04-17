<?php
require 'function.php';
if(isset($_SESSION['login'])){
    // yauda login simpel
}else {
// se balom login to??
header('location:login.php');
}
?>