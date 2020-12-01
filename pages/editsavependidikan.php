<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_pendidikan = $_POST['id_pendidikan'];
	$id_siswa = $_POST['id_siswa'];
	$nama_institusi = $_POST['nama_institusi'];
	$alamat_institusi = $_POST['alamat_institusi'];
    $jenis_institusi = $_POST['jenis_institusi'];
    $jurusan = $_POST['jurusan'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE pendidikan_lanjut SET id_siswa='$id_siswa',nama_institusi='$nama_institusi',alamat_institusi='$alamat_institusi',jenis_institusi='$jenis_institusi',jurusan='$jurusan' WHERE id_pendidikan='$id_pendidikan'");

    // Redirect to homepage to display updated user in list
    header("Location: datapendidikan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_pendidikan = $_GET['id_pendidikan'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM pendidikan_lanjut WHERE id_pendidikan=$id_pendidikan");

while($user_data = mysqli_fetch_array($result))
{
    $id_pendidikan = $user_data['id_pendidikan'];
    $id_siswa = $user_data['id_siswa'];
    $nama_institusi = $user_data['nama_institusi'];
    $alamat_institusi = $user_data['alamat_institusi'];
    $jenis_institusi = $user_data['jenis_institusi'];
    $jurusan = $user_data['jurusan'];
}
?>
<html>
<head>  
    <title>Sistem Informasi Alumni</title>
</head>

<body>
    <a href="../homepage/homepage.php">Home</a>
    <br/><br/>

    <h2>Edit Data Pendidikan</h2>

    <form method="post" action="editsavependidikan.php">
        <table border="1">
            <tr>
            <td>ID Pendidikan</td>
            <td><input type="text" name="id_pendidikan" value="<?php echo $id_pendidikan;?>" readonly></td>
            </tr>
            <tr>
            <td>NIS Siswa</td>
            <td><input type="text" name="id_siswa" value="<?php echo $id_siswa;?>"></td>
            </tr>
            <tr> 
                <td>Nama Institusi</td>
                <td><input type="text" name="nama_institusi" value="<?php echo $nama_institusi;?>"></td>
            </tr>
            <tr> 
                <td>Alamat Institusi</td>
                <td><input type="text" name="alamat_institusi" value="<?php echo $alamat_institusi;?>"></td>
            </tr>
            <tr> 
                <td>Jenis Institusi</td>
                <td><input type="text" name="jenis_institusi" value="<?php echo $jenis_institusi;?>"></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?php echo $jurusan;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>