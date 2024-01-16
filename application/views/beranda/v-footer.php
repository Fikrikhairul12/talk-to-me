<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .footer{
            
            clear: both;
            border: 1px solid #dedede;
            border-radius: 10px;
            padding: 15px;
            margin: 10px auto;
            background: #fff5e0;
        }
    </style>
</head>
<body>
    <div class="footer">
        <center><div id="realtime-clock"></div></center>
        
        <script>
            function updateClock() {
                var now = new Date();
                var day = now.toLocaleDateString('en-US', { weekday: 'short' });
                var date = now.getDate();
                var month = now.toLocaleDateString('en-US', { month: 'short' });
                var year = now.getFullYear();
                var hours = now.getHours();
                var minutes = now.getMinutes();
                var seconds = now.getSeconds();

                var timeString = day + ', ' + date + ' ' + month + ' ' + year + ', ' + hours + ':' + minutes + ':' + seconds;

                document.getElementById('realtime-clock').innerHTML = timeString;
            }

            // Memperbarui waktu setiap detik
            setInterval(updateClock, 1000);

            // Panggil fungsi pertama kali untuk menampilkan waktu awal
            updateClock();
        </script>

    </div>
</body>
</html>