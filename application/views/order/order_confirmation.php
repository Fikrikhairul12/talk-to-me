<!-- application/views/order_confirmation.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        .main-st{
            margin-top: 100px;
        }
        .confirm{
            width: 60%;
            height: auto;
            margin: auto;
            padding: 20px;
            font-weight: bold;
            /* background-color: azure;
            border-radius: 10px; */
        }
        h2 {
            margin: 80px 90px 40px;
        }
    </style>
</head>
<body>
    <div class="main-st">
        <h2>Order Confirmation</h2>
        <div class="confirm">
            <p>Pesanan Anda telah berhasil diproses.</p>
            <!-- Tampilkan informasi pesanan lainnya sesuai kebutuhan -->
        </div>
        <div class="button">
        <div class="btn">
            <div class="btn1">
                <a href="">Online</a>
            </div>
            <div class="btn1">
                <a href="<?= base_url('psikolog/order_psikolog/3');?>">Offline</a>
            </div>
        </div>
    </div>
        <a href="<?php echo base_url('psikolog/riwayat_pesanan'); ?>">Lihat Riwayat Pesanan</a>
    </div>
    <!-- dengan ID <?php echo $order_id; ?> -->
</body>
</html>
