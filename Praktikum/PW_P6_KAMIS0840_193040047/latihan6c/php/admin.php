<?php 
// menghubungkan dengan file php lainnya
require 'function.php';
// melakukan query
$result = query("SELECT * FROM elektronik")
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <h1 class="head">Elektronik</h1>
        <div class="kotak">
        <div class="">
            <a href="tambah.php"><button class="add">Tambah Data</button></a>
        </div>
        <table border="1" cellpadding="13" cellspacing="2">
            <tr>
                <th>Opsi</th>
                <th>Display Produk</th>
                <th>Jenis Elektronik</th>
                <th>Merek</th>
                <th>Tipe</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($result as $i) : ?>
             <tr>
                <td>
                    <div class="">
                        <a href="hapus.php?id=<?= $i["id"] ?>" onclick="return confirm('Hapus Data??')"><button class="delete">Hapus</button></a>
                        <a href="ubah.php?id=<?= $i["id"] ?>"><button class="change">Ubah</button></a>
                    </div>
                </td>
                <td><img width="100px" src="../assets/img/<?= $i["photo"]; ?>"></td>
                <td><?= $i["jenis"]; ?></td>
                <td><?= $i["merek"]; ?></td>
                <td><?= $i["tipe"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>	
    </body>
</html>