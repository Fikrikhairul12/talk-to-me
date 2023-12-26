<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk To Me</title>
    <link href="css/bootstrap.css" rel="stylesheet">
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
        <h3>ARTIKEL AHLI</h3>
        <div class="container" style="background-color: pink;">
            <div class="contant">
                <img src="<?= base_url() ?>image/artikelkeluarga-rb.png" alt="">
                <a href="<?= base_url(). 'artikel/keluarga' ?>"><!-- target= "_blank" -->
                    <h2>Artikel Keluarga</h2>
                </a>
                <p>10 Artikel | 64 Suka</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div> 
        <div class="container" style="background-color: red;">
            <div class="contant">
                <img src="<?= base_url() ?>image/artikelkesehatan-rb.png" alt="">
                <a href="<?= base_url(). 'artikel/kesehatan' ?>">
                    <h2>Artikel Kesehatan</h2>
                </a>
                <p>10 Artikel | 47 Suka</p>
                <p>43% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: blue;">
            <div class="contant">
                <img src="<?= base_url() ?>image/artikelkeuangan.png" alt="">
                <a href="<?= base_url(). 'artikel/keuangan' ?>">
                    <h2>Artikel Keuangan</h2>
                </a>
                <p>10 Artikel | 15 Suka</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: brown;">
            <div class="contant">
                <img src="<?= base_url() ?>image/talk(14)-rb.png" alt="">
                <a href="<?= base_url(). 'artikel/pekerjaan' ?>">
                    <h2>Artikel Pekerjaan</h2>
                </a>
                <p> 10 Artikel | 225 Suka</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: grey;">
            <div class="contant">
                <img src="<?= base_url() ?>image/artikelpendidikan-rb.png" alt="">
                <a href="<?= base_url(). 'artikel/pendidikan' ?>">
                    <h2>Artikel Pendidikan</h2>
                </a>
                <p>8 Artikel | 40 Suka</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
    </div>
</body>
</html>