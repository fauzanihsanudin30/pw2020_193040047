<?php
require 'function.php';

$id = $_GET['id'];
$i = query("SELECT * FROM elektronik WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
	if (ubah($_POST) > 0) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>";
	} else {
		echo "<script>
				alert('data gagal diubah!');
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
	<h3 style="margin-left : 40px;">Formulir Ubah Data</h3>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $i["id"]; ?>">
		<ul style="list-style-type : none;">
			<li>
				<label for="photo">Gambar :</label><br>
				<input type="text" name="photo" id="photo" value="<?= $i["photo"]; ?>" required><br><br>
			</li>
			<li>
				<label for="tipe">Type :</label><br>
				<input type="text" name="tipe" id="tipe" value="<?= $i["tipe"]; ?>" required><br><br>
			</li>
			<li>
				<label for="jenis">Jenis :</label><br>
				<select name="jenis" id="jenis" required><br><br>
					<option value="<?= $i["jenis"]; ?>"><?= $i["jenis"]; ?></option>
					<option value="Handphone">Handphone</option>
					<option value="Laptop">Laptop</option>
					<option value="Tablet">Tablet</option>
				</select>
			</li><br>
			<li>
				<label for="merek">Merek :</label><br>
				<select name="merek" id="merek" required><br><br>
					<option value="<?= $i["merek"]; ?>"><?= $i["merek"]; ?></option>
					<option value="Asus">Asus</option>
					<option value="Apple">Apple</option>
					<option value="Nokia">Nokia</option>
					<option value="Samsung">Samsung</option>
				</select>
			</li><br>
			<li>
				<label for="harga">Harga :</label><br>
				<input type="harga" name="harga" id="harga" required value="<?= $i["harga"]; ?>"><br><br>
			</li>
			<br>
			<button type="submit" name="ubah">Ubah Data!</button>
			<button type="">
				<a href="admin.php" style="text-decoration: none; color : black;">Back</a>
			</button>
		</ul>
	</form>
</body>

</html>