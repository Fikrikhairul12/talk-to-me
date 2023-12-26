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
        <h3>Tes Psikologi Menyendiri</h3>
        <div class="tes-k">
            <?php echo validation_errors(); ?>
        
            <?php echo form_open('test/process_menyendiri'); ?>
                <p>Pertanyaan 1: Bagaimana Anda menilai tingkat kebahagiaan Anda dalam dua minggu terakhir?</p>
                <input type="radio" name="question1" value="A">A. Cukup bahagia<br>
                <input type="radio" name="question1" value="B">B. Netral<br>
                <input type="radio" name="question1" value="C">C. Kurang bahagia<br>
        
                <p>Pertanyaan 2: Seberapa sering Anda merasa puas dengan pencapaian dan kemajuan Anda dalam hidup?</p>
                <input type="radio" name="question2" value="A">A. Sering<br>
                <input type="radio" name="question2" value="B">B. Kadang-kadang<br>
                <input type="radio" name="question2" value="C">C. Jarang<br>
        
                <p>Pertanyaan 3: Bagaimana Anda mengatasi stres atau tekanan dalam kehidupan sehari-hari?</p>
                <input type="radio" name="question3" value="A">A. Cukup baik, tetapi terkadang kesulitan<br>
                <input type="radio" name="question3" value="B">B. Kurang efektif, sering merasa tertekan<br>
                <input type="radio" name="question3" value="C">C. Saya kesulitan mengatasi stres<br>
        
                <br>
                <button type="submit">Proses Tes</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
</html>
