<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_studi = $_POST['id_studi'];
	$id_siswa = $_POST['id_siswa'];
	$tahun_lulus = $_POST['tahun_lulus'];
	$jurusan_sma = $_POST['jurusan_sma'];
    $kelas = $_POST['kelas'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE riwayat_studi SET id_siswa='$id_siswa', tahun_lulus='$tahun_lulus', jurusan_sma='$jurusan_sma', kelas='$kelas' WHERE id_studi='$id_studi'");

    // Redirect to homepage to display updated user in list
    header("Location: riwayatstudi.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_studi = $_GET['id_studi'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM riwayat_studi WHERE id_studi=$id_studi");

while($user_data = mysqli_fetch_array($result))
{
    $id_studi = $user_data['id_studi'];
    $id_siswa = $user_data['id_siswa'];
    $tahun_lulus = $user_data['tahun_lulus'];
    $jurusan_sma = $user_data['jurusan_sma'];
    $kelas = $user_data['kelas'];
}
?>
<html>
<head>  
    <title>Sistem Informasi Alumni</title>
</head>

<body>
    <a href="../homepage/homepage.php">Home</a>
    <br/><br/>

    <h2>Edit Data Riwayat Pendidikan</h2>

    <form method="post" action="editsaveriwayat.php">
        <table border="1">
            <tr>
            <td>ID Studi</td>
            <td><input type="text" name="id_studi" value="<?php echo $id_studi;?>" readonly></td>
            </tr>
            <tr>
            <td>NIS Siswa</td>
            <td><input type="text" name="id_siswa" value="<?php echo $id_siswa;?>"></td>
            </tr>
            <tr> 
                <td>Tahun Lulus</td>
                <td><input type="text" name="tahun_lulus" value="<?php echo $tahun_lulus;?>"></td>
            </tr>
            <tr> 
                <td>Jurusan SMA</td>
                <td><input type="text" name="jurusan_sma" value="<?php echo $jurusan_sma;?>"></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $kelas;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>