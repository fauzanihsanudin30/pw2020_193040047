<?php 
// menghubungkan dengan file php lainnya
require 'function.php';
// melakukan query
$result = query("SELECT * FROM elektronik")
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h3>Elektronik</h3>
        <table border="1" cellpadding="13" cellspacing="0">
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
                    <a href=""><button class="b1">Ubah</button></a>
                    <a href=""><button class="b2">Hapus</button></a>
                </td>
                <td><img width="100px" src="../assets/img/<?= $i['photo']; ?>"></td>
                <td><?= $i["jenis"]; ?></td>
                <td><?= $i["merek"]; ?></td>
                <td><?= $i["tipe"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>	
    </body>
</html>