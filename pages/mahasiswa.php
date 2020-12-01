<html>
<head>
	<title>Sistem Informasi Alumni</title>
</head>
<body>
 
    <h2>SISTEM INFORMASI ALUMNI</h2>
    <h2>Siswa Lanjut Studi</h2>
	<br/>
    <br/>
    <form action="../homepage/homepage.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Nama Institusi</th>
			<th>Alamat Institusi</th>
			<th>Jurusan</th>
      <th>No. HP</th>
		</tr>
<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
      				 <?php include_once("koneksi.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT siswa.nama , pendidikan_lanjut.nama_institusi, pendidikan_lanjut.alamat_institusi, pendidikan_lanjut.jurusan, siswa.no_hp FROM siswa INNER JOIN pendidikan_lanjut ON siswa.id_siswa=pendidikan_lanjut.id_siswa");
                        while ($baris = mysqli_fetch_array($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['nama']; ?></td>
      				        <td><?php echo $baris['nama_institusi']; ?></td>
      				        <td><?php echo $baris['alamat_institusi']; ?></td>
      				        <td><?php echo $baris['jurusan']; ?></td>
                      <td><?php echo $baris['no_hp']; ?></td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>  