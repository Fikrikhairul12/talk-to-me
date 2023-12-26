<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk To Me</title>
    <link rel="website icon" href="<?=base_url()?>image/logo-ttm(2).png" type="png">
    <style type="text/css">
        body{
            font-family: 'Times New Roman', Times, serif;
        }
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #C7DBCF;
            overflow: hidden;
            position: fixed;
            width: 100%;
            top: 0;
            box-shadow: 0px 0px 5px 0px #888;
        }

        li.nav-item {
            float: left;
        }

        /*sementara*/
        li.nav-item-logout {
            float: right;
            padding: 14px 16px;
            margin-top: 10px;
        }
        /*sementara*/

        li.nav-item img{
            width: 100px;
            margin-top: 10px;
        }

        li.nav-item a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            margin-top: 10px;
        }

        li.nav-item a:hover {
            /* background-color: #5F9EA0; */
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <head>
        <nav>
            <ul class="navbar">
                <li class="nav-item"><img src="<?=base_url()?>image/logo-ttm(2).png"></li>
                <li class="nav-item"><a href="<?=base_url(). 'admin/admin'?>">Beranda</a></li>
                <li class="nav-item"><a href="<?=base_url(). 'admin/data_user'?>">Data User</a></li>
                <li class="nav-item"><a href="<?=base_url(). 'admin/data_konsul'?>">Data Konsultasi</a></li>
                <li class="nav-item"><a href="<?=base_url(). 'admin/order'?>">Data Order</a></li>
                <!-- <li class="nav-item"><a href="#">Statistik</a></li> -->
                <li class="nav-item"><a href="<?=base_url(). 'admin/profil'?>">Profil</a></li>
                <!-- <li class="nav-item-logout"><a href="<?=base_url(). 'Auth/logout'?>">Logout</a></li> -->
            </ul>
        </nav>
    </head>
</body>
</html>