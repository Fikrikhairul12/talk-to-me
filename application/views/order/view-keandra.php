<!-- application/views/dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .main-st {
            margin-top: 100px;
        }
        h3 {
            margin: 80px 90px 40px;
        }
        .data-psikolog{
            width: 80%;
            height: auto;
            margin: 20px auto;
            padding: 20px;
            background-color: azure;
        }
        .data-psikolog h3{
            margin: 40px 100px 60px 200px;
        }
        .data-psikolog img{
            border-radius: 50%;
            box-shadow: 0px 0px 5px 0px #888;
            width: 100px;
            margin-left: 50px;
            float: left;
        }
        .desc-educate{
            width: 75%;
            height: auto;
            margin: 20px auto;
        }
        .button{
            margin: auto;
            width: 40%;
            height: 300px;
        }
        .btn{
            margin: auto;
            height: 300px;
            width: 80%;
        }
        .btn1{
            width: 100px;
            height: auto;
            margin: 30px;
            padding-top: 0;
            text-align: center;
            float: left;
            background-color: #E6E6FA;
            border-radius: 10px;
            box-shadow: 0px 0px 2px 0px #888;
        }
        .btn1 a{
            display: block;
            padding: 10px 0 10px 0;
            text-decoration: none;
            color: black;
        }
        .btn1 a:hover{
            background-color: #FFF0F5;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="main-st"></div>
    <h3>KONSULTASI</h3>
    <?php
    $user_data = $this->session->userdata('user_data');
    ?>
    <div class="data-psikolog">
        <img src="<?= base_url('image/'.$data_psikolog->picture); ?>" alt="">
        <!-- <p>ID: <?php echo $data_psikolog->id_psikolog; ?></p> -->
        <h3><?php echo $data_psikolog->nama; ?></h3>
        <div class="desc-educate">
            <p><?= $data_psikolog->desc;?></p>
            <p><?php echo $data_psikolog->edukasi; ?></p>
        </div>
    </div>
    <div class="button">
        <div class="btn">
            <div class="btn1">
                <a href="">Online</a>
            </div>
            <div class="btn1">
                <a href="<?= base_url('psikolog/order_psikolog/1');?>">Offline</a>
            </div>
        </div>
    </div>
</body>
</html>