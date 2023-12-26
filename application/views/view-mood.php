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
        select{
            background-color: azure;
            border-radius: 5px;
        }
        textarea{
            width: 300px;
            height: 100px;
            padding: 10px;
            resize: none;
            border-radius: 10px;
            background-color: azure;
        }
        .mood{
            width: 60%;
            height: auto;
            padding: 20px;
            margin: auto;
            border-radius: 10px;
            background-color: azure;
        }
    </style>
</head>
<body>
    <div class="main-st"></div>
    <h3>Mood</h3>
    
    <?php
    $user_data = $this->session->userdata('user_data');
    ?>
    <div class="mood">
        <?php echo form_open('mood/submit_mood'); ?>
            <label for="mood">Apa yang kamu rasakan?</label><br>
            <input type="radio" name="mood" value="Sangat Baik">😆 Sangat Baik <input type="radio" name="mood" value="Tidak Buruk">🙂 Tidak Buruk<br> <input type="radio" name="mood" value="Biasa">😐 Biasa <input type="radio" name="mood" value="Sedih">😢 Sedih<br> <input type="radio" name="mood" value="Badmood">😠 Bad Mood <br><br>
    
            <label for="alasan">Apa yang membuat mu merasa seperti itu?</label><br>
            <select name="alasan" required>
                <option value="keluarga">Keluarga</option>
                <option value="pendidikan">Pendidikan</option>
                <option value="teman">Teman</option>
                <option value="diri sendiri">Diri Sendiri</option>
                <option value="cuaca">Cuaca</option>
                <option value="keuangan">Keuangan</option>
                <option value="kesehatan">Kesehatan</option> 
                <option value="pacar">Pacar</option> 
            </select><br><br>
    
            <label for="deskripsi">Deskripsi Alasan:</label><br>
            <textarea type='textarea' name="deskripsi"></textarea><br>
    
            <button onclick="alert('Mood anda berhasil di input')" type="submit">Submit Mood</button>
        </form>
    </div>
</body>
</html>
