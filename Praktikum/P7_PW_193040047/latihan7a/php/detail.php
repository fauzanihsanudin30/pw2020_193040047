<?php
require 'functions.php';

// ambil nrp dari URL
$id = $_GET['id'];

$row = query("SELECT * FROM buku WHERE id = $id") [0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title>Detail Buku</title>
  <style>
        img {
      width: 100px;
      height: 100px;
      border: 2px solid black;
    }
    </style>
</head>
<body>
  <h3>Detail Buku</h3>
  <ul>
  <td><img src="../img/<?php echo $row["cover"]; ?>" width="60"></td>
    <li> Judul :<?=$row['judul']; ?></li>
    <li> Kategori :<?=$row['kategori']; ?></li>
    <li> Author :<?=$row['author']; ?></li>
    <li> Penerbit :<?=$row['penerbit']; ?></li> 
    <li><a href="../index.php">Kembali ke daftar buku</a></li>
  </ul>
</body>
</html>
