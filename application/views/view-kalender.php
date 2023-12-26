<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <title>Hello, world!</title>
    <style>
        .main-st {
            margin-top: 100px;
        }
        h3 {
            margin: 80px 90px 40px;
        }
        .card{
            box-shadow: 0px 0px 5px 0px #888;
            border-radius: 20px;
            width: 15rem;
            background-color: azure;
        }
        ul{
            /* padding-left: 300px; */
            list-style-type: none;
        }
        .list-mood{
            margin: 20px auto;
            width: 60%;
            height: auto;
            padding: 20px;
            background-color: azure;
            border-radius: 10px;
        }
        /* .container {
            width: auto;
            height: auto;
            background-color: aqua;
        } */
    </style>
</head>

<body>
    <?php $user_data = $this->session->userdata('user_data');?>
    <?php date_default_timezone_set('Asia/Jakarta');?>
    <div class="main st"></div>
    <h3>Aktifitas</h3>
    <div class="container" align="center">
        <div class="card">
                <strong>Calendar</strong>
                <?= $kalender ?>
        </div>
    </div>
    <?php if (!empty($mood_entries)) : ?>
        <h3>Data Mood yang Sudah Diinput</h3>
        <ul>
            <?php foreach ($mood_entries as $entry) : ?>
                <li class="list-mood">
                    <h4><?php echo $entry['created_at']; ?></h4>
                    Mood: <?php echo $entry['mood']; ?><br>
                    Alasan: <?php echo $entry['alasan']; ?><br>
                    Deskripsi: <?php echo $entry['deskripsi']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Belum ada data mood yang diinput.</p>
    <?php endif; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>