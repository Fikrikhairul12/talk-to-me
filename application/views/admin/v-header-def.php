<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk To Me</title>
    <link rel="website icon" href="<?=base_url()?>image/logo-ttm(2).png" type="png">
    <style type="text/css">
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
                <li class="nav-item"><a href="<?=base_url(). 'admin/index'?>">Home</a></li>
                <li class="nav-item"><a href="<?=base_url(). 'admin/about'?>">About Us</a></li>
                <li class="nav-item"><a href="<?=base_url(). 'admin/faq'?>">FAQ</a></li>
                <!-- <li class="nav-item"><a href="#">How To Use</a></li> -->
                <!-- <li class="nav-item"><a href="<?=base_url(). 'Auth/register'?>">Register</a></li> -->
                <li class="nav-item"><a href="<?=base_url(). 'admin/login'?>">Login</a></li>
                <!-- <li class="nav-item"><a href="<?=base_url(). 'beranda/index'?>">Login</a></li> -->
            </ul>
        </nav>
    </head>
</body>
</html>