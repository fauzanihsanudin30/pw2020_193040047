<?php 
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query
$result = query("SELECT * FROM elektronik")
?>
<html>
    <head>
        <title>Elektronik</title>
    </head>
    <body>
        <div class="container">
        <?php foreach ($result as $i) :?>
            <p class="nama">
                 <a href="php/detail.php?id=<?= $i['id'] ?>">
                    <?= $i["type"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
        </div>
    </body>
</html>
