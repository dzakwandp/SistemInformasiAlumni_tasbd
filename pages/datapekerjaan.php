<html>
<head>
	<title>Sistem Informasi Alumni</title>
</head>
<body>
 
    <h2>SISTEM INFORMASI ALUMNI</h2>
    <h2>Data Pekerjaan</h2>
	<br/>
	<form action="tambahpekerjaan.php">
    <input type="submit" value="Tambah Data Pekerjaan" />
    </form>
    <br/>
    <form action="../homepage/homepage.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
	<table border="1">
		<tr>
			<th>ID Pekerjaan</th>
			<th>ID Siswa</th>
			<th>Kota</th>
			<th>Lokasi</th>
      <th>Nama Tempat Kerja</th>
      <th>Lama Bekerja (Tahun)</th>
		</tr>
<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
      				 <?php include_once("koneksi.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM pekerjaan");
                        while ($baris = mysqli_fetch_array($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['id_pekerjaan']; ?></td>
      				        <td><?php echo $baris['id_siswa']; ?></td>
      				        <td><?php echo $baris['kota']; ?></td>
      				        <td><?php echo $baris['lokasi']; ?></td>
                      <td><?php echo $baris['nama_tempat_kerja']; ?></td>
                      <td><?php echo $baris['lama_bekerja']; ?></td>
                      <td align="center">
                      <a href="editsavepekerjaan.php?id_pekerjaan=<?php echo $baris['id_pekerjaan']; ?>">EDIT</a>
                      <a href="pekerjaanhapus.php?id_pekerjaan=<?php echo $baris['id_pekerjaan']; ?>">HAPUS</a>
      						</td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>  