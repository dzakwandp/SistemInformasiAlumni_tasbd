<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Alumni</title>
</head>
<body>

	<h2>Sistem Informasi Alumni</h2>
	<br/>
	<a href="datasiswa2.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="simpansiswa.php">
		<table>
            <tr>			
				<td>ID</td>
				<td><input type="text" name="id_siswa" class="form-control" required="" disabled></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
            </tr>
            <tr>			
				<td>Alamat</td>
				<td><input type="text" name="alamat_siswa"></td>
			</tr>
			<tr>
				<td>Tempat Tanggal Lahir</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td>No. HP</td>
				<td><input type="number" name="no_hp"></td>
            </tr>
            <tr>			
				<td>Email</td>
				<td><input type="text" name="email"></td>
            </tr>
            <tr>			
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>