<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk To Me</title>
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/stylecd.css"> -->
    <style type="text/css">
        body {
            background: #ffffff;
            font-family: 'Times New Roman', Times, serif;
        }
        

        .identity {
            width: 100%;
            height: 400px;
            /* background-color: #efefef; */
            background: url('<?= base_url("image/pkp1.jpg");?>') no-repeat;
            background-size: cover;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0px 0px 8px 0px #000;
        }

        .title {
            padding: 200px 150px;
        }

        .title img {
            width: 8%;
            float: left;
            margin: 0 30px 0 0;
        }

        h3 {
            margin: 80px 90px 40px;
        }

        .art {
            margin: auto;
        }

        .left {
            background-color: #B1E8F9;
            width: 10%;
            margin-left: 100px;
            text-align: center;
            float: left;
            border-radius: 5px;
            box-shadow: 0px 0px 3px 0px #888;
        }
        .mid-left {
            background-color: #B1E8F9;
            width: 10%;
            margin-left: 100px;
            text-align: center;
            float: left;
            border-radius: 5px;
            box-shadow: 0px 0px 3px 0px #888;
        }
        .mid {
            background-color: #B1E8F9;
            width: 10%;
            margin-left: 100px;
            text-align: center;
            float: left;
            border-radius: 5px;
            box-shadow: 0px 0px 3px 0px #888;
        }
        .mid-right {
            background-color: #B1E8F9;
            width: 10%;
            margin-left: 100px;
            text-align: center;
            float: left;
            border-radius: 5px;
            box-shadow: 0px 0px 3px 0px #888;
        }
        
        .right{
            background-color: #B1E8F9;
            width: 10%;
            margin-left: 100px;
            text-align: center;
            float: left;
            border-radius: 5px;
            box-shadow: 0px 0px 3px 0px #888;
        }
        
        .judul {
            margin: 5px auto;
        }
        
        .judul a{
            display: block;
        }

        .judul img {
            width: 75%;
        }

        .container {
            width: 65%;
            height: auto;
            margin: 20px auto;
            padding: 5px;
            border-radius: 20px;
            box-shadow: 0px 0px 5px 0px #888;
        }

        .contant {
            margin: 20px;
            text-align: justify;
        }

        .contant a {
            text-decoration: none;
            color: black;
        }

        .contant a:hover {
            text-decoration: underline;
            /* color: blue; */
        }

        .contant p {
            font-size: 18px;
        }

        .contant img {
            width: 10%;
            margin: 5px 10px ;
            float: right;
        }
        .main {
            margin-top: 240px;
            /* background-color: #BAD4DB; */
        }
    </style>
</head>

<body>
    <div class="identity">
        <div class="title">
            <!-- <img src="<?= base_url() ?>image/Vector.png"> -->
            <?php
            $user_data = $this->session->userdata('user_data');?>
            <h1>Hi, <?=$user_data['nama']?></h1>
        </div>        
    </div>
    <div>
        <h3>ARTIKEL</h3>
        <div class="art">
            <div class="left">
                <div class="judul">
                    <a href="#"><img src="<?= base_url() ?>image/talk(31).png" alt=""></a>
                    <p>Kualitas Tidur dan Kesehatan Mental</p>
                </div>
            </div>
            <div class="mid-left">
                <div class="judul">
                    <a href="#"><img src="<?= base_url() ?>image/artikelkeuangan.png" alt=""></a>
                    <p>Teknologi dan Mental Health</p>
                </div>
            </div>
            <div class="mid">
                <div class="judul">
                    <a href="#"><img src="<?= base_url() ?>image/talk(29).png" alt=""></a>
                    <p>Koneksi Olahraga dan Mental Health</p>
                </div>
            </div>
            <div class="mid-right">
                <div class="judul">
                    <a href="#"><img src="<?= base_url() ?>image/talk(30).png" alt=""></a>
                    <p>Mindfulness dan Meditasi</p>
                </div>
            </div>
            <div class="right">
                <div class="judul">
                    <a href="#"><img src="<?= base_url() ?>image/talk(32)-rb.png" alt=""></a>
                    <p>Manajemen Stres dalam Keseharian</p>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <h3>SUMBER PERAWATAN</h3>
        <!-- <div class="container" style="background-color: #E48B91;"> -->
        <div class="container" style="background-color: #A0D5F6;">
            <div class="contant">
                <img src="<?= base_url() ?>image/talk(1)-rb.png" alt="foto">
                <a href="<?= base_url(). 'beranda/konsul'?>">
                    <h2>Konsultasi</h2>
                </a>
                <p>Konsultasi berkualitas tinggi untuk membantu anda mencapai tujuan 
                    dengan dukungan profesional, dan pengetahuan yang mendalam</p>
            </div>
        </div>
        <div class="container" style="background-color: #B1E8F9;">
            <div class="contant">
                <img src="<?= base_url() ?>image/talk(14)-rb.png" alt="foto">
                <a href="<?= base_url(). 'beranda/artikel'?>">
                    <h2>Artikel Ahli</h2>
                </a>
                <p>Pengetahuan yang Terbukti dari Para Ahli yang Memberikan 
                    Pandangan yang Tepat dan Solusi yang Memadai.</p>
            </div>
        </div>
        <div class="container" style="background-color: #A0D5F6;">
            <div class="contant">
                <img src="<?= base_url() ?>image/talk(22)-rb.png" alt="foto">
                <a href="<?= base_url(). 'beranda/terpadu'?>">
                    <h2>Latihan Terpadu</h2>
                </a>
                <p>Mencapai Kebugaran Total dengan Rencana Latihan Terpadu 
                    yang Dirancang Khusus untuk Meningkatkan Kesehatan Tubuh dan Pikiran.</p>
            </div>
        </div>
        <div class="container" style="background-color: #B1E8F9;">
            <div class="contant">
                <img src="<?= base_url() ?>image/talk(7)-rb.png" alt="foto">
                <a href="<?= base_url(). 'beranda/tes'?>">
                    <h2>Tes Psikologi</h2>
                </a>
                <p>Tes Psikologi yang Dirancang untuk Memberikan Perubahan 
                    Positif dalam Kehidupan Anda, Mengidentifikasi Kekuatan dan Peluang Anda.</p>
            </div>
        </div>
    </div>
</body>

</html>