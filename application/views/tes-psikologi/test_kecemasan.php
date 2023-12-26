<!-- application/views/test_form.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Psikologi Kelelahan</title>
    <style>
        .main-st {
            margin-top: 100px;
        }
        h3 {
            margin: 80px 90px 40px;
        }
        .tes-k{
            width: 80%;
            height: auto;
            padding: 20px;
            margin: auto;
            background-color: azure;
            border-radius: 10px;
        }
        .tes-k p{
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="main-st">
        <h3>Tes Psikologi Kecemasan</h3>
        <div class="tes-k">
            <?php echo validation_errors(); ?>
        
            <?php echo form_open('test/process_kecemasan'); ?>
                <p>Pertanyaan 1: Seberapa sering Anda merasa cemas atau gelisah tanpa alasan yang jelas?</p>
                <input type="radio" name="question1" value="A">A. Tidak pernah<br>
                <input type="radio" name="question1" value="B">B. Kadang-kadang<br>
                <input type="radio" name="question1" value="C">C. Selalu<br>
        
                <p>Pertanyaan 2: Bagaimana Anda merespon tuntutan kerja atau tanggung jawab yang tinggi?</p>
                <input type="radio" name="question2" value="A">A. Dengan baik dan efektif<br>
                <input type="radio" name="question2" value="B">B. Kadang-kadang merasa tertekan<br>
                <input type="radio" name="question2" value="C">C. Selalu merasa terlalu berat<br>
        
                <p>Pertanyaan 3: Bagaimana Anda merespon evaluasi atau kritik terhadap pekerjaan atau tindakan Anda?</p>
                <input type="radio" name="question3" value="A">A. Mengatasi dengan baik<br>
                <input type="radio" name="question3" value="B">B. Kadang-kadang merasa cemas<br>
                <input type="radio" name="question3" value="C">C. Selalu sulit menerima kritik<br>
        
                <br>
                <button type="submit">Proses Tes</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
</html>
