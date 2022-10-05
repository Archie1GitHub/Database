<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
        <h1><a href = "table.php">Data Siswa</a><h1><p>
        <h1><a href = "Index.php">Kembali</a></h1>
        <br>
        <br>
        <form method="POST" action="form_process.php" id="form">
            <table>
            <tr>
                <td>NIS </td>
                <td><input type="number" name="nis" placeholder="NIS" required></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>Nama Lengkap </td>
                <td><input type="text" name="nama_lengkap" placeholder="Nama" required></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td><input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td><select id="kelas" name="kelas" required>
                    <option value="" selected hidden>Kelas</option>
                    <option value="x">X</option>
                    <option value="xi">XI</option>
                    <option value="xii">XII</option>
                    </select></td>
            </tr>
            <tr><td></td></tr>
            <tr>
            <td><label for="jurusan">Jurusan</label></td>
                <td><select id="jurusan" name="jurusan" required>
                    <option value="" selected hidden>Jurusan</option>
                    <option value="TJAT">TJAT</option>
                    <option value="TKJ">TKJ</option>
                    <option value="RPL">RPL</option>
                    <option value="DKV">TJAT</option>
                    <option value="Animasi">Animasi</option>
                </select></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>Email </td>
                <td><input type="text" name="email" placeholder="Email" required></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>Alamat </td>
                <td><textarea name="alamat" form="form" required></textarea></td>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" name="simpan"></td>
            </tr>
        </form>
        </table>
    </body>
</html>