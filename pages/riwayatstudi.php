<html>
<head>
	<title>Sistem Informasi Alumni</title>
</head>
<body>
 
    <h2>SISTEM INFORMASI ALUMNI</h2>
    <h2>Riwayat Studi</h2>
	<br/>
	<form action="tambahstudi.php">
    <input type="submit" value="Tambah Data Riwayat" />
    </form>
    <br/>
    <form action="../homepage/homepage.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
	<table border="1">
		<tr>
			<th>ID Studi</th>
			<th>ID Siswa</th>
			<th>Tahun Lulus</th>
			<th>Jurusan</th>
      <th>Kelas</th>
		</tr>
<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
      				 <?php include_once("koneksi.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM riwayat_studi");
                        while ($baris = mysqli_fetch_array($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['id_studi']; ?></td>
      				        <td><?php echo $baris['id_siswa']; ?></td>
      				        <td><?php echo $baris['tahun_lulus']; ?></td>
      				        <td><?php echo $baris['jurusan_sma']; ?></td>
                      <td><?php echo $baris['kelas']; ?></td>
                      <td align="center">
                      <a href="editsaveriwayat.php?id_studi=<?php echo $baris['id_studi']; ?>">EDIT</a>
                      <a href="riwayathapus.php?id_studi=<?php echo $baris['id_studi']; ?>">HAPUS</a>
      						</td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>  