<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('./css/style.css'); ?>">
    <title>Profile</title>
</head>
<body>
    <center><img src = "<?= $user['foto'] ?? base_url('assets/uploads/img/') ?>" 
        width="100%" heigth=100% alt=" ">
    </center>

    <center>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?=$user ['nama'] ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?=$user ['nama_kelas'] ?></td>
            </tr>        
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><?=$user ['npm'] ?></td>
            </tr>
        </table>
    </center>
    <!-- Nama    : Amelia Agustina Nainggolan<br>
    Kelas   : B<br>
    NPM     : 2117051080 -->


</body>

</html>