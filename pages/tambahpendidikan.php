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
	<h3>TAMBAH DATA PENDIDIKAN LANJUT</h3>
	<form method="post" action="simpanpendidikan.php">
		<table>
            <tr>			
				<td>ID Pendidikan</td>
				<td><input type="text" name="id_pendidikan" class="form-control" required="" disabled></td>
			</tr>
			<tr>			
				<td>ID Siswa</td>
				<td><input type="text" name="id_siswa"></td>
            </tr>
            <tr>			
				<td>Nama Institusi</td>
				<td><input type="text" name="nama_institusi"></td>
			</tr>
			<tr>
				<td>Alamat Institusi</td>
				<td><input type="text" name="alamat_institusi"></td>
			</tr>
			<tr>
				<td>Jenis Institusi</td>
				<td><input type="text" name="jenis_institusi"></td>
            </tr>
            <tr>			
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>