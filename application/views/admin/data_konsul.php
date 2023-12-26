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
        h2 {
            margin: 80px 90px 40px;
        }
    </style>
</head>
<body>
    <div class="main-st"></div>
    <h2>Data Konsultasi</h2>
    <center>
        <h3>Tipe Konsultasi</h3>
        <table border="1">
            <tr>
                <th>ID KONSULTASI</th>
                <th>TIPE KONSULTASI</th>
                <!-- <th>EMAIL</th>
                <th>NOMOR TELEPON</th>
                <th>GAMBAR</th> -->
            </tr>
            <?php
            foreach ($konsultasi as $k) {
            ?>
            <tr>
                <td style="text-align: center;"><?= $k->id_konsul?></td>
                <td><?= $k->tipe_konsul?></td>
                <!-- <td><?= $u->email?></td>
                <td><?= $u->no_telepon?></td>
                <td><img src="<?= base_url('image/').$u->picture?>" alt="foto profil"></td> -->
            </tr>
            <?php }?>
        </table>
    </center><br>
    <center>
        <h3>Data Psikolog</h3>
        <table border="1" style="width: 80%;">
            <tr>
                <th>ID PSIKOLOG</th>
                <th>ID KONSULTASI</th>
                <th>NAMA</th>
                <th>DESKRIPSI</th>
                <th>EDUKASI</th>
                <th>FOTO</th>
            </tr>
            <?php
            foreach ($psikolog as $p) {
            ?>
            <tr>
                <td style="text-align: center;"><?= $p->id_psikolog?></td>
                <td style="text-align: center;"><?= $p->id_konsul?></td>
                <td><?= $p->nama?></td>
                <td><?= $p->desc?></td>
                <td><?= $p->edukasi?></td>
                <td><img src="<?= base_url('image/').$p->picture?>" alt="foto profil"></td>
            </tr>
            <?php }?>
        </table>
    </center><br>
    <center>
        <h3>Data Konselor</h3>
        <table border="1" style="width: 80%;">
            <tr>
                <th>ID KONSELOR</th>
                <th>ID KONSULTASI</th>
                <th>NAMA</th>
                <th>DESKRIPSI</th>
                <th>EDUKASI</th>
                <th>FOTO</th>
            </tr>
            <?php
            foreach ($konselor as $p) {
            ?>
            <tr>
                <td style="text-align: center;"><?= $p->id_konselor?></td>
                <td style="text-align: center;"><?= $p->id_konsul?></td>
                <td><?= $p->nama?></td>
                <td><?= $p->desc?></td>
                <td><?= $p->edukasi?></td>
                <td><img src="<?= base_url('image/').$p->picture?>" alt="foto profil"></td>
            </tr>
            <?php }?>
        </table>
    </center><br>
    <center>
        <h3>Data Pelatih Karir</h3>
        <table border="1" style="width: 80%;">
            <tr>
                <th>ID PELATIH KARIR</th>
                <th>ID KONSULTASI</th>
                <th>NAMA</th>
                <th>DESKRIPSI</th>
                <th>EDUKASI</th>
                <th>FOTO</th>
            </tr>
            <?php
            foreach ($karir as $p) {
            ?>
            <tr>
                <td style="text-align: center;"><?= $p->id_pk?></td>
                <td style="text-align: center;"><?= $p->id_konsul?></td>
                <td><?= $p->nama?></td>
                <td><?= $p->desc?></td>
                <td><?= $p->edukasi?></td>
                <td><img src="<?= base_url('image/').$p->picture?>" alt="foto profil"></td>
            </tr>
            <?php }?>
        </table>
    </center><br>
    <center>
        <h3>Data Pelatih Family</h3>
        <table border="1" style="width: 80%;">
            <tr>
                <th>ID PELATIH FAMILY</th>
                <th>ID KONSULTASI</th>
                <th>NAMA</th>
                <th>DESKRIPSI</th>
                <th>EDUKASI</th>
                <th>FOTO</th>
            </tr>
            <?php
            foreach ($family as $p) {
            ?>
            <tr>
                <td style="text-align: center;"><?= $p->id_pf?></td>
                <td style="text-align: center;"><?= $p->id_konsul?></td>
                <td><?= $p->nama?></td>
                <td><?= $p->desc?></td>
                <td><?= $p->edukasi?></td>
                <td><img src="<?= base_url('image/').$p->picture?>" alt="foto profil"></td>
            </tr>
            <?php }?>
        </table>
    </center><br>
    <center>
        <h3>Data Pelatih Dewasa</h3>
        <table border="1" style="width: 80%;">
            <tr>
                <th>ID PELATIH DEWASA</th>
                <th>ID KONSULTASI</th>
                <th>NAMA</th>
                <th>DESKRIPSI</th>
                <th>EDUKASI</th>
                <th>FOTO</th>
            </tr>
            <?php
            foreach ($dewasa as $p) {
            ?>
            <tr>
                <td style="text-align: center;"><?= $p->id_pd?></td>
                <td style="text-align: center;"><?= $p->id_konsul?></td>
                <td><?= $p->nama?></td>
                <td><?= $p->desc?></td>
                <td><?= $p->edukasi?></td>
                <td><img src="<?= base_url('image/').$p->picture?>" alt="foto profil"></td>
            </tr>
            <?php }?>
        </table>
    </center><br>
</body>
</html>