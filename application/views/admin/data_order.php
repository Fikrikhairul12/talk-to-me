<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 100px;
        }
        .main-st{
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="main-st"></div>
    <center>
        <h2>Data Order</h2>
        <table border="1" style="width:80%;">
            <tr>
                <th>ID ORDER</th>
                <th>ID USER</th>
                <th>ID PSIKOLOG</th>
                <th>TANGGAL</th>
                <th>WAKTU</th>
                <th>TEMPAT</th>
            </tr>
            <?php
            foreach ($order as $u) {
            ?>
            <tr>
                <td style="text-align:center;"><?= $u->id_order?></td>
                <td style="text-align:center;"><?= $u->id_user?></td>
                <td style="text-align:center;"><?= $u->id_psikolog?></td>
                <td><?= $u->tanggal?></td>
                <td><?= $u->waktu?></td>
                <td><?= $u->tempat?></td>
                <!-- <td><img src="<?= base_url('image/').$u->picture?>" alt="foto profil"></td> -->
            </tr>
            <?php }?>
        </table>
    </center>
</body>
</html>