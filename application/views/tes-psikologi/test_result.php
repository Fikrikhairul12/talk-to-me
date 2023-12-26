<!-- application/views/test_result.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tes Psikologi Kelelahan</title>
    <style>
        .main-st {
            margin-top: 100px;
        }
        h3 {
            margin: 80px 90px 40px;
        }
        .result{
            width: 60%;
            height: auto;
            margin: auto;
            padding: 20px;
            background-color: azure;
            border-radius: 10px;
        }
        .result p{
            font-weight: bold;
            font-size: 16px;
        }

        .back-button a{
            display: block;
            text-decoration: none;
            color: black;
            width: 50px;
            margin: 20px auto;
            padding: 5px 10px 5px 10px;
            text-align: center;
            border-radius: 10px;
            background-color: aquamarine;
            box-shadow: 0px 0px 5px 0px #888;
        }
        .back-button a:hover{
            background-color: aqua;
        }
    </style>
</head>
<body>
    <div class="main-st">
        <h3>Hasil Tes Psikologi</h3>
        <div class="result">
            <p>Total Skor: <?php echo $total_score; ?></p>
            <p style="font-weight:bold;">Diagnosa: <?php echo $diagnosis; ?></p>
        </div>
        <div class="back-button">
            <a class="back-button" href="<?= base_url(). 'beranda/tes'?>">Keluar</a>
        </div>
    </div>
</body>
</html>
