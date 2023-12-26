<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk To Me</title>
    <style>
        .list-profil{
            width: 60%;
            height: auto;
            margin: 20px auto;
            padding: 20px;
            background-color: azure;
        }
        
        .list-profil img{
            margin: 20px 0 22px 0;
            float: left;
            width: 15%;
        }

        .list-profil a{
            text-decoration: none;
            color: 	#8A2BE2;
        }

        .list-profil a:hover{
            text-decoration: underline;
        }
        
        h3 {
            margin: 80px 90px 40px;
        }

        p{
            text-align: justify;
        }

        .profil{
            padding: 20px 0 20px 10px;
        }

        .main-st{
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="main-st">
        <h3>KONSULTASI</h3>
        <?php foreach($konselor as $p) {?>
        <div class="list-profil">
            <!-- <img src="<?= base_url('image/keandra.png')?>" alt=""> -->
            <img src="<?= base_url('image/'). $p->picture?>" alt="">
            <a href=""><h4><?= $p->nama?></h4></a>
            <p>Konselor</p>
            <p><?= $p->desc?></p>
            <hr>
        </div>
        <?php }?>
    </div>
</body>
</html>