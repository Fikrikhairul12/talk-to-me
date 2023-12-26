<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk To Me</title>
    <style>
        .container {
            width: 65%;
            height: auto;
            margin: 20px auto;
            padding: 5px;
            border-radius: 20px;
            box-shadow: 0px 0px 5px 0px #888;
        }

        h3 {
            margin: 80px 90px 40px;
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
            float: left;
        }

        .main-st {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="main-st" >
        <h3>KONSULTASI</h3>
        <div class="container" style="background-color: pink;">
            <div class="contant">
                <img src="<?= base_url() ?>image/talk(24)-rb.png" alt="">
                <a href="<?= base_url(). 'konsul/konsul_psikolog'?>">
                    <h2>Psikolog</h2>
                </a>
                <p>5 Psikolog</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: green;">
            <div class="contant">
                <img src="<?= base_url() ?>image/konselorpsi-rb.png" alt="">
                <a href="<?= base_url(). 'konsul/konsul_konselor'?>">
                    <h2>Konselor</h2>
                </a>
                <p>8 Konselor</p>
                <p>100% merasa ini membantu </p>
            </div>
        </div>
        <div class="container" style="background-color: red;">
            <div class="contant">
                <img src="<?= base_url() ?>image/pelatihkarirpsi-rb.png" alt="">
                <a href="<?= base_url(). 'konsul/konsul_karir'?>">
                    <h2>Pelatih Karir</h2>
                </a>
                <p>20 Pelatih Karir</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: aqua;">
            <div class="contant">
                <img src="<?= base_url() ?>image/pelatihfamily-rb.png" alt="">
                <a href="<?= base_url(). 'konsul/konsul_family'?>">
                    <h2>Pelatih Family</h2>
                </a>
                <p>21 Pelatih Family</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: yellow;">
            <div class="contant">
                <img src="<?= base_url() ?>image/pelatihdewasa-rb.png" alt="">
                <a href="<?= base_url(). 'konsul/konsul_dewasa'?>">
                    <h2>Pelatih Dewasa</h2>
                </a>
                <p>32 Pelatih Cinta</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
    </div>  
</body>
</html>