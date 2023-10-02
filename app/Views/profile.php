<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

    <center><img src = "
        <?php 
            echo base_url('./img/amel.jpg'); 
        ?> " 
        width="250px">
    </center>

    <div class="row alignment-items-center" 
        style="position:absolute; 
        background-color:white;
        width:60%;
        left:50%;
        top:45%;
        transform:translate(-50%, -45%);
        border-radius:15px;
        padding:25px;
        padding-bottom: 35px;
        color: black;
        background-color: #fdfeff47;
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(25px);"
    > 
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

    <?= $this->endSection()?>