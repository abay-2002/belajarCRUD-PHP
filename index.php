<?php 
	require "function.php";
/*
	1. kita akan melakukan CRUD
	Create, Read, Update, Delete.

	Create/Membuat/Menambah.
	INSERT INTO `siswasiswi`(`id`, `nama`, `nis`, `email`, `jurusan`, `gambar`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')

	Read/Membaca/Seleksi.
	SELECT `id`, `nama`, `nis`, `email`, `jurusan`, `gambar` FROM `siswasiswi` WHERE 1

	Update/Menambah
	UPDATE `siswasiswi` SET `id`='[value-1]',`nama`='[value-2]',`nis`='[value-3]',`email`='[value-4]',`jurusan`='[value-5]',`gambar`='[value-6]' WHERE 1

	Delete/Menghapus.
	DELETE FROM `siswasiswi` WHERE 0
	
	1.READ/membaca, pertama untuk menampilkan data yang berada dari table yang berada didalam sebuah database kita akan menampilkan datanya.
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>1.coratCoret/1.CRUD/index.php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>UPDATE</h2>
	<p>Mahasiswa: <a href="#">Update</a></p>

	<!-- 1.melakukan CREATE $seleksiTable = mysqli_query($conn, "SELECT * FROM mahasiswa"); 
		kemudian menampilkan data dengan mysqli_fetch_assoc()
	-->
	<h2>READ</h2>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>Gambar</td>
			<td>Nama</td>
			<td>Nim</td>
			<td>Email</td>
		</tr>
		<?php while ($hasil = mysqli_fetch_assoc($seleksiTable)) : ?>
			<tr>
				<td>
					<img src="img/<?php echo $hasil["gambar"]; ?>" width="75">
				</td>
				<td><?php echo $hasil["nama"]; ?></td>
				<td><?php echo $hasil["nim"]; ?></td>
				<td><?php echo $hasil["email"]; ?></td>
			</tr>
		<?php endwhile; ?>	
	</table>

	<!-- 2.melakukan INSERT yaitu menambahkan data -->
	<form method="POST">
		<h2>CREATE / insert</h2>
		<label for="nama">Nama:</label>
		<input type="text" name="nama" id="nama">

		<label for="nim">Nim:</label>
		<input type="text" name="nim" id="nim">	

		<label for="email">Email:</label>
		<input type="text" name="email" id="email">

		<label for="gambar">gambar:</label>
		<input type="text" name="gambar" id="gambar">
	
		<button name="kirim">Kirim</button>
	</form>
</body>
</html>

