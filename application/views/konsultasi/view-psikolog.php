<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk To Me</title>
    <style>
        *{
            box-sizing: border-box;
        }

        .main-st{
            width: 100%;
            height: 100%;
            margin-top: 100px;
            font-family: 'Times New Roman', Times, serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container{
            width: 90%;
            display: flex;
            justify-content: space-evenly;
        }

        .card{
            width: 200px;
            height: 200px;
            padding: 1.5rem;
            border: 1px solid black;
            border-radius: 15px;
            background-color: azure;
            position: relative;
            display: flex;
            align-items: flex-end;
            transition: .5s ease-in;
        }

        .card:hover{
            animation: kartu .8s ease forwards;
        }

        .card:before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 15px;
            z-index: 2;
            transition: .5s;
            opacity: 0;
        }

        .card:hover:before{
            opacity: 1;
        }

        @keyframes kartu{
            0%{
                width: 200px;
            }
            100%{
                width: 500px;
            }
        }

        .card .info{
            z-index: 3;
            position: relative;
            overflow: hidden;
            color: black;
        }

        .card .info img{
            float: left;
            width: 150px;
            height: 150px;
            position: relative;
        }

        .card .info .desk{
            height: 150px;
        }

        .card .info .desk p{
            letter-spacing: 1px;
            font-size: 15px;
            margin-top: 8px;
        }

        .card .info .desk a{
            margin: 0;
            color: black;
            text-decoration: none;
        }

        h3 {
            margin: 100px 90px 40px ;
        }
    </style>
</head>
<body>
    <h3>KONSULTASI</h3>
    <div class="main-st">
        <div class="container">
            <div class="card">
                <div class="info">
                    <img src="<?= base_url('image/Keandra_Arkantama.png')?>" alt="">
                    <div class="desk">
                        <a href="<?= base_url('order/psikolog1')?>"><h4>Keandra Arkantama</h4></a>
                        <p>Psikolog</p>
                        <p>A psychology enthusiast with preferences in Clinic Psychology</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <img src="<?= base_url('image/Dian.png')?>" alt="">
                    <div class="desk">
                        <a href="<?= base_url('order/psikolog2')?>"><h4>Dian Rahayu, M.Psi</h4></a>
                        <p>Psikolog</p>
                        <p>A Clinical Psychologist Candidate and Master Student in Professional</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <img src="<?= base_url('image/Rizki.png')?>" alt="">
                    <div class="desk">
                        <a href="<?= base_url('order/psikolog3')?>"><h4>Rizki Setiawan, Ph.D.</h4></a>
                        <p>Psikolog</p>
                        <p>A reliable psychologist with a wealth of knowledge about psychology</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>