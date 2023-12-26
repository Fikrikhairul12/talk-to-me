<!-- application/views/edit_profile.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        .main-st {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="main-st"></div>
    <h2>Edit Profile</h2>
    <?php echo validation_errors(); ?>

    <!-- <?php echo form_open('do_edit_profile'); ?> -->
    <form method="post" action="<?php echo base_url('profil/do_edit_profile'); ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $user->nama; ?>" required><br>

        <label for="no_telepon">Nomor Telepon:</label>
        <input type="text" name="no_telepon" value="<?php echo $user->no_telepon; ?>" required><br>

        <!-- <label for="picture">Ubah Foto Profil:</label>
        <input type="file" name="picture" value="<?php echo $user->picture; ?>"><br> -->

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
