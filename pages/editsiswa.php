<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_siswa = $_POST['id_siswa'];
    $nama = $_POST['nama'];
    $alamat_siswa = $_POST['alamat_siswa'];
    $ttl = $_POST['ttl'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE siswa SET nama='$nama',alamat_siswa='$alamat_siswa',ttl='$ttl',no_hp='$no_hp',email='$email' WHERE id_siswa=$id_siswa");
    
    // Redirect to homepage to display updated user in list
    header("Location: datasiswa2.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_siswa = $_GET['id_siswa'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa=$id_siswa");

while($user_data = mysqli_fetch_assoc($result))
{
    $id_siswa = $user_data['id_siswa'];
    $nama = $user_data['nama'];
    $alamat_siswa = $user_data['alamat_siswa'];
    $ttl = $user_data['ttl'];
    $no_hp = $user_data['no_hp'];
    $email = $user_data['email'];
    $jenis_kelamin = $user_data['jenis_kelamin'];
}
?>
<html>
<head>  
    <title>Sistem Informasi Alumni</title>
</head>

<body>
    <a href="../homepage/homepage.php">Home</a>
    <br/><br/>

    <h2>Edit Data Siswa</h2>

    <form method="post" action="editsiswa.php">
        <table border="1">
            <tr>
            <td>NIS Siswa</td>
            <td><input type="text" name="id_siswa" value="<?php echo $id_siswa;?>" readonly></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat_siswa" value="<?php echo $alamat_siswa;?>"></td>
            </tr>
            <tr> 
                <td>Tempat Tanggal Lahir</td>
                <td><input type="text" name="ttl" value="<?php echo $ttl;?>"></td>
            </tr>
            <tr> 
                <td>No. Handphone</td>
                <td><input type="number" name="no_hp" value="<?php echo $no_hp;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
