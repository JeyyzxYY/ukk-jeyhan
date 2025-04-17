
<?php
require 'ceklogin.php';
// fungsui tambah todolist

if (isset($_POST["tambahTodo"])) {
    $taskname = $con->real_escape_string($_POST['taskname']);
    $status = $con->real_escape_string($_POST['status']);
    $prioritas = $con->real_escape_string($_POST['prioritas']);
    $tanggal = $con->real_escape_string($_POST['tanggal']);
   
    // simpan ke tabel todolist
    $sql = "INSERT INTO todolist (taskname, status, prioritas, tanggal) VALUES ('$taskname','$status', '$prioritas', '$tanggal')";
    $query = $con->query($sql);
    var_dump($query);
    if($query === true) {
        header("location: index.php");
    }else {
        echo "
        <script> alert ('Tambah Todolist Gagal');</script>
        ";
    } 
}


// fungsi edit todo
if (isset($_POST["id"])) {
    $id= $_POST["id"];
    $taskname = $con->real_escape_string($_POST['taskname']);
    $status = $con->real_escape_string($_POST['status']);
    $prioritas = $con->real_escape_string($_POST['prioritas']);
    $tanggal = $con->real_escape_string($_POST['tanggal']);
   
    // simpan ke tabel todolist
    $sql = "UPDATE todolist SET taskname='$taskname', status='$status', prioritas='$prioritas', tanggal='$tanggal' WHERE id='$id'";
    $query = $con->query($sql);
    var_dump($query);
    if($query === true) {
        header("location: index.php");
    }else {
        echo "
        <script> alert ('Edit Todolist Gagal');</script>
        ";
    }
}

// fungsi Selesai
if (isset($_GET['complete'])) {
    $id = $_GET['complete'];
    $query = mysqli_query($con, "UPDATE todolist SET status='selesai' WHERE id='$id'");
    header("location: index.php");
}
//  fungsi tidak selesai
if (isset($_GET['not_complete'])) {
    $id = $_GET['not_complete'];
    $query = mysqli_query($con, "UPDATE todolist SET status='belum selesai' WHERE id='$id'");
    header("location: index.php");
}

// fungsi hapus
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = mysqli_query($con, "DELETE FROM todolist WHERE id='$id'");
    header("location: index.php");
}

?>