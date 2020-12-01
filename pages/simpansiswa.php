<?php
  include "koneksi.php";
  $id_siswa = $_POST['id_siswa'];
  $nama = $_POST['nama'];
  $alamat_siswa = $_POST['alamat_siswa'];
  $ttl = $_POST['ttl'];
  $no_hp = $_POST['no_hp'];
  $email = $_POST['email'];
  $jenis_kelamin = $_POST['jenis_kelamin'];

  $query = mysqli_query($koneksi, "INSERT INTO siswa VALUES ('$id_siswa', '$nama', '$alamat_siswa', '$ttl','$no_hp','$email','$jenis_kelamin')") or die(mysqli_error($koneksi));
	if ($query) {
		header('location:datasiswa2.php?message=success');
	}
  exit();
?>