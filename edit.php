<?php include("connect.php");

if (!isset($_GET['id'])){
    header('location: table.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM data_siswa WHERE id=$id";
$query = mysqli_query ($db, $sql);
$siswa = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
        <h1><a href = "index.php">Home</a><h1><p>
        <h1><a href="table.php">Kembali</a></h1>
        <br>
        <br>
        <form method="POST" action="edit_process.php">
            <table>
            <tr>
                <td>NIS </td>
                <td><input type="hidden" name="nis" value="<?php echo $siswa ['nis'] ?>" />
                <input type="number" name="nis" placeholder="NIS" value="<?php echo $data_siswa ['nis'] ?>" required ></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>Nama Lengkap </td>
                <td><input type="text" name="nama_lengkap" placeholder="Nama" value="<?php echo $data_siswa ['nama_lengkap'] ?>" required></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td><input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $data_siswa ['tgl_lahir'] ?>" required></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td><select id="kelas" name="kelas" value="<?php echo $data_siswa ['kelas'] ?>" required>
                    <option value="" selected hidden>Kelas</option>
                    <option value="x">X</option>
                    <option value="xi">XI</option>
                    <option value="xii">XII</option>
                    </select></td>
            </tr>
            <tr><td></td></tr>
            <tr>
            <td><label for="jurusan">Jurusan</label></td>
                <td><select id="jurusan" name="jurusan" value="<?php echo $data_siswa ['jurusan'] ?>" required>
                    <option value="" selected hidden>Jurusan</option>
                    <option value="tjat">TJAT</option>
                    <option value="tkj">TKJ</option>
                    <option value="rpl">RPL</option>
                    <option value="dkv">TJAT</option>
                    <option value="animasi">Animasi</option>
                </select></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>Email </td>
                <td><input type="text" name="email" placeholder="Email" value="<?php echo $data_siswa ['email'] ?>" required></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>Alamat </td>
                <td><textarea name="alamat" form="form"  value="<?php echo $data_siswa ['alamat'] ?>" required></textarea></td>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" name="simpan"></td>
            </tr>
        </form>
        </table>
    </body>
</html>