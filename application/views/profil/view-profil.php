<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
        }
        .main-st {
            font-size: 18px;
            margin-top: 100px;
        }
        /* h3 {
            margin: 80px 90px 40px;
        } */
        /* .main-st img{

        } */
        .figure{
            width: 200px;
            height: auto;
            margin: auto;
            /* background-color: aqua; */
        }
        .figure img{
            border-radius: 50%;
            box-shadow: 0px 0px 5px 0px #888;
            width: 200px;
            margin: auto;
        }
        .figure h4{
            text-align: center;
        }
        .account{
            width: 700px;
            height: auto;
            margin: auto;
            padding: 20px;
            border-radius: 20px;
            background-color: azure;
            /* box-shadow: 0px 0px 5px 0px #888; */
        }
        .figure-p{
            width: 70%;
            height: auto;
            margin: auto;
            /* background-color: aqua; */
        }
        .figure-p a{
            display: block;
            padding: 10px 0 10px 0;
            text-decoration: none;
            color: black;
        }
        .figure-p a:hover{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="main-st">
        <div class="account">
            <h3>Profil</h3>
            <?php
            $user_data = $this->session->userdata('user_data');
            if ($user_data) {?>
                <div class="figure">
                    <img src="<?= base_url('image/') .$user_data['picture']; ?>">
                    <h4><?= $user_data['nama'];?></h4>
                </div>
                <!-- <figure><?= $user_data['nama']?></figure> -->
                <!-- echo '<p>ID User: ' . $user_data['id_user'] . '</p>'; -->
                <!-- // echo '<p>Nama: ' . $user_data['nama'] . '</p>';
                // echo '<img src='. $user_data['picture'].'>'; -->
                <div class="figure-p">
                <p>Email: <?= $user_data['email'];?></p><hr>
                <p>Nomor Telepon: <?= $user_data['no_telepon'];?></p><hr>
            <?php } ?>
                <a href="<?php echo base_url('psikolog/riwayat_pesanan'); ?>">History </a><hr>
                <a href="<?php echo base_url().'profil/edit_profile'; ?>">Ubah Data</a><hr>
                <a href="<?php echo base_url().'profil/edit_foto'; ?>">Ubah Foto Profil</a><hr>
                <a href="<?php echo base_url('auth/logout'); ?>">Logout</a>
                </div>
        </div>
    </div>
</body>
</html>