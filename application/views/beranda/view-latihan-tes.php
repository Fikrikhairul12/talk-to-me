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
        <h3>TES PSIKOLOGI</h3>
        <div class="container" style="background-color: grey;">
            <div class="contant">
                <img src="<?= base_url() ?>image/teskelelahan-rb.png" alt="">
                <a href="<?= base_url('Test/kelelahan')?>">
                    <h2>Tes Kelelahan</h2>
                </a>
                <p>3 Pertanyaan | 2 Menit</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: navy;">
            <div class="contant">
                <img src="<?= base_url() ?>image/tesmenyendiri-rb.png" alt="">
                <a href="<?= base_url('Test/menyendiri')?>">
                    <h2>Tes Menyendiri</h2>
                </a>
                <p>3 Pertanyaan | 3 Menit</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: brown;">
            <div class="contant">
                <img src="<?= base_url() ?>image/tesstress-rb.png" alt="">
                <a href="<?= base_url('Test/stres')?>">
                    <h2>Tes Stress</h2>
                </a>
                <p>3 Pertanyaan | 2 Menit</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
       <div class="container" style="background-color: blue;">
            <div class="contant">
                <img src="<?= base_url() ?>image/teskecemasan-rb.png" alt="">
                <a href="<?= base_url('Test/kecemasan')?>">
                    <h2> Tes Kecemasan</h2>
                </a>
                <p>3 Pertanyaan | 3 Menit</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
        <div class="container" style="background-color: yellow;">
            <div class="contant">
                <img src="<?= base_url() ?>image/teskemarahan-rb.png" alt="">
                <a href="<?= base_url('Test/kemarahan')?>">
                    <h2> Tes Kemarahan</h2>
                </a>
                <p>3 Pertanyaan | 4 Menit</p>
                <p>100% merasa ini membantu</p>
            </div>
        </div>
    </div>
</body>
</html>