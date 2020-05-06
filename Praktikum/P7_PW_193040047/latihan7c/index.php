<?php
//menghubungkan dengan file php lainya
require 'php/functions.php';
//melakukan query
$buku = query("SELECT * FROM buku");
// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 7c</title>
    <style>
        img {
      width: 100px;
      height: 100px;
      border: 2px solid black;
    }
    button {
      background:yellow;
      color:black;
      font-size: medium;
      
    }
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table border= "1" cellpadding="10" cellspacing="0">
    <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>
<br>
    <a href="php/login.php">
            <button>Masuk ke halaman admin</button>
        </a>
    <br>
  <br>
    <tr>
        <th>No.</th>
        <th>Cover</th>
        <th>Judul</th>
        <th>Aksi</th>
    </tr>
    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="7">
          <h1 style="color: red; font-style: italic;">Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($buku as $row) : ?>
      <tr>
   <td><?= $i++; ?></td>
   <td><img src="img/<?php echo $row["cover"]; ?>" width="60"></td>
   <td><?=$row['judul'];?></td>
   
   <td>
     <a href="php/detail.php?id=<?=$row['id']; ?>">lihat detail</a> 
   </td>
  </tr>
   <?php endforeach; ?>
    </table>
</body>
</html>