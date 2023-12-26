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
        .edit{
            width: 50%;
            height: auto;
            margin-left: 100px;
            padding: 40px 0 30px 20px;
            background-color: azure;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="main-st"></div>
    <h2>Edit Profile</h2>
    <?php echo validation_errors(); ?>

    <!-- <?php echo form_open('do_edit_profile'); ?> -->
    <div class="edit">
        <form method="post" action="<?php echo base_url('profil/do_edit_foto'); ?>">
        <table>
            <tr>
                <td style="font-weight:bold;"><label for="picture">Ubah Foto Profil</label></td>
                <td>: <input type="file" name="picture" value="<?php echo $user->picture; ?>"><br></td>
            </tr>
            <tr>
                <td><button type="submit" style="cursor:pointer;">Simpan Perubahan</button></td>
            </tr>
        </table>

    </div>
    <!-- <label for="nama">Nama:</label> -->
    <input type="hidden" name="nama" value="<?php echo $user->nama; ?>" required><br>

    <!-- <label for="no_telepon">Nomor Telepon:</label> -->
    <input type="hidden" name="no_telepon" value="<?php echo $user->no_telepon; ?>" required><br>
    </form>
</body>
</html>
