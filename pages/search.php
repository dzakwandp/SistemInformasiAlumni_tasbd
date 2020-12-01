<!DOCTYPE html>
<html>
<head>
 <title>Sistem Informasi Alumni</title>
 <link rel="stylesheet" type="text/css" href="page.css">
</head>
<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
<body>

<h2>Pencarian Data Mahasiswa</h2></div>
<form action="search.php" method="get">
 <label>Cari :</label>
 <input type="text" name="cari">
 <input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
 <tr>
    <th>NIS Siswa</th>
    <th>Nama Siswa</th>
    <th>Tempat Lahir</th>
    <th>Jenis Kelamin</th>
 </tr>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($koneksi, "SELECT * from siswa where nama like '%".$cari."%'");    
 }else{
  $data = mysqli_query($koneksi, "SELECT * from siswa");  
 }
 $no = 1;
 while($d = mysqli_fetch_assoc($data)){
 ?>
 <tr>
  <td><?php echo $d['id_siswa']; ?></td>
        <td><?php echo $d['nama']; ?></td>
  <td><?php echo $d['ttl']; ?></td>
        <td><?php echo $d['jenis_kelamin']; ?></td>
 </tr>
 <?php } ?>
</table>
  <div class="clear"></div>
        </div>
</body>
</html>