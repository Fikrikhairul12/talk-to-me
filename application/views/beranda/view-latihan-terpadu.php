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
            /* mix-blend-mode: ; */
        }

        .main-st {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="main-st" >
        
        <h3>LATIHAN TERPADU</h3>
        <div class="container" style="background-color: blue;">
            <div class="contant">
                <img src="<?= base_url() ?>image/termotivasi-rb.png" alt="">
                <a href="">
                    <h2>Cara Untuk Tetap Termotivasi</h2>
                </a>
                <p>4 Menit</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: green;">
            <div class="contant">
                <img src="<?= base_url() ?>image/melatihsyukur-rb.png" alt="">
                <a href="">
                    <h2>Melatih Bersyukur</h2>
                </a>
                <p>5 Menit</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: orange;">
            <div class="contant">
                <img src="<?= base_url() ?>image/melepaskhawatiran-rb.png" alt="">
                <a href="">
                    <h2>Melepas Kekhawatiran</h2>
                </a>
                <p>6 Menit</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: maroon;">
            <div class="contant">
                <img src="<?= base_url() ?>image/talk(22)-rb.png" alt="">
                <a href="">
                    <h2>Membangun Rasa Percaya Diri</h2>
                </a>
                <p>7 Menit</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: pink;">
            <div class="contant">
                <img src="<?= base_url() ?>image/bangunhub-rb.png" alt="">
                <a href="">
                    <h2>Membangun Hubungan</h2>
                </a>
                <p>5 Menit</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
    </div>   
</body>
</html>