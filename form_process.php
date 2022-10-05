<?php
include ("connect.php");

if(isset($_POST['simpan'])){

    $nis                = $_POST['nis'];
    $nama_lengkap       = $_POST['nama_lengkap'];
    $tgl_lahir          = $_POST['tgl_lahir'];
    $kelas              = $_POST['kelas'];
    $jurusan            = $_POST['jurusan'];
    $email              = $_POST['email'];
    $alamat             = $_POST['alamat'];

    $sql = "INSERT INTO data_siswa (nis, nama_lengkap, tgl_lahir, kelas, jurusan, email, alamat) 
                        VALUE ('$nis', '$nama_lengkap', 
                               '$tgl_lahir', '$kelas', 
                               '$jurusan', '$email', 
                               '$alamat')";
    $query = mysqli_query($db, $sql);

    if ($query){
        header('location: table.php?status=sukses');
    } else {
        header('location: table.php?status=gagal');
    }
} else {
    die ("Akses dilarang");
}
?>