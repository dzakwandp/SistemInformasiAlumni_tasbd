<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_pekerjaan = $_POST['id_pekerjaan'];
	$id_siswa = $_POST['id_siswa'];
	$kota = $_POST['kota'];
	$lokasi = $_POST['lokasi'];
    $nama_tempat_kerja = $_POST['nama_tempat_kerja'];
    $lama_bekerja = $_POST['lama_bekerja'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE pekerjaan SET id_siswa='$id_siswa',kota='$kota',lokasi='$lokasi',nama_tempat_kerja='$nama_tempat_kerja',lama_bekerja='$lama_bekerja' WHERE id_pekerjaan='$id_pekerjaan'");

    // Redirect to homepage to display updated user in list
    header("Location: datapekerjaan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_pekerjaan = $_GET['id_pekerjaan'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM pekerjaan WHERE id_pekerjaan=$id_pekerjaan");

while($user_data = mysqli_fetch_array($result))
{
    $id_pekerjaan = $user_data['id_pekerjaan'];
    $id_siswa = $user_data['id_siswa'];
    $kota = $user_data['kota'];
    $lokasi = $user_data['lokasi'];
    $nama_tempat_kerja = $user_data['nama_tempat_kerja'];
    $lama_bekerja = $user_data['lama_bekerja'];
}
?>
<html>
<head>  
    <title>Sistem Informasi Alumni</title>
</head>

<body>
    <a href="../homepage/homepage.php">Home</a>
    <br/><br/>

    <h2>Edit Data Pekerjaan</h2>

    <form method="post" action="editsavepekerjaan.php">
        <table border="1">
            <tr>
            <td>ID Pekerjaan</td>
            <td><input type="text" name="id_pekerjaan" value="<?php echo $id_pekerjaan;?>" readonly></td>
            </tr>
            <tr> 
                <td>NIS Siswa</td>
                <td><input type="text" name="id_siswa" value="<?php echo $id_siswa;?>"></td>
            </tr>
            <tr> 
                <td>Kota</td>
                <td><input type="text" name="kota" value="<?php echo $kota;?>"></td>
            </tr>
            <tr> 
                <td>Lokasi</td>
                <td><input type="text" name="lokasi" value="<?php echo $lokasi;?>"></td>
            </tr>
            <tr> 
                <td>Nama Tempat Kerja</td>
                <td><input type="text" name="nama_tempat_kerja" value="<?php echo $nama_tempat_kerja;?>"></td>
            </tr>
            <tr> 
                <td>Lama Berkerja (Tahun)</td>
                <td><input type="number" name="lama_bekerja" value="<?php echo $lama_bekerja;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
