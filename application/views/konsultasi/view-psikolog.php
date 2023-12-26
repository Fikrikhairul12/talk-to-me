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
            float: left;
            width: 16%;
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
        <div class="list-profil">
            <img src="<?= base_url('image/Keandra_Arkantama.png')?>" alt="">
            <a href="<?= base_url('order/psikolog1')?>"><h4>Keandra Arkantama</h4></a>
            <p>Psikolog</p>
            <p>A psychology enthusiast with preferences in Clinic Psychology</p>
            <hr>
        </div>
        <div class="list-profil">
            <img src="<?= base_url('image/Dian.png')?>" alt="">
            <a href="<?= base_url('order/psikolog2')?>"><h4>Dian Rahayu, M.Psi</h4></a>
            <p>Psikolog</p>
            <p>A Clinical Psychologist Candidate and Master Student in Professional</p>
            <hr>
        </div>
        <div class="list-profil">
            <img src="<?= base_url('image/Rizki.png')?>" alt="">
            <a href="<?= base_url('order/psikolog3')?>"><h4>Rizki Setiawan, Ph.D.</h4></a>
            <p>Psikolog</p>
            <p>A reliable psychologist with a wealth of knowledge about psychology</p>
            <hr>
        </div>
    </div>
</body>
</html>
<!-- <div class="list-profil">
    <img src="" alt="">
    <a href=""><h4>Keandra Arkanta</h4></a>
    <p>Psikologi</p>
    <p>A Clinical Psychologist Candidate and Master Student in Professional</p>
    <hr>
</div>
<div class="list-profil">
    <img src="" alt="">
    <a href=""><h4>Rafa Radhyaksa</h4></a>
    <p>Psikologi</p>
    <p>Hello, Rafa's here! I'm a psychology graduate</p>
    <hr>
</div>
<div class="list-profil">
    <img src="" alt="">
    <a href=""><h4>Areksa Mahendra</h4></a>
    <p>Psikologi</p>
    <p>A psychology enthusiast with preferences in Clinic Psychology</p>
    <hr>
</div>
<div class="list-profil">
    <img src="" alt="">
    <a href=""><h4>Areksa Mahendra</h4></a>
    <p>Psikologi</p>
    <p>A psychology enthusiast with preferences in Clinic Psychology</p>
    <hr>
</div> -->