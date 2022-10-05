<?php
include("connect.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM data_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location: table.php');
    } else {
        die("Gagal menghapus");
    }
} else {
    die("Akses dilarang");
}
?>