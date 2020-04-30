<?php
	require 'function.php';

	if (isset($_POST["submit"])) 
	{
		if (tambah($_POST) > 0) {
			echo 	"<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
		}
		else {
			echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
		}

	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3 style="margin-left : 40px;">Formulir Tambah Data</h3>
	<form action="" method="post">
		<ul style="list-style-type : none;">
			<li>
				<label for="photo">Gambar :</label><br>
				<input type="text" name="photo" id ="photo" required><br><br>
			</li>
			<li>
				<label for="type">Tipe :</label><br>
				<input tipe="text" name="tipe" id ="tipe" required><br><br>
			</li>
			<li>
				<label for="jeniS">Jenis :</label><br>
				<select name="jenis" id ="jenis" required><br><br>
					<option value="">-Jenis Elektronik-</option>
					<option value="Handphone">Handphone</option>
					<option value="Laptop">Laptop</option>
					<option value="Tablet">Tablet</option>
				</select>	
			</li><br>
			<li>
				<label for="jeniS">Merek :</label><br>
				<select name="merek" id ="merek" required><br><br>
					<option value="">-Merek-</option>
					<option value="Asus">Asus</option>
					<option value="Apple">Apple</option>
					<option value="Nokia">Nokia</option>
					<option value="Samsung">Samsung</option>
				</select>	
			</li><br>
			<li>
				<label for="harga">Harga :</label><br>
				<input type="harga" name="harga" id ="harga" required><br><br>
			</li>
			<br>
			<button type="submit" name="submit">Tambah Data!</button>
			<button type="submit">
				<a href="../index.php" style="text decoration: none; color : black;">Back</a>
			</button>
		</ul>
	</form>
</body>
</html>
