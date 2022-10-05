<?php
    include ("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h1><a href = "form.php">Form</a><p></h1>
    <h1><a href = "index.php">Kembali</a><h1><p>
    <form action="table.php" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Search">
    </form><br>
    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
    }    
    ?>
     
     <table border="1">
        <tr>
            <th> NIS </th>
            <th> Nama </th>
            <th> Tanggal Lahir </th>
            <th> Kelas </th>
            <th> Jurusan </th>
            <th> Email </th>
            <th> Alamat </th>
            <th> Opsi </th>
        </tr>
<?php
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $query = "SELECT * FROM data_siswa WHERE   nis like '%$cari%' OR nama_lengkap like '$$cari%' OR 
                                               tgl_lahir like '%$cari%' OR kelas like '%$cari$' OR 
                                               jurusan like '%$cari%' OR email like '%$cari%' OR 
                                               alamat like '%$cari%'";
}else{
    $query = "SELECT * FROM data_siswa";
}
$query = mysqli_query($db, $query);
while ($data_siswa = mysqli_fetch_array($query)) {
    
    echo "<tr>";
    echo "<td hidden>" . $data_siswa ['id']. "</td>";
    echo "<td>" . $data_siswa ['nis']. "</td>";
    echo "<td>" . $data_siswa ['nama_lengkap']. "</td>";
    echo "<td>" . $data_siswa ['tgl_lahir']. "</td>";
    echo "<td>" . $data_siswa ['kelas']. "</td>";
    echo "<td>" . $data_siswa ['jurusan']. "</td>";
    echo "<td>" . $data_siswa ['email']. "</td>";
    echo "<td>" . $data_siswa ['alamat']. "</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$data_siswa['id'] . "'>EDIT</a> | ";
    echo "<a href='delete.php?id=".$data_siswa['id'] . "'>HAPUS</a></form>";
    echo "</td>";
}
?>
</body>
</html>