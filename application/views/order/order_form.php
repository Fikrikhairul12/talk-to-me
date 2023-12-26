<!-- application/views/order_form.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Psikolog</title>
    <style>
        .main-st{
            margin-top: 100px;
        }
        .order{
            width: 60%;
            height: auto;
            margin: auto;
            padding: 20px;
            background-color: azure;
            border-radius: 10px;
        }
        h2 {
            margin: 80px 90px 40px;
        }
    </style>
</head>
<body>
    <div class="main-st">
        <h2>Order Psikolog</h2>
        <div class="order">
            <p>Nama Psikolog: <?php echo $psikolog->nama; ?></p>
        
            <?php echo form_open('psikolog/process_order'); ?>
                <input type="hidden" name="id_psikolog" value="<?php echo $psikolog->id_psikolog; ?>">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" required><br>
        
                <label for="waktu">Waktu:</label>
                <input type="time" name="waktu" required><br>
        
                <label for="tempat">Tempat:</label>
                <input type="text" name="tempat" required><br><br>

                <button onclick="alert('Pesanan Anda telah berhasil diproses.')">Submit Order</button>
                <!-- <input type="submit" value="Submit Order"> -->
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
</html>
