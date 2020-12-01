<html>
<head>
	<title>Sistem Informasi Alumni</title>
</head>
<body>
 
    <h2>SISTEM INFORMASI ALUMNI</h2>
    <h2>Data Pendidikan Lanjut</h2>
	<br/>
	<form action="tambahpendidikan.php">
    <input type="submit" value="Tambah Data Pendidikan" />
    </form>
    <br/>
    <form action="../homepage/homepage.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
	<table border="1">
		<tr>
			<th>ID Pendidikan</th>
			<th>ID Siswa</th>
			<th>Nama Institusi</th>
			<th>Alamat Institusi</th>
      <th>Jenis Institusi</th>
      <th>Jurusan</th>
		</tr>
<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
      				 <?php include_once("koneksi.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM pendidikan_lanjut");
                        while ($baris = mysqli_fetch_array($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['id_pendidikan']; ?></td>
      				        <td><?php echo $baris['id_siswa']; ?></td>
      				        <td><?php echo $baris['nama_institusi']; ?></td>
      				        <td><?php echo $baris['alamat_institusi']; ?></td>
                      <td><?php echo $baris['jenis_institusi']; ?></td>
                      <td><?php echo $baris['jurusan']; ?></td>
                      <td align="center">
                      <a href="editsavependidikan.php?id_pendidikan=<?php echo $baris['id_pendidikan']; ?>">EDIT</a>
                      <a href="pendidikanhapus.php?id_pendidikan=<?php echo $baris['id_pendidikan']; ?>">HAPUS</a>
      						</td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>  