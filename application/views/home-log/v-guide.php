<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main-st {
            width: 100%;
            margin-top: 100px;
        }
        h3 {
            margin: 80px 90px 40px;
        }
        .guide{
            width: 90%;
            height: auto;
            margin: auto;
            padding: 20px;
            /* background-color: aqua; */
        }
        .guide-st{
            width: 40%;
            height: 100px;
            display: inline-flex;
            margin: 20px;
            border-radius: 10px;
            background-color: aqua;
        }
        .guide-st img{
            float: left;
            width: 95px;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="main-st">
        <h3>HOW TO USE</h3>
        <div class="guide">
            <div class="guide-st">
                <a href="https://youtu.be/nOahCkFEKaQ" target="_blank"><img src="<?= base_url(). 'image/calender.png'?>" ></a>
                <p>Guide Aktifitas</p>
            </div>
            <div class="guide-st">
                <a href="https://youtu.be/wQUS5xi-clY" target="_blank"><img src="<?= base_url(). 'image/tes-psikologi.png'?>" ></a>
                <p>Guide Tes Psikologi</p>
            </div>
            <div class="guide-st">
                <a href="https://youtu.be/QuIXKiFzamU" target="_blank"><img src="<?= base_url(). 'image/mood.png'?>" ></a>
                <p>Guide Mood</p>
            </div>
            <div class="guide-st">
                <a href="https://youtu.be/gDL6Ns5q6Xc" target="_blank"><img src="<?= base_url(). 'image/order.png'?>" ></a>
                <p>Guide Order</p>
            </div>
            <div class="guide-st">
                <a href="https://youtu.be/Yu9HVyyLoSI" target="_blank"><img src="<?= base_url(). 'image/artikel-ahli.png'?>" ></a>
                <p>Guide Artikel Ahli</p>
            </div>
        </div>
    </div>
</body>
</html>