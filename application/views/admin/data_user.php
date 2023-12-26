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
        <h2>Data User</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>NOMOR TELEPON</th>
                <th>GAMBAR</th>
            </tr>
            <?php
            foreach ($user as $u) {
            ?>
            <tr>
                <td><?= $u->id_user?></td>
                <td><?= $u->nama?></td>
                <td><?= $u->email?></td>
                <td><?= $u->no_telepon?></td>
                <td><img src="<?= base_url('image/').$u->picture?>" alt="foto profil"></td>
            </tr>
            <?php }?>
        </table>
    </center>
</body>
</html>