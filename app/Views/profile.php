<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('./css/style.css'); ?>">
    <title>Profile</title>
</head>
<body>
    <center><img src = "
        <?php 
            echo base_url('./img/amel.jpg'); 
        ?> " 
        width="250px">
    </center>

    <center>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?=$nama ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?=$kelas ?></td>
            </tr>        
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><?=$npm ?></td>
            </tr>
        </table>
    </center>
    <!-- Nama    : Amelia Agustina Nainggolan<br>
    Kelas   : B<br>
    NPM     : 2117051080 -->
</body>

</html>