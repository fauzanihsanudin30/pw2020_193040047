 <?php 
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
// memilih database
mysqli_select_db($conn, "pw_193040047") or die ("Database salah!");
// query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM elektronik");
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h3>Elektronik</h3>
        <table border="1px">
            <tr>
                <th>Display Produk</th>
                <th>Jenis Elektronik</th>
                <th>Merek</th>
                <th>Type</th>
                <th>Harga</th>
            </tr>
            <?php while ($i = mysqli_fetch_assoc($result)) : ?>
             <tr>
                <td><img width="100px" src="assets/img/<?= $i['photo']; ?>"></td>
                <td><?= $i["jenis"]; ?></td>
                <td><?= $i["merek"]; ?></td>
                <td><?= $i["type"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>	
		<h5 align="center"></h5>
    </body>
</html>
