<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<br><a href="<?php echo base_url('user/create'); ?>">
<button type="button" class="btn btn-primary">Tambah Data</button>
</a><br><br>

<table border="2" class="table table-bordered">
    <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($users as $user){
        ?>
            <tr class="table-warning">
                <td><?= $user ['id'] ?></td>
                <td><?= $user ['nama'] ?></td>
                <td><?= $user ['npm'] ?></td>
                <td><?= $user ['nama_kelas'] ?></td>
                <td>
                    <a href="<?= base_url('user/' . $user['id'])?>">Detail</a>
                    <a href="<?= base_url('user/' . $user['id'] . '/edit')?>">Edit</a>
                    
                    <form action ="<?= base_url('user/' . $user['id'])?>" method = "POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit">Delete</button>
                    </form>
                    
                    <!-- <button type="button" class="btn btn-warning">Edit</button> -->
                    <!-- <button type="button" class="btn btn-danger">Delete</button> -->
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?= $this->endSection()?>