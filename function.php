<?php  
	echo "1.coratCoret/1.CRUD/index.php";
	echo "<br>";
	echo "<br>";

	// 1.CREATE, pertama untuk menampilkan data yang berada dari table yang berada didalam sebuah database kita akan menampilkan datanya.
	
	// koneksi dengan database
	$conn = mysqli_connect("localhost", "root", "", "belajarquery");
	
	// 1.READ/membaca, pertama untuk menampilkan data yang berada dari table yang berada didalam sebuah database kita akan menampilkan datanya.
	// menseleksi table
	$seleksiTable = mysqli_query($conn, "SELECT * FROM mahasiswa");

	// fetch/comot data dari table menggunakan mysqli_fetch_assoc().
	
	// 2.melakukan INSERT yaitu menambahkan data.
	if( isset($_POST['kirim']) ){
		mysqli_query($conn, "INSERT INTO mahasiswa set
			nama = '$_POST[nama]',
			nim = '$_POST[nim]',
			email = '$_POST[email]',
			gambar = '$_POST[gambar]'
		");
		echo "
			<script>
				alert('data berhasil ditambah/insert');
			</script>
		";
	}

?>