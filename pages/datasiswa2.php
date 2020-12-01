<html>
<head>
	<title>Sistem Informasi Alumni</title>
</head>
<body>
 
    <h2>SISTEM INFORMASI ALUMNI</h2>
    <h2>Data Siswa</h2>
	<br/>
	<form action="tambahsiswa.php">
    <input type="submit" value="Tambah Data Siswa" />
    </form>
    <br/>
    <form action="../homepage/homepage.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
	<table border="1">
		<tr>
			<th>ID Siswa</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tempat Lahir</th>
            <th>No. HP</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
		</tr>
<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
      				 <?php include_once("koneksi.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM siswa");
                        while ($baris = mysqli_fetch_array($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['id_siswa']; ?></td>
      				  <td><?php echo $baris['nama']; ?></td>
      				  <td><?php echo $baris['alamat_siswa']; ?></td>
      				  <td><?php echo $baris['ttl']; ?></td>
                      <td><?php echo $baris['no_hp']; ?></td>
                      <td><?php echo $baris['email']; ?></td>
                      <td><?php echo $baris['jenis_kelamin']; ?></td>
                      <td align="center">
                      <a href="editsiswa.php?id_siswa=<?php echo $baris['id_siswa']; ?>">EDIT</a>
                      <a href="siswahapus.php?id_siswa=<?php echo $baris['id_siswa']; ?>">HAPUS</a>
      						</td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>  