<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="riwayatstudi.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="simpanriwayat.php">
		<table>
            <tr>			
				<td>ID Studi</td>
				<td><input type="text" name="id_studi" class="form-control" required="" disabled></td>
			</tr>
			<tr>			
				<td>ID Siswa</td>
				<td><input type="text" name="id_siswa"></td>
            </tr>
            <tr>			
				<td>Tahun Lulus</td>
				<td><input type="text" name="tahun_lulus"></td>
			</tr>
			<tr>
				<td>Jurusan SMA</td>
				<td><input type="text" name="jurusan_sma"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>