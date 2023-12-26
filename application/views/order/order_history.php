<!-- application/views/order_history.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
    <style>
        .main-st{
            margin-top: 100px;
        }
        .hstry-order{
            margin: 20px auto;
            width: 60%;
            height: auto;
            padding: 20px;
            background-color: azure;
        }
        h3 {
            margin: 80px 90px 40px;
        }
    </style>
</head>
<body>
    <div class="main-st">
        <h3>Riwayat Pesanan</h3>
        
        <?php foreach ($order as $ord): ?>
        <div class="hstry-order">
            <p>ID Pesanan: <?php echo $ord['id_order']; ?></p>
            <p>ID Psikolog: <?php echo $ord['id_psikolog']; ?></p>
            <p>Tanggal: <?php echo $ord['tanggal']; ?></p>
            <p>Waktu: <?php echo $ord['waktu']; ?></p>
            <p>Tempat: <?php echo $ord['tempat']; ?></p>
            <!-- Tampilkan informasi pesanan lainnya sesuai kebutuhan -->
            <hr>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
