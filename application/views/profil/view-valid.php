<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main-st {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="main-st"></div>
<?php
    $user_data = $this->session->userdata('user_data');?>
    <div class="main-st"></div>
    <form method="post" action="<?php echo base_url('auth/do_valid'); ?>">
        <h4>Konfirmasi Profil</h4>
        <?php if (isset($error_message)) { ?>
            <p style="color: red;">
                <?php echo $error_message; ?>
            </p>
        <?php } ?>
        <!-- <label for="email">Email:</label> -->
        <input type="hidden" name="email" value="<?= $user_data['email'];?>"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>