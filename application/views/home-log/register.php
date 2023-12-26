<!-- application/views/register.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        /* body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #dedede;
        } */

        .login-container {
            background-color: #fff;
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px #888;
        }

        h2 {
            text-align: center;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 93%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Registrasi</h2>
        <?php echo validation_errors(); ?>

        <form method="post" action="<?php echo base_url('auth/do_register'); ?>">
            <div class="input-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="input-group">
                <label for="no_telepon">Nomor Telepon</label>
                <input type="text" name="no_telepon" id="no_telepon" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Konfirmasi Password</label>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>
            <div class="input-group">
                <!-- <label for="confirm_password">Konfirmasi Password</label> -->
                <input type="hidden" name="picture" id="picture" value="account.png">
            </div>
            <button type="submit" class="btn">Register</button>
            <!-- <table>
                <tr>
                    <td>
                        <label for="nama">Nama:</label><br>
                        <input type="text" name="nama" size="30" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="no_telepon">Nomor Telepon:</label><br>
                        <input type="text" name="no_telepon" size="30" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:</label><br>
                        <input type="email" name="email" size="30" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label><br>
                        <input type="password" name="password" size="30" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="confirm_password">Konfirmasi Password:</label><br>
                        <input type="password" name="confirm_password" size="30" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Register</button>
                    </td>
                </tr>
            </table> -->
        </form>
    </div>
</body>

</html>