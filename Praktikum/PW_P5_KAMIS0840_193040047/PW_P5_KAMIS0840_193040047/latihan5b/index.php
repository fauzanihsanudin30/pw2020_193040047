<?php 
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query
$result = query("SELECT * FROM elektronik")
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h3>Elektronik</h3>
        <table border="1">
            <tr>
                <th>Display Produk</th>
                <th>Jenis Elektronik</th>
                <th>Merek</th>
                <th>Type</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($result as $i) { ?>
             <tr>
                <td><img width="100px" src="assets/img/<?= $i['photo']; ?>"></td>
                <td><?= $i["jenis"]; ?></td>
                <td><?= $i["merek"]; ?></td>
                <td><?= $i["type"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>	
		<h5 align="center"></h5>
    </body>
</html>
