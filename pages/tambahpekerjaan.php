<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Alumni</title>
</head>
<body>

	<h2>Sistem Informasi Alumni</h2>
	<br/>
	<a href="datapendidikan.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA PEKERJAAN</h3>
	<form method="post" action="simpanpekerjaan.php">
		<table>
            <tr>			
				<td>ID Pekerjaan</td>
				<td><input type="text" name="id_pekerjaan" class="form-control" required="" disabled></td>
			</tr>
			<tr>			
				<td>ID Siswa</td>
				<td><input type="text" name="id_siswa"></td>
            </tr>
            <tr>			
				<td>Kota</td>
				<td><input type="text" name="kota"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td><input type="text" name="lokasi"></td>
			</tr>
			<tr>
				<td>Nama Tempat Kerja</td>
				<td><input type="text" name="nama_tempat_kerja"></td>
            </tr>
            <tr>			
				<td>Lama Bekerja (Tahun)</td>
				<td><input type="text" name="lama_bekerja"></td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>