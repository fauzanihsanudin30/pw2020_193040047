<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil ditambahkan!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal ditambahkan!');
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
  <title> Tambah Data Buku</title>
</head>
<body>
  <h3><center> Form Tambah Data Buku </center> </h3>
  <form action="" method="POST">
  <ul>
  <li>
  <label>
    Judul :
     <input type="text" name="judul" autofocus required>
  </label>  
  </li>
  <li>
  <label>
    Kategori :
     <input type="text" name="kategori"required>
  </label>  
  </li>
  <li>
  <label>
    Author :
     <input type="text" name="author"required>
  </label>  
  </li>
  <li>
  <label>
    Penerbit :
     <input type="text" name="penerbit"required>
  </label>  
  </li>
  <li>
  <label>
    Cover
     <input type="text" name="cover"required>
  </label>  
  </li>
  <li>
    <button type="submit" name="tambah">Tambah Data </button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
  </ul>
  <br>
</body>
</html>