<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk To Me</title>
    <style>
        .home {
            margin-top: 50px;
        }
        .home-pos {
            width: 98%;
            height: 250px;
            margin: auto;
            padding-top: 280px;
            background: url('<?= base_url("image/utama.jpg");?>') no-repeat;
            background-size: cover;
            border-radius: 10px;
            box-shadow: 0px 0px 5px 0px #000;
        }
        .home-title {
            /* display: flex; */
            width: 60%;
            margin: auto;
            justify-content: center;
            /* padding-top: 280px; */
            text-align: center;
            box-shadow: 0px 0px 2px 0px #888;
            backdrop-filter: blur(15px);
        }

        .brand{
            width: 0;
            border-right: 0.1rem solid black;
            white-space: nowrap;
            margin: auto;
            overflow: hidden;
            animation: brand 2s steps(20,end) forwards ;
        }
        
        .home-title p {
            font-size: 18px;
        }
        
        @keyframes brand{
            0%{
                width: 0;
            }
            50%{
                width: 200px;
            }
            100%{
                width: 200px;
                border-right: none;
            }
        }
    </style>
</head>
<body>
    <div class="home">
        <div class="home-pos">
            <div class="home-title">
                <div class="brand">
                    <!-- <h1 class="brand">TALK TO ME</h1> -->
                    <h1>TALK TO ME</h1>
                </div>
                <p>Membina ketahanan mental: Jelajahi 'Talk to Me' 
                    — tempat berlindung Anda yang aman untuk percakapan 
                    terbuka, membimbing Anda menuju kesehatan mental yang 
                    berkelanjutan dan perkembangan emosional.</p>
            </div>
        </div>
    </div>
</body>
</html>