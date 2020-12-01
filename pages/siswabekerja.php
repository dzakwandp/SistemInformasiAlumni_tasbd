<html>
<head>
	<title>Sistem Informasi Alumni</title>
</head>
<body>
 
    <h2>SISTEM INFORMASI ALUMNI</h2>
    <h2>Siswa Lanjut Berkerja</h2>
	<br/>
    <br/>
    <form action="../homepage/homepage.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Tempat Tanggal Lahir</th>
			<th>No. HP</th>
      <th>Kota</th>
      <th>Lokasi</th>
      <th>Nama Tempat Kerja</th>
		</tr>
<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
      				 <?php include_once("koneksi.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT siswa.nama,siswa.ttl,siswa.no_hp, pekerjaan.kota, pekerjaan.lokasi, pekerjaan.nama_tempat_kerja FROM siswa INNER JOIN pekerjaan ON siswa.id_siswa=pekerjaan.id_siswa");
                        while ($baris = mysqli_fetch_array($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['nama']; ?></td>
      				        <td><?php echo $baris['ttl']; ?></td>
      				        <td><?php echo $baris['no_hp']; ?></td>
      				        <td><?php echo $baris['kota']; ?></td>
                      <td><?php echo $baris['lokasi']; ?></td>
                      <td><?php echo $baris['nama_tempat_kerja']; ?></td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>  