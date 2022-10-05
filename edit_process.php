<?php 

include("connect.php");

if(isset($_POST['simpan'])){

    $nis                = $_POST['nis'];
    $nama_lengkap       = $_POST['nama_lengkap'];
    $tgl_lahir          = $_POST['tgl_lahir'];
    $kelas              = $_POST['kelas'];
    $jurusan            = $_POST['jurusan'];
    $email              = $_POST['email'];
    $alamat             = $_POST['alamat']

    $sql ="UPDATE data_siswa SET nama_lengkap='$nama_lengkap', tgl_lahir='$tgl_lahir',
                            kelas='$kelas', jurusan='$jurusan', email='$email',
                            alamat='$alamat'
                        WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location: table.php');
    } else {
        die("Gagal Menyimpan Perubahan");
    }

    } else {
        die ("Akses Dilarang");
    }

?>